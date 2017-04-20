<?php

namespace Easir\SDK\Request;

use Easir\SDK\Model\Lead;
use Easir\SDK\Request;
use Easir\SDK\Request\Model\GetById;

class GetLead extends Request
{
    /**
     * @var string
     */
    protected $url = '/leads/%s';
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
    public $responseClass = Lead::class;
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

        return sprintf(parent::getUrl(), (string)$this->model->id);
    }
}