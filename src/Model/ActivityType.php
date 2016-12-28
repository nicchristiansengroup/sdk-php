<?php

namespace Easir\SDK\Model;

use Easir\SDK\Response;

class ActivityType extends Response
{
    protected $collections = [
        'milestones' => 'activity_type',
        'supportive' => 'activity_type',
        'content_suggestions' => 'content_suggestion',
        'automated_communications' => 'automated_communication',
        'extra_step' => 'step',
        'additional_steps' => 'step',
    ];

    public $id, $name, $sort_order, $set_status, $suggest_task_after, $tempalte_id, $content_suggestions,
        $extra_step, $additional_steps, $automated_communications, $chance_of_success;
}