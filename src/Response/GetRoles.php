<?php

namespace Easir\SDK\Response;

use Easir\SDK\Model\Pagination;
use Easir\SDK\Model\Role;
use Easir\SDK\Response;

class GetRoles extends Response
{
    /**
     * @var array
     */
    protected $collections = ['data' => 'role'];
    /**
     * @var Role[]
     */
    public $data;
    /**
     * @var Pagination
     */
    public $pagination;
}