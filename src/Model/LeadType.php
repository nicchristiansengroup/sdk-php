<?php

namespace Easir\SDK\Model;

use Easir\SDK\Model;

class LeadType extends Model
{
    protected $collections = ['relations_paths' => 'relations_path', 'escalation_active' => 'escalation_active'];

    public $id, $name, $icon, $team_id, $relations_paths, $escalation_accept, $escalation_activity, $disabled,
        $highlighted, $team_settings, $escalation_active, $lead_count, $sort_order, $created_at, $updated_at;
}