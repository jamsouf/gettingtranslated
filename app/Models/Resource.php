<?php

namespace App\Models;

use App\Drivers\DriverInterface;
use Illuminate\Support\Collection;

class Resource extends BaseModel
{
    /**
     * @var DriverInterface
     */
    private $driver;

    /**
     * @var Bundle
     */
    private $bundle;

    /**
     * @var string
     */
    private $location;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $displayName;

    /**
     * @var Collection
     */
    private $keys;

    /**
     * @return DriverInterface
     */
    public function getDriver()
    {
        return $this->driver;
    }

    /**
     * @param DriverInterface $driver
     * @return $this
     */
    public function setDriver($driver)
    {
        $this->driver = $driver;

        return $this;
    }

    /**
     * @return Bundle
     */
    public function getBundle()
    {
        return $this->bundle;
    }

    /**
     * @param Bundle $bundle
     * @return $this
     */
    public function setBundle($bundle)
    {
        $this->bundle = $bundle;

        return $this;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param string $location
     * @return $this
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @param string $displayName
     * @return $this
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;

        return $this;
    }

    /**
     * @return Collection
     */
    public function getKeys()
    {
        if (!$this->keys) {
            $this->keys = Key::all($this->driver, $this);
        }

        return $this->keys;
    }

    /**
     * @param Collection $keys
     * @return $this
     */
    public function setKeys($keys)
    {
        $this->keys = $keys;

        return $this;
    }

    /**
     * Make a Resource for the given attributes
     * @param array $attributes
     * @return $this
     */
    public static function make($attributes = [])
    {
        return (new Resource())
            ->setDriver($attributes['driver'])
            ->setLocation($attributes['location'])
            ->setName($attributes['name'])
            ->setDisplayName($attributes['displayName']);
    }

    /**
     * Get all Resources for the given config
     * @param DriverInterface $driver
     * @param Bundle $bundle
     * @param mixed $config
     * @return Collection
     */
    public static function all($driver, $bundle, $config)
    {
        $resources = $driver->resources($config)->each(function ($resource) use ($bundle) {
            $resource->bundle = $bundle;
        });

        return $resources;
    }

    /**
     * Get the Resource for the given name in the given Bundle
     * @param string $name
     * @param Bundle $bundle
     * @return $this|null
     */
    public static function find($name, $bundle)
    {
        foreach ($bundle->getResources() as $resource) {
            if ($resource->name == $name) {
                return $resource;
            }
        }

        return null;
    }
}