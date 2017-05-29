<?php

namespace Easir\SDK\Response;

use Easir\SDK\Model\RelationsPath;
use Easir\SDK\Response;

/**
 * Class ListCompanyUsers
 * @package Easir\SDK\Response
 */
class GetRelationsPaths extends Response
{
    /**
     * @var array
     */
    protected $collections = ['data' => 'relations_path'];
    /**
     * @var RelationsPath[]
     */
    public $data;
}