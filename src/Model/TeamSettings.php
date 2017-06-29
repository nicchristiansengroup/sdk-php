<?php

namespace Easir\SDK\Model;

use Easir\SDK\Model;

class TeamSettings extends Model
{
    /**
     * @var array
     */
    protected $collections = ['escalation_active' => 'escalation_active'];

    public $users;
    public $disabled;
    public $escalation_active;
    public $escalation_accept;
    public $escalation_activity;
}
