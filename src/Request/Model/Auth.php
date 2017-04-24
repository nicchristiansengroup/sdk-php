<?php

namespace Easir\SDK\Request\Model;

use Easir\SDK\Request\Model;

/**
 * The request model for Auth
 *
 * @package Easir\SDK\Request\Model
 */
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
    // Only used for grantType=refresh_token
    public $refresh_token;
    /**
     * @var string
     */
    // Only used for grantType=password
    public $username;
    /**
     * @var string
     */
    public $password;
}