<?php

namespace Easir\SDK\Request;

use Easir\SDK\Request;
use Easir\SDK\Response\GetRelationsPaths as RelationsPathsResponse;

class GetRelationsPaths extends Request
{
    /**
     * @var string
     */
    protected $url = '/relations-paths';
    /**
     * @var string
     */
    public $method = 'GET';
    /**
     * @var string
     */
    public $responseClass = RelationsPathsResponse::class;
}
