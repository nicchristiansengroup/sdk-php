<?php

namespace Easir\SDK\Model;

use Easir\SDK\Response;

class User extends Response
{
    /**
     * @var array
     */
    protected $collections = ['roles' => 'role', 'teams' => 'team'];
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
    /**
     * @var Team
     */
    public $team;
    /**
     * @var Team[]
     */
    public $teams;
    /**
     * @var string[]
     */
    public $rights;
    /**
     * @var Signature
     */
    public $signature;
    /**
     * @var Company
     */
    public $company;
    /**
     * @var array
     */
    public $subscriptions;
    /**
     * @var string[]
     */
    public $features;
    /**
     * @var bool
     */
    public $sso;
    /**
     * @var array
     */
    public $level;
}
