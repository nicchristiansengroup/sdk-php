<?php

namespace Easir\SDK\Request;

use Easir\SDK\Model\Lead;
use Easir\SDK\Request;
use Easir\SDK\Request\Model\CreateLead as CreateLeadRequestModel;

class CreateLead extends Request
{
    protected $url = '/leads';
    public $method = 'POST';
    public $requiresAuth = true;
    public $responseClass = Lead::class;
    protected $modelClass = CreateLeadRequestModel::class;
}