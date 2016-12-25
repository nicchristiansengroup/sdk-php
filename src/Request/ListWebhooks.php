<?php

namespace Easir\SDK\Request;

use Easir\SDK\Request;
use Easir\SDK\Response\ListWebhooks as ListWebhooksResponse;

/**
 * Request class for getting an access token for a given user
 *
 * @package Easir\SDK\Request
 */
class ListWebhooks extends Request
{
    protected $url = '/webhooks';
    public $method = 'GET';
    public $requiresAuth = true;
    public $responseClass = ListWebhooksResponse::class;
}