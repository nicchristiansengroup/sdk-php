<?php

namespace Easir\SDK\Request;

use Easir\SDK\Request;
use Easir\SDK\Request\Model\ListCompanyCases as ListCompanyCasesModel;
use Easir\SDK\Response\ListCompanyCases as ListCompanyCasesResponse;

/**
 * Request class for listing company accounts
 *
 * @package Easir\SDK\Request
 */
class ListCompanyCases extends Request
{
    /**
     * @var string
     */
    protected $url = '/cases?q=%s';
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
    public $responseClass = ListCompanyCasesResponse::class;
    /**
     * @var string
     */
    protected $modelClass = ListCompanyCasesModel::class;

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