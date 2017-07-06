<?php

namespace Easir\SDK\Model;

use Easir\SDK\Response;

class Level extends Response
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var int
     */
    public $level_threshold;
    /**
     * @var float
     */
    public $points;
    /**
     * @var float
     */
    public $progress_pct;
    /**
     * @var NextLevel
     */
    public $next_level;
}
