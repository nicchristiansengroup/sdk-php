<?php

namespace Easir\SDK\Model;

use Easir\SDK\Model;

class Milestone extends Model
{
    /**
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
     * @var int|null
     */
    public $suggest_task_after;
    /**
     * @var ContentSuggestion[]
     */
    public $content_suggestions;
    /**
     * @var Step[]
     */
    public $extra_step;
    /**
     * @var array
     */
    public $additional_steps;
    /**
     * @var AutomatedCommunication[]
     */
    public $automated_communications;
}
