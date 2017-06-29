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
    /**
     * @var bool
     */
    public $disabled;
    /**
     * @var EscalationActive[]
     */
    public $escalation_active;
    /**
     * @var int
     */
    public $escalation_accept;
    /**
     * @var int
     */
    public $escalation_activity;
}
