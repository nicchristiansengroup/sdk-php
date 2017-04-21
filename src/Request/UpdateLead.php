<?php

namespace Easir\SDK\Request;

use Easir\SDK\Exception\RequestException;
use Easir\SDK\Model\Lead;
use Easir\SDK\Request;
use Easir\SDK\Request\Model\UpdateLead as UpdateLeadRequestModel;

class UpdateLead extends Request
{
    /**
     * @var string
     */
    protected $url = '/leads/%s';
    /**
     * @var string
     */
    public $method = 'PUT';
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
    protected $modelClass = UpdateLeadRequestModel::class;

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