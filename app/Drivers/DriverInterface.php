<?php

namespace App\Drivers;

use App\Models\Locale;
use Illuminate\Support\Collection;

interface DriverInterface
{
    /**
     * Check if the given format is a valid driver format
     * @param string $format
     * @return boolean
     */
    static function isValid($format);

    /**
     * Convert the given json encoded config to Resources
     * @param mixed $config
     * @return Collection
     */
    function resources($config);

    /**
     * Get texts for the given Resource and Locale
     * @param \App\Models\Resource $resource
     * @param Locale $locale
     * @return Collection
     */
    function texts($resource, $locale);
}