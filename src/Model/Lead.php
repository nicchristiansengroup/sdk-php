<?php

namespace Easir\SDK\Model;

use Easir\SDK\Response;

class Lead extends Response
{
    protected $collections = ['lead_data' => 'lead_data'];

    public $id, $company_id, $user_id, $team_id, $agency_team_id, $team, $lead_type_id, $lead_type, $b2c,
        $interest, $lead_source, $lead_user, $lead_data, $status, $rejections, $acceptions, $assignments,
        $escalations, $calls, $revocations, $case_id, $original_account, $account_id, $account, $original_contact,
        $contact_id, $contact, $expires_at, $external_weight, $created_at, $updated_at;
}