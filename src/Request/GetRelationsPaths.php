<?php

namespace Easir\SDK\Request;

use Easir\SDK\Exception\RequestException;
use Easir\SDK\Request;
use Easir\SDK\Request\Model\GetRelationsPaths as RelationsPathsModel;
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
     * @var string
     */
    protected $modelClass = RelationsPathsModel::class;

    /**
     * @throws RequestException
     * @return string
     */
    public function getUrl()
    {
        $this->checkModel();

        return parent::getUrl();
    }
}