<?php

namespace Easir\SDK\Model;

use Easir\SDK\Model;

class LeadData extends Model
{
    /**
     * @var string
     */
    public $key;
    /**
     * @var string
     */
    public $value;

    /**
     * @param $key
     * @param $value
     * @return static
     */
    public static function create($key, $value) {
        return new static(["key" => $key, "value" => $value]);
    }
}
