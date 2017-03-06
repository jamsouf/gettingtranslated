<?php

namespace App\Drivers;

use App\Models\Resource;

class PhpArray implements DriverInterface
{
    /**
     * @inheritdoc
     */
    public static function isValid($format)
    {
        return $format == 'php-array';
    }

    /**
     * @inheritdoc
     */
    function resources($config)
    {
        $resources = collect();

        foreach ($config->files as $name => $displayName) {
            $resources->push(Resource::make([
                'driver' => $this,
                'location' => $config->path,
                'name' => $name,
                'displayName' => $displayName
            ]));
        }

        return $resources;
    }

    /**
     * @inheritdoc
     */
    function texts($resource, $locale)
    {
        $path = str_replace('{locale}', $locale->getLocale(), $resource->getLocation());
        $file = $path . $resource->getName();

        return collect(include $file);
    }
}