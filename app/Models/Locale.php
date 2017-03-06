<?php

namespace App\Models;

use Illuminate\Support\Collection;

class Locale extends BaseModel
{
    /**
     * @var string
     */
    private $locale;

    /**
     * @var string
     */
    private $name;

    /**
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @param string $locale
     * @return Locale
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;

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
     * @return Locale
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Make a Locale for the given values
     * @param string $key
     * @param string $name
     * @return Locale
     */
    private static function make($key, $name)
    {
        return (new Locale())
            ->setLocale($key)
            ->setName($name);
    }

    /**
     * Get all Locales for the given config
     * @param mixed $config
     * @return Collection
     */
    public static function all($config)
    {
        $locales = collect();

        foreach ($config as $key => $name) {
            $locales->push(Locale::make($key, $name));
        }

        return $locales;
    }
}