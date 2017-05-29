<?php

namespace Easir\SDK\Model;

use Easir\SDK\Model;

class DataFixedField extends Model
{
    public $id, $name, $label, $type, $required, $validation, $options, $hidden, $read_only, $sort_order,
        $team_id, $group_id;
}