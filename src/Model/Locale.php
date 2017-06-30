<?php

namespace Easir\SDK\Model;

use Easir\SDK\Model;

class Locale extends Model
{
    /**
     * @var string
     */
    public $code;
    /**
     * @var string
     */
    public $language_name;
    /**
     * @var Country
     */
    public $country;
}
