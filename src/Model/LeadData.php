<?php

namespace Easir\SDK\Model;

use Easir\SDK\Model;

class LeadData extends Model
{
    public $key, $value;

    public static function create($key, $value) {
        return new static(["key" => $key, "value" => $value]);
    }
}