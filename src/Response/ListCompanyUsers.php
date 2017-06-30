<?php

namespace Easir\SDK\Response;

use Easir\SDK\Model\Pagination;
use Easir\SDK\Model\User;
use Easir\SDK\Response;

class ListCompanyUsers extends Response
{
    /**
     * @var array
     */
    protected $collections = ['data' => 'user'];
    /**
     * @var User[]
     */
    public $data;
    /**
     * @var Pagination
     */
    public $pagination;
}
