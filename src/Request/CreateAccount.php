<?php

namespace Easir\SDK\Request;

use Easir\SDK\Request;
use Easir\SDK\Request\Model\CreateAccount as CreateAccountRequestModel;
use Easir\SDK\Model\Account;

/**
 * Request class for creating accounts
 *
 * @package Easir\SDK\Request
 */
class CreateAccount extends Request
{
    /**
     * @var string
     */
    protected $url = '/accounts';
    /**
     * @var string
     */
    public $method = 'POST';
    /**
     * @var bool
     */
    public $requiresAuth = true;
    /**
     * @var string
     */
    public $responseClass = Account::class;
    /**
     * @var string
     */
    protected $modelClass = CreateAccountRequestModel::class;
}