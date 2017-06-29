<?php

namespace Easir\SDK\Request;

use Easir\SDK\Model\User;
use Easir\SDK\Request;

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
     * @var string
     */
    public $responseClass = User::class;
}
