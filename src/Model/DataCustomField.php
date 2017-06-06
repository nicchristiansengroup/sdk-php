<?php

namespace Easir\SDK\Model;

use Easir\SDK\Response;

class DataCustomField extends Response
{
    public $id, $name, $label, $type, $required, $validation, $options, $hidden, $read_only, $sort_order,
        $team_id, $group_id;
}