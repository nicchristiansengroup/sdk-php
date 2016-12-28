<?php

namespace Easir\SDK\Request\Model;

use Easir\SDK\Request\Model;

class CreateLead extends Model
{
    public $lead_type_id, $team_id, $agency_team_id, $lead_source, $b2c = true, $expires_at, $interest,
        $lead_data, $lead_user, $external_weight, $account, $contact;
}