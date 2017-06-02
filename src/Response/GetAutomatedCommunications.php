<?php

namespace Easir\SDK\Response;

use Easir\SDK\Model\AutomatedCommunication;
use Easir\SDK\Response;
use Easir\SDK\Model\Pagination;

class GetAutomatedCommunications extends Response
{
    /**
     * @var array
     */
    protected $collections = ['data' => 'automated_communication'];
    /**
     * @var AutomatedCommunication[]
     */
    public $data;
    /**
     * @var Pagination
     */
    public $pagination;
}