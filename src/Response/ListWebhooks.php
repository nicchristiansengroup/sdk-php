<?php

namespace Easir\SDK\Response;

use Easir\SDK\Response;

/**
 * Class ListCompaniesResponse
 * @package Easir\SDK\Response
 */
class ListWebhooks extends Response
{
    protected $collections = ['data' => 'webhook'];

    public $data;
}