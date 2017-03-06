<?php

namespace App\Models;

use App\Drivers\DriverInterface;
use App\Services\Loader;
use Illuminate\Support\Collection;

class Bundle extends BaseModel
{
    /**
     * @var DriverInterface
     */
    private $driver;

    /**
     * @var string
     */
    private $name;

    /**
     * @var Collection
     */
    private $locales;

    /**
     * @var Collection
     */
    private $resources;

    /**
     * @return DriverInterface
     */
    public function getDriver()
    {
        return $this->driver;
    }

    /**
     * @param DriverInterface $driver
     * @return Bundle
     */
    public function setDriver($driver)
    {
        $this->driver = $driver;

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
     * @return Bundle
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection
     */
    public function getLocales()
    {
        return $this->locales;
    }

    /**
     * @param Collection $locales
     * @return Bundle
     */
    public function setLocales($locales)
    {
        $this->locales = $locales;

        return $this;
    }

    /**
     * @return Collection
     */
    public function getResources()
    {
        return $this->resources;
    }

    /**
     * @param Collection $resources
     * @return Bundle
     */
    public function setResources($resources)
    {
        $this->resources = $resources;

        return $this;
    }

    /**
     * Make a Bundle for the given config
     * @param mixed $config
     * @return Bundle
     */
    private static function make($config)
    {
        $driver = Loader::driver($config->format);
        $bundle = new Bundle();
        $bundle->setDriver($driver)
            ->setName($config->name)
            ->setLocales(Locale::all($config->locales))
            ->setResources(Resource::all($driver, $bundle, $config->resource));

        return $bundle;
    }

    /**
     * Get all Bundles
     * @return Collection
     */
    public static function all()
    {
        $bundles = collect();

        foreach (Loader::config()->bundles as $bundle_config) {
            $bundles->push(self::make($bundle_config));
        }

        return $bundles;
    }

    /**
     * Get the Bundle for the given name
     * @param string $name
     * @return Bundle|null
     */
    public static function find($name)
    {
        foreach (Loader::config()->bundles as $bundle_config) {
            if ($bundle_config->name == $name) {
                return self::make($bundle_config);
            }
        }

        return null;
    }
}