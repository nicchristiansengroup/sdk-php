<?php

namespace Easir\SDK\Model;

use Easir\SDK\Model;

class EscalationActive extends Model
{
    /**
     * @var int
     */
    public $day_of_week;
    /**
     * @var bool
     */
    public $closed;
    /**
     * @var string
     */
    public $open;
    /**
     * @var string
     */
    public $close;
}
