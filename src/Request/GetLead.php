<?php

namespace Easir\SDK\Request;

use Easir\SDK\Exception\RequestException;
use Easir\SDK\Model\Lead;
use Easir\SDK\Request;
use Easir\SDK\Request\Model\GetById;
use Easir\SDK\Model\Team;

class GetLead extends Request
{
    protected $url = '/leads/%s';
    public $method = 'GET';
    public $requiresAuth = true;
    public $responseClass = Lead::class;
    protected $modelClass = GetById::class;

    public function getUrl()
    {
        if (is_null($this->model)) {
            throw new RequestException("We can't make a request without a RequestModel", RequestException::MISSING_MODEL);
        } else {
            return sprintf(parent::getUrl(), (string)$this->model->id);
        }
    }
}