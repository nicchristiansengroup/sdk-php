<?php

namespace Easir\SDK\Response;

use Easir\SDK\Response;

/**
 * Class AuthResponse
 * @package Easir\SDK\Response
 */
class Auth extends Response
{
    /**
     * @var string
     */
    public $access_token;
    /**
     * @var string
     */
    public $token_type;
    /**
     * @var string
     */
    public $expires_in;
    /**
     * @var string
     */
    public $refresh_token;
}