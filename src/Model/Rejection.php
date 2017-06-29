<?php

namespace Easir\SDK\Model;

use Easir\SDK\Model;

class Rejection extends Model
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
    public $rejection_reason;
    /**
     * @var string
     */
    public $rejection_date;
}
