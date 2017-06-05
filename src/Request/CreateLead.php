<?php

namespace Easir\SDK\Request;

use Easir\SDK\Model\Lead;
use Easir\SDK\Request;
use Easir\SDK\Request\Model\CreateLead as CreateLeadRequestModel;

class CreateLead extends Request
{
    /**
     * @var string
     */
    protected $url = '/leads';
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
    public $responseClass = Lead::class;
    /**
     * @var string
     */
    protected $modelClass = CreateLeadRequestModel::class;
}
