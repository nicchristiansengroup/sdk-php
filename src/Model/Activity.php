<?php

namespace Easir\SDK\Model;

use Easir\SDK\Response;

class Activity extends Response
{
    protected $collections = ['activity_types' => 'activity_type'];

    public $id, $case_id, $activity_types, $communication_channel, $note, $task, $created_at, $updated_at;
}