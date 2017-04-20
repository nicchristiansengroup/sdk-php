<?php

namespace Easir\SDK\Request;

use Easir\SDK\Request;
use Easir\SDK\Request\Model\ListCompanyAccounts as ListCompanyAccountsModel;
use Easir\SDK\Response\ListCompanyAccounts as ListCompanyAccountsResponse;

/**
 * Request class for listing company accounts
 *
 * @package Easir\SDK\Request
 */
class ListCompanyAccounts extends Request
{
    /**
     * @var string
     */
    protected $url = '/accounts?q=%s';
    /**
     * @var string
     */
    public $method = 'GET';
    /**
     * @var string
     */
    public $requiresAuth = true;
    /**
     * @var string
     */
    public $responseClass = ListCompanyAccountsResponse::class;
    /**
     * @var string
     */
    protected $modelClass = ListCompanyAccountsModel::class;

    /**
     * @throws RequestException
     * @return string
     */
    public function getUrl()
    {
        $this->checkModel();

        return sprintf(parent::getUrl(), urlencode((string)$this->model->searchTerm));
    }
}