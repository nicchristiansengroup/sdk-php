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
    /**
     * @var string
     */
    protected $url = '/webhooks';
    /**
     * @var string
     */
    public $method = 'GET';
    /**
     * @var bool
     */
    public $requiresAuth = true;
    /**
     * @var string
     */
    public $responseClass = ListWebhooksResponse::class;
}