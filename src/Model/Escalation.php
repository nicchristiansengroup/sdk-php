<?php

namespace Easir\SDK\Model;

use Easir\SDK\Model;

class Escalation extends Model
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
    public $escalation_date;
}
