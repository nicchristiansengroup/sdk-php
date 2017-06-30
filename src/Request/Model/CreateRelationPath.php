<?php

namespace Easir\SDK\Request\Model;

use Easir\SDK\Model\ActivityTypes;
use Easir\SDK\Request\Model;

class CreateRelationPath extends Model
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var bool
     */
    public $is_sales_type;
    /**
     * @var ActivityTypes
     */
    public $activity_types;
}
