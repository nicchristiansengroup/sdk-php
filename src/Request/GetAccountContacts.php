<?php

namespace Easir\SDK\Request;

use Easir\SDK\Exception\RequestException;
use Easir\SDK\Request;
use Easir\SDK\Request\Model\GetAccountContacts as GetAccountContactsModel;
use Easir\SDK\Response\GetContacts;

class GetAccountContacts extends Request
{
    /**
     * @var string
     */
    protected $url = '/accounts/%s/contacts?page=%d&per_page=%d&q=%s&sort_by=%s&sort_direction=%s';
    /**
     * @var string
     */
    public $method = 'GET';
    /**
     * @var string
     */
    public $responseClass = GetContacts::class;
    /**
     * @var string
     */
    protected $modelClass = GetAccountContactsModel::class;

    /**
     * @throws RequestException
     * @return string
     */
    public function getUrl()
    {
        $this->checkModel();

        return sprintf(parent::getUrl(),
            urlencode((string)$this->model->account_id),
            (int)$this->model->page,
            (int)$this->model->perPage,
            urlencode((string)$this->model->searchTerm),
            urlencode((string)$this->model->sort_by),
            urlencode((string)$this->model->sort_direction)
        );
    }
}
