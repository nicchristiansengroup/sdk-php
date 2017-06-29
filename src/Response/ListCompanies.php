<?php

namespace Easir\SDK\Response;

use Easir\SDK\Model\Company;
use Easir\SDK\Model\Pagination;
use Easir\SDK\Response;

class ListCompanies extends Response
{
    /**
     * @var array
     */
    protected $collections = ['data' => 'company'];
    /**
     * @var Company[]
     */
    public $data;
    /**
     * @var Pagination
     */
    public $pagination;
}
