<?php

namespace Easir\SDK\Request;

use Easir\SDK\Request;
use Easir\SDK\Response\ListWebhooks as ListWebhooksResponse;

class ListWebhooks extends Request
{
    /**
     * @var string
     */
    protected $url = '/webhooks';
    /**
     * @var string
     */
    public $method = 'GET';
    /**
     * @var string
     */
    public $responseClass = ListWebhooksResponse::class;
}
