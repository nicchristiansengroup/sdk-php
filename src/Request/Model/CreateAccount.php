<?php

namespace Easir\SDK\Request\Model;

use Easir\SDK\Request\Model;

class CreateAccount extends Model
{
    /**
     * @var integer
     */
    public $id;
    /**
     * @var integer
     */
    public $user_id;
    /**
     * @var integer
     */
    public $team_id;
    /**
     * @var array
     */
    public $fixed_fields;
    /**
     * @var array
     */
    public $custom_fields;
}