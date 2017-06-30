<?php

namespace Easir\SDK\Model;

use Easir\SDK\Model;

abstract class Field extends Model
{
    public $name, $value;

    /**
     * @param string $name
     * @param string $value
     * @return self
     */
    public static function create($name, $value) {
        return new static(['name' => $name, 'value' => $value]);
    }
}
