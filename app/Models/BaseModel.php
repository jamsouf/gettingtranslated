<?php

namespace App\Models;

class BaseModel
{
    /**
     * Magic getter
     * @param string $name
     * @return mixed|null
     */
    public function __get($name)
    {
        return property_exists($this, $name) ? $this->{'get' . $name}() : null;
    }

    /**
     * Magic setter
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        if (property_exists($this, $name)) {
            $this->{'set' . $name}($value);
        }
    }
}