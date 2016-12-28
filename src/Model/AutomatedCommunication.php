<?php

namespace Easir\SDK\Model;

use Easir\SDK\Response;

class AutomatedCommunication extends Response
{
    protected $collections = ['communications' => 'communication'];

    public $id, $team_id, $name, $description, $icon, $communications, $created_at, $updated_at;
}