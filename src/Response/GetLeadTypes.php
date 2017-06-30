<?php

namespace Easir\SDK\Response;

use Easir\SDK\Model\LeadType;
use Easir\SDK\Model\Pagination;
use Easir\SDK\Response;

class GetLeadTypes extends Response
{
    /**
     * @var array
     */
    protected $collections = ['data' => 'lead_type'];
    /**
     * @var LeadType[]
     */
    public $data;
    /**
     * @var Pagination
     */
    public $pagination;
}
