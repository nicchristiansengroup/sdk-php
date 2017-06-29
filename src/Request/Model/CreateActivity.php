<?php

namespace Easir\SDK\Request\Model;

use Easir\SDK\Request\Model;

class CreateActivity extends Model
{
    /**
     * @var string
     */
    public $case_id;
    /**
     * @var string[]
     */
    public $activity_types;
    /**
     * @var string
     */
    public $communication_channel;
    /**
     * @var null|string
     */
    public $note = null;
    /**
     * @var null|string
     */
    public $task = null;
}
