<?php

namespace Easir\SDK\Request;

use Easir\SDK\Exception\RequestException;
use Easir\SDK\Request;
use Easir\SDK\Request\Model\UpdateContact as UpdateContactRequestModel;
use Easir\SDK\Model\Contact;

class UpdateContact extends Request
{
    /**
     * @var string
     */
    protected $url = '/accounts/%s/contacts/%s';
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
    public $responseClass = Contact::class;
    /**
     * @var string
     */
    protected $modelClass = UpdateContactRequestModel::class;

    /**
     * @throws RequestException
     * @return string
     */
    public function getUrl()
    {
        $this->checkModel();

        return sprintf(parent::getUrl(), $this->model->account_id, $this->model->contact_id);
    }
}