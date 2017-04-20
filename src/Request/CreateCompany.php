<?php

namespace Easir\SDK\Request;

use Easir\SDK\Model\Company;
use Easir\SDK\Request;
use Easir\SDK\Request\Model\CreateCompany as CreateCompanyRequestModel;

/**
 * Request class for creating companies
 *
 * @package Easir\SDK\Request
 */
class CreateCompany extends Request
{
    /**
     * @var string
     */
    protected $url = '/companies';
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
    public $responseClass = Company::class;
    /**
     * @var string
     */
    protected $modelClass = CreateCompanyRequestModel::class;
}