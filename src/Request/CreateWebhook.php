<?php

namespace Easir\SDK\Request;

use Easir\SDK\Model\Webhook;
use Easir\SDK\Request;
use Easir\SDK\Request\Model\CreateWebhook as CreateWebhookRequestModel;

class CreateWebhook extends Request
{
    /**
     * @var string
     */
    protected $url = '/webhooks';
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
    public $responseClass = Webhook::class;
    /**
     * @var string
     */
    protected $modelClass = CreateWebhookRequestModel::class;
}