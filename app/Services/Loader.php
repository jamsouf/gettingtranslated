<?php

namespace App\Services;

use App\Drivers\DriverInterface;

class Loader
{
    /**
     * Read the json config
     * @return mixed
     */
    public static function config()
    {
        return json_decode(file_get_contents(base_path('gettranslated.json')));
    }

    /**
     * Detect the appropriate driver from the given format
     * @param string $format
     * @return DriverInterface|null
     */
    public static function driver($format)
    {
        $drivers = include base_path('config/driver.php');

        foreach ($drivers as $driver) {
            if ($driver::isValid($format)) {
                return new $driver;
            }
        }

        return null;
    }
}