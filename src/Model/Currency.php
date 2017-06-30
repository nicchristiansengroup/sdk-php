<?php

namespace Easir\SDK\Model;

use Easir\SDK\Model;

class Currency extends Model
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $name_plural;
    /**
     * @var string
     */
    public $code;
    /**
     * @var string
     */
    public $symbol;
    /**
     * @var string
     */
    public $symbol_native;
    /**
     * @var int
     */
    public $decimal_digits;
    /**
     * @var int
     */
    public $rounding;
}
