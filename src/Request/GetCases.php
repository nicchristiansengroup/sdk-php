<?php

namespace Easir\SDK\Request;

use Easir\SDK\Model\Cases;
use Easir\SDK\Request;
use Easir\SDK\Request\Model\GetById;

class GetCase extends Request
{
    /**
     * @var string
     */
    protected $url = '/cases/%s';
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
    public $responseClass = Cases::class;
    /**
     * @var string
     */
    protected $modelClass = GetById::class;

    /**
     * @throws RequestException
     * @return string
     */
    public function getUrl()
    {
        $this->checkModel();

        return sprintf(parent::getUrl(), $this->model->id);
    }
}