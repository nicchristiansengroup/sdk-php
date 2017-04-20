<?php

namespace Easir\SDK\Request;

use Easir\SDK\Request;
use Easir\SDK\Request\Model\CreateContact as CreateContactRequestModel;
use Easir\SDK\Model\Contact;

/**
 * Request class for creating contacts
 *
 * @package Easir\SDK\Request
 */
class CreateContact extends Request
{
    /**
     * @var string
     */
    protected $url = '/accounts/%s/contacts';
    /**
     * @var string
     */
    public $method = 'POST';
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
    protected $modelClass = CreateContactRequestModel::class;

    /**
     * @throws RequestException
     * @return string
     */
    public function getUrl()
    {
        $this->checkModel();

        return sprintf(parent::getUrl(), $this->model->account_id);
    }
}