<?php

namespace Easir\SDK\Request;

use Easir\SDK\Model\Company;
use Easir\SDK\Request;
use Easir\SDK\Request\Model\GetById;

class GetCompany extends Request
{
    /**
     * @var string
     */
    protected $url = '/companies/%d';
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
    public $responseClass = Company::class;
    /**
     * @var string
     */
    protected $modelClass = GetById::class;

    public function getUrl()
    {
        $this->checkModel();

        return sprintf(parent::getUrl(), (int)$this->model->id);
    }
}