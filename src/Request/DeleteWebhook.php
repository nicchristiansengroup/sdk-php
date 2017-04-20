<?php

namespace Easir\SDK\Request;

use Easir\SDK\Exception\RequestException;
use Easir\SDK\Request;
use Easir\SDK\Request\Model\GetById;
use Easir\SDK\Response\Generic;

class DeleteWebhook extends Request
{
    /**
     * @var string
     */
    protected $url = '/webhooks/%d';
    /**
     * @var string
     */
    public $method = 'DELETE';
    /**
     * @var bool
     */
    public $requiresAuth = true;
    /**
     * @var string
     */
    protected $modelClass = GetById::class;

    /**
     * @throws RequestException
     * @return string
     */
    public function getUrl()
    {
        $this->checkModel();

        return sprintf(parent::getUrl(), (int)$this->model->id);
    }
}