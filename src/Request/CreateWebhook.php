<?php

namespace Easir\SDK\Request;

use Easir\SDK\Model\Webhook;
use Easir\SDK\Request;
use Easir\SDK\Request\Model\CreateWebhook as CreateWebhookRequestModel;

class CreateWebhook extends Request
{
    protected $url = '/webhooks';
    public $method = 'POST';
    public $requiresAuth = true;
    public $responseClass = Webhook::class;
    protected $modelClass = CreateWebhookRequestModel::class;
}