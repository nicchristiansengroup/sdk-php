<?php

namespace Easir\SDK\Model;

use Easir\SDK\Response;

class Activity extends Response
{
    /**
     * @var array
     */
    protected $collections = ['activity_types' => 'activity_type'];
    /**
     * @var string
     */
    public $id;
    /**
     * @var string
     */
    public $case_id;
    /**
     * @var array
     */
    public $activity_types;
    /**
     * @var string
     */
    public $communication_channel;
    /**
     * @var string
     */
    public $note;
    /**
     * @var string
     */
    public $task;
    /**
     * @var string
     */
    public $created_at;
    /**
     * @var string
     */
    public $updated_at;
}
