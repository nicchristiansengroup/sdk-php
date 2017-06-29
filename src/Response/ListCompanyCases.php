<?php

namespace Easir\SDK\Response;

use Easir\SDK\Model\Cases;
use Easir\SDK\Model\Pagination;
use Easir\SDK\Response;

class ListCompanyCases extends Response
{
    /**
     * @var array
     */
    protected $collections = ['data' => 'cases'];
    /**
     * @var Cases[]
     */
    public $data;
    /**
     * @var Pagination
     */
    public $pagination;
}
