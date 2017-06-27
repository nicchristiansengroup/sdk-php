<?php

namespace Easir\SDK\Model;

use Easir\SDK\Response;

class RelationsPath extends Response
{
    /**
     * @var string
     */
    public $id;
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
    /**
     * @var int|null
     */
    public $team_id;
    /**
     * @var int|null
     */
    public $group_id;
    /**
     * @var string
     */
    public $created_at;
    /**
     * @var string
     */
    public $updated_at;
}
