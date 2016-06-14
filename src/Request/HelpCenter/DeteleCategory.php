<?php

namespace Easir\SDK\Request\HelpCenter;

use Easir\SDK\Exception\RequestException;
use Easir\SDK\Request;
use Easir\SDK\Request\Model\GetById;

class DeleteCategory extends Request
{
    protected $url = '/helpcenter/categories/%d';
    public $method = 'DELETE';
    public $requiresAuth = true;
    protected $modelClass = GetById::class;

    public function getUrl()
    {
        if (is_null($this->model)) {
            throw new RequestException("We can't make a request without a RequestModel", RequestException::MISSING_MODEL);
        } else {
            return sprintf(parent::getUrl(), $this->model->id);
        }
    }
}