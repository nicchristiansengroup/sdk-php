<?php

namespace Easir\SDK\Request\Model;

use Easir\SDK\Request\Model;

class Auth extends Model
{
    /**
     * @var integer
     */
    public $client_id;
    /**
     * @var string
     */
    public $client_secret;
    /**
     * @var string
     */
    public $refresh_token;
    /**
     * @var string
     */
    public $username;
    /**
     * @var string
     */
    public $password;
}
