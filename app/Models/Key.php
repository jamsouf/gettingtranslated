<?php

namespace App\Models;

use App\Drivers\DriverInterface;
use Illuminate\Support\Collection;

class Key extends BaseModel
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var Collection
     */
    private $values;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Key
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * @param Collection $values
     * @return Key
     */
    public function setValues($values)
    {
        $this->values = $values;

        return $this;
    }

    /**
     * Add a value for the given locale to the Key
     * @param string $locale
     * @param string $value
     * @return Key
     */
    public function addValue($locale, $value)
    {
        $this->values->put($locale, $value);

        return $this;
    }

    /**
     * Make a Key for the given parameters
     * @param string $name
     * @param Collection|null $values
     * @return Key
     */
    public static function make($name, $values = null)
    {
        return (new Key())
            ->setName($name)
            ->setValues($values ?: collect());
    }

    /**
     * Get all Keys from the given Resource
     * @param DriverInterface $driver
     * @param \App\Models\Resource $resource
     * @return Collection
     */
    public static function all($driver, $resource)
    {
        $keys = collect();

        foreach ($resource->getBundle()->getLocales() as $locale) {
            $texts = $driver->texts($resource, $locale);
            foreach ($texts as $text_key => $text_value) {
                $key = $keys->get($text_key) ?: self::make($text_key);
                $key->addValue($locale->getLocale(), $text_value);
                $keys->put($text_key, $key);
            }
        }

        return $keys;
    }
}