<?php

namespace Easir\SDK\Request;

use Easir\SDK\Request;
use Easir\SDK\Request\Model\CreateCase as CreateCasesRequestModel;
use Easir\SDK\Model\Cases;

/**
 * Request class for creating cases
 *
 * @package Easir\SDK\Request
 */
class CreateCases extends Request
{
    /**
     * @var string
     */
    protected $url = '/cases';
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
    public $responseClass = Cases::class;
    /**
     * @var string
     */
    protected $modelClass = CreateCasesRequestModel::class;
}