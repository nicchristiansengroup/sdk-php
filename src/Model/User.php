<?php

namespace Easir\SDK\Model;

use Easir\SDK\Response;

class User extends Response
{
    protected $collections = ['roles' => 'role'];

    /**
     * @var int
     */
    public $id;
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
    public $phone_number;
    /**
     * @var string
     */
    public $job_title;
    /**
     * @var string
     */
    public $email;
    /**
     * @var bool
     */
    public $email_notifications;
    /**
     * @var string
     */
    public $profile_picture;
    /**
     * @var UserType
     */
    public $user_type;
    /**
     * @var Timezone
     */
    public $timezone;
    /**
     * @var Locale
     */
    public $locale;
    /**
     * @var Role[]
     */
    public $roles;
    /**
     * @var bool
     */
    public $system_user;
    /**
     * @var string
     */
    public $created_at;
    /**
     * @var string
     */
    public $updated_at;
    public $team;
    public $signature;
    public $company;
    public $settings;
}
