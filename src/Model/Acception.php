<?php

namespace Easir\SDK\Model;

use Easir\SDK\Model;

class Acception extends Model
{
    /**
     * @var int
     */
    public $team_id;
    /**
     * @var int
     */
    public $user_id;
    /**
     * @var string
     */
    public $case_id;
    /**
     * @var string
     */
    public $account_id;
    /**
     * @var string
     */
    public $contact_id;
    /**
     * @var string
     */
    public $accepted_date;
    /**
     * @var string
     */
    public $first_activity_at;
}
