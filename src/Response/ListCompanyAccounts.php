<?php

namespace Easir\SDK\Response;

use Easir\SDK\Model\Account;
use Easir\SDK\Model\Pagination;
use Easir\SDK\Response;

/**
 * Class ListCompanyAccounts
 * @package Easir\SDK\Response
 */
class ListCompanyAccounts extends Response
{
    /**
     * @var array
     */
    protected $collections = ['data' => 'account'];
    /**
     * @var Account[]
     */
    public $data;
    /**
     * @var Pagination
     */
    public $pagination;
}