<?php

namespace Easir\SDK\Request\Model;

use Easir\SDK\Request\Model;

class CreateUser extends Model
{
    /**
     * @var string
     */
    public $email;
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
    public $password;
    /**
     * @var string
     */
    public $job_title;
    /**
     * @var string
     */
    public $phone_number;
    /**
     * @var string
     */
    public $timezone = 'Europe/Copenhagen';
    /**
     * @var array
     */
    public $team_ids;
    /**
     * @var array
     */
    public $role_ids;
    /**
     * @var string
     */
    public $locale = 'da-DK';
    /**
     * @var bool
     */
    public $system_user = false;
}
