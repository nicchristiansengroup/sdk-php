<?php

namespace Easir\SDK\Request;

use Easir\SDK\Exception\RequestException;
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
     * @var bool
     */
    public $requiresAuth = true;
    /**
     * @var string
     */
    public $responseClass = RelationsPathsResponse::class;

    /**
     * @throws RequestException
     * @return string
     */
    public function getUrl()
    {
        return parent::getUrl();
    }
}
