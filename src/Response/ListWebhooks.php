<?php

namespace Easir\SDK\Response;

use Easir\SDK\Model\Webhook;
use Easir\SDK\Response;

class ListWebhooks extends Response
{
    /**
     * @var array
     */
    protected $collections = ['data' => 'webhook'];
    /**
     * @var Webhook[]
     */
    public $data;
}
