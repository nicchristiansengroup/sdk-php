<?php

namespace Easir\SDK\Model;

use Easir\SDK\Model;

class Revocation extends Model
{
    /**
     * @var int
     */
    public $team_id;
    /**
     * @var string
     */
    public $escalation_type;
    /**
     * @var string
     */
    public $revocation_date;
}
