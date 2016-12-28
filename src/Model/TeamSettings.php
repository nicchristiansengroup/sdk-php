<?php

namespace Easir\SDK\Model;

use Easir\SDK\Model;

class TeamSettings extends Model
{
    protected $collections = ['escalation_active' => 'escalation_active'];

    public $users, $disabled, $escalation_active, $escalation_accept, $escalation_activity;
}