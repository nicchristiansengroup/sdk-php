<?php

namespace Easir\SDK\Request;

use Easir\SDK\Exception\RequestException;
use Easir\SDK\Request;
use Easir\SDK\Request\Model\GetById;
use Easir\SDK\Response\Generic;

class DeleteWebhook extends Request
{
    protected $url = '/webhooks/%d';
    public $method = 'DELETE';
    public $requiresAuth = true;
    protected $modelClass = GetById::class;

    public function getUrl()
    {
        if (is_null($this->model)) {
            throw new RequestException("We can't make a request without a RequestModel", RequestException::MISSING_MODEL);
        } else {
            return sprintf(parent::getUrl(), (int)$this->model->id);
        }
    }
}