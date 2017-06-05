<?php

namespace Easir\SDK\Request;

use Easir\SDK\Exception\RequestException;
use Easir\SDK\Request;
use Easir\SDK\Request\Model\Search as GetRolesModel;
use Easir\SDK\Response\GetRoles as GetRolesResponse;

class GetRoles extends Request
{
    /**
     * @var string
     */
    protected $url = '/roles?page=%d&per_page=%d';
    /**
     * @var string
     */
    public $method = 'GET';
    /**
     * @var bool
     */
    public $requiresAuth = false;
    /**
     * @var string
     */
    public $responseClass = GetRolesResponse::class;
    /**
     * @var string
     */
    protected $modelClass = GetRolesModel::class;

    /**
     * @throws RequestException
     * @return string
     */
    public function getUrl()
    {
        $this->checkModel();

        return sprintf(parent::getUrl(),
            (int)$this->model->page,
            (int)$this->model->perPage
        );
    }
}