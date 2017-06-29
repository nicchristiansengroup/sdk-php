<?php

namespace Easir\SDK\Request\Model;

use Easir\SDK\Model\CustomField;
use Easir\SDK\Model\FixedField;
use Easir\SDK\Request\Model;

class CreateAccount extends Model
{
    /**
     * @var integer
     */
    public $user_id;
    /**
     * @var integer
     */
    public $team_id;
    /**
     * @var FixedField[]
     */
    public $fixed_fields;
    /**
     * @var CustomField[]
     */
    public $custom_fields;
}
