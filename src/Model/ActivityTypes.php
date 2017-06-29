<?php

namespace Easir\SDK\Model;

use Easir\SDK\Model;

class ActivityTypes extends Model
{
    protected $collections = [
        'milestones' => 'milestone',
        'supportive' => 'supportive'
    ];

    /**
     * @var Milestone[]
     */
    public $milestones;
    /**
     * @var Supportive[]
     */
    public $supportive;
}
