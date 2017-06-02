<?php

namespace Easir\SDK\Model;

use Easir\SDK\Response;

class Account extends Response
{
    protected $collections = ['fixed_fields' => 'fixed_field', 'custom_fields' => 'custom_field'];

    public $id, $b2c, $user_id, $team_id, $fixed_fields, $custom_fields, $created_at, $updated_at;
}
