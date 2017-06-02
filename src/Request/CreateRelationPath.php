<?php

namespace Easir\SDK\Request;

use Easir\SDK\Request;
use Easir\SDK\Request\Model\CreateRelationPath as CreateRelationPathModel;
use Easir\SDK\Model\RelationsPath;

class CreateRelationPath extends Request
{
    /**
     * @var string
     */
    protected $url = '/relations-paths';
    /**
     * @var string
     */
    public $method = 'POST';
    /**
     * @var bool
     */
    public $requiresAuth = true;
    /**
     * @var string
     */
    public $responseClass = RelationsPath::class;
    /**
     * @var string
     */
    protected $modelClass = CreateRelationPathModel::class;
}