<?php

namespace Easir\SDK\Response;

use Easir\SDK\Model\Pagination;
use Easir\SDK\Model\Team;
use Easir\SDK\Response;

/**
 * Class ListCompanyTeams
 * @package Easir\SDK\Response
 */
class ListCompanyTeams extends Response
{
    /**
     * @var array
     */
    protected $collections = ['data' => 'team'];
    /**
     * @var Team[]
     */
    public $data;
    /**
     * @var Pagination
     */
    public $pagination;
}