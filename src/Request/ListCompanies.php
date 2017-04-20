<?php

namespace Easir\SDK\Request;

use Easir\SDK\Request;
use Easir\SDK\Request\Model\ListCompanies as ListCompaniesModel;
use Easir\SDK\Response\ListCompanies as ListCompaniesResponse;

/**
 * Request class for listing companies
 *
 * @package Easir\SDK\Request
 */
class ListCompanies extends Request
{
    /**
     * @var string
     */
    protected $url = '/companies';
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
    public $responseClass = ListCompaniesResponse::class;
    /**
     * @var string
     */
    protected $modelClass = ListCompaniesModel::class;

    /**
     * @return string
     */
    public function getUrl()
    {
        if (is_null($this->model)) {
            return parent::getUrl();
        } else {
            return parent::getUrl() . sprintf('?page=%d&per_page=%d&user_counts=%d&q=%s', (int)$this->model->page, (int)$this->model->perPage, (int)$this->model->userCounts, urlencode((string)$this->model->searchTerm));
        }
    }
}