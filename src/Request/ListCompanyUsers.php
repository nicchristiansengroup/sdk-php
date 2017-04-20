<?php

namespace Easir\SDK\Request;

use Easir\SDK\Request;
use Easir\SDK\Request\Model\ListCompanyUsers as ListCompanyUsersModel;
use Easir\SDK\Response\ListCompanyUsers as ListCompanyUsersResponse;

/**
 * Request class for listing company users
 *
 * @package Easir\SDK\Request
 */
class ListCompanyUsers extends Request
{
    /**
     * @var string
     */
    protected $url = '/companies/%d/users?page=%d&per_page=%d&q=%s';
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
    public $responseClass = ListCompanyUsersResponse::class;
    /**
     * @var string
     */
    protected $modelClass = ListCompanyUsersModel::class;

    /**
     * @throws RequestException
     * @return string
     */
    public function getUrl()
    {
        $this->checkModel();

        return sprintf(parent::getUrl(), (int)$this->model->id, (int)$this->model->page, (int)$this->model->perPage, urlencode((string)$this->model->searchTerm));
    }
}