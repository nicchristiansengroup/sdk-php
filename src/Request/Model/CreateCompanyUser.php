<?php

namespace Easir\SDK\Request\Model;

use Easir\SDK\Request\Model;

class CreateCompanyUser extends Model
{
    /**
     * @var string
     */
    public $first_name;
    /**
     * @var string
     */
    public $last_name;
    /**
     * @var string
     */
    public $email;
    /**
     * @var string
     */
    public $password;
}
