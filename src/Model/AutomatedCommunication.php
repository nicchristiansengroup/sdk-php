<?php

namespace Easir\SDK\Model;

use Easir\SDK\Model;

class AutomatedCommunication extends Model
{
    protected $collections = ['communications' => 'communication'];

    public $id, $team_id, $name, $description, $icon, $communications, $created_at, $updated_at;
}