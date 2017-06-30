<?php

namespace Easir\SDK\Model;

use Easir\SDK\Model;

class LeadType extends Model
{
    /**
     * @var array
     */
    protected $collections = ['relations_paths' => 'relations_path', 'escalation_active' => 'escalation_active'];
    /**
     * @var string
     */
    public $id;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $icon;
    /**
     * @var int|null
     */
    public $team_id;
    /**
     * @var RelationsPath[]
     */
    public $relations_paths;
    /**
     * @var int
     */
    public $escalation_accept;
    /**
     * @var int
     */
    public $escalation_activity;
    /**
     * @var bool
     */
    public $disabled;
    /**
     * @var bool
     */
    public $highlighted;
    /**
     * @var TeamSettings
     */
    public $team_settings;
    /**
     * @var EscalationActive[]
     */
    public $escalation_active;
    /**
     * @var int
     */
    public $lead_count;
    /**
     * @var int
     */
    public $sort_order;
    /**
     * @var string
     */
    public $created_at;
    /**
     * @var string
     */
    public $updated_at;
}
