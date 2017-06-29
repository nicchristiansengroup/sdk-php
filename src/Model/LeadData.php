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
     * @param string
     * @param string
     * @return self
     */
    public static function create($key, $value) {
        return new static(['key' => $key, 'value' => $value]);
    }
}
