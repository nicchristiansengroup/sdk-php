<?php

namespace Easir\SDK\Request;

use Easir\SDK\Model\User;
use Easir\SDK\Request;

/**
 * Request class for getting an access token for a given user
 *
 * @package Easir\SDK\Request
 */
class GetMe extends Request
{
    /**
     * @var string
     */
    protected $url = '/me';
    /**
     * @var string
     */
    public $method = 'GET';
    /**
     * @var bool
     */
    public $requiresAuth = true;
    /**
     * @var string
     */
    public $responseClass = User::class;
}