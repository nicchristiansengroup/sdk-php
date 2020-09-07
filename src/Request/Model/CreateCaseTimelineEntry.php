<?php

namespace Easir\SDK\Request\Model;

use Easir\SDK\Request\Model;

class CreateCaseTimelineEntry extends Model
{
    /**
     * @var string
     */
    public $case_id;
    /**
     * @var string
     */
    public $title;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $created_at;
}
