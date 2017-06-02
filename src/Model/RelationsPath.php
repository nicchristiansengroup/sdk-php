<?php

namespace Easir\SDK\Model;

use Easir\SDK\Response;

class RelationsPath extends Response
{
    protected $collections = ['activity_types' => 'activity_type'];

    public $id, $name, $is_sales_type, $activity_types, $team_id, $group_id, $created_at, $updated_at;
}