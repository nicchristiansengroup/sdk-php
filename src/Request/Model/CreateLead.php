<?php

namespace Easir\SDK\Request\Model;

use Easir\SDK\Request\Model;

class CreateLead extends Model
{
    /**
     * @var string
     */
    public $account_id;
    /**
     * @var array
     */
    public $account;
    /**
     * @var bool
     */
    public $b2c = true;
    /**
     * @var string
     */
    public $contact_id;
    /**
     * @var array
     */
    public $contact;
    /**
     * @var string
     */
    public $lead_source;
    /**
     * @var string
     */
    public $lead_type_id;
    /**
     * @var int
     */
    public $team_id;
    /**
     * @var int
     */
    public $agency_team_id;
    /**
     * @var string|null
     */
    public $expires_at;
    /**
     * @var string
     */
    public $interest;
    /**
     * @var string
     */
    public $lead_user;
    /**
     * @var array
     */
    public $lead_data;
    /**
     * @var int
     */
    public $external_weight;
}
