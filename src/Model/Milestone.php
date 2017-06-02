<?php

namespace Easir\SDK\Model;

use Easir\SDK\Model;

class Milestone extends Model
{
    /**
     * List of possible collection names and their types
     *
     * @var array
     */
    protected $collections = [
        'content_suggestions' => 'content_suggestion',
        'extra_step' => 'step',
        'automated_communications' => 'automated_communication',
    ];
    /**
     * @var string
     */
    public $id;
    /**
     * @var string
     */
    public $name;
    /**
     * @var int
     */
    public $sort_order;
    /**
     * @var string
     */
    public $set_status;
    /**
     * @var int
     */
    public $chance_of_success;
    /**
     * @var int
     */
    public $suggest_task_after;
    /**
     * @var array
     */
    public $content_suggestions;
    /**
     * @var array
     */
    public $extra_step;
    /**
     * @var array|string ???
     */
    public $additional_steps;
    /**
     * @var array
     */
    public $automated_communications;
}
