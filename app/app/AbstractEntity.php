<?php

namespace M2i\Framework;

abstract class AbstractEntity
{
    public function __construct($data = [])
    {
        foreach ($data as $property => $value) {
            $method = 'set' . ucfirst($property);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }    
    }
}