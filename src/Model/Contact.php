<?php

namespace Easir\SDK\Model;

use Easir\SDK\Response;

class Contact extends Response
{
    protected $collections = ['fixed_fields' => 'fixed_field', 'custom_fields' => 'custom_field'];

    public $id, $team_id, $fixed_fields, $custom_fields, $created_at, $updated_at;
}