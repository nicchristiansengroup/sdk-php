<?php

namespace Easir\SDK\Request;

use Easir\SDK\Exception\RequestException;
use Easir\SDK\Request;
use Easir\SDK\Request\Model\CreateContact as CreateContactRequestModel;
use Easir\SDK\Model\Contact;

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

        return sprintf(parent::getUrl(), urlencode((string)$this->model->account_id));
    }
}
