<?php

namespace Easir\SDK\Request;

use Easir\SDK\Exception\RequestException;
use Easir\SDK\Request;
use Easir\SDK\Request\Model\GetAccounts as GetModel;
use Easir\SDK\Response\ListCompanyAccounts as GetResponse;

class GetAccounts extends Request
{
    /**
     * @var string
     */
    protected $url = '/accounts?page=%d&per_page=%d&q=%s&type=%s&sort_by=%s&sort_direction=%s';
    /**
     * @var string
     */
    public $method = 'GET';
    /**
     * @var string
     */
    public $responseClass = GetResponse::class;
    /**
     * @var string
     */
    protected $modelClass = GetModel::class;

    /**
     * @throws RequestException
     * @return string
     */
    public function getUrl()
    {
        $this->checkModel();

        return sprintf(parent::getUrl(),
            (int)$this->model->page,
            (int)$this->model->perPage,
            urlencode((string)$this->model->searchTerm),
            urlencode((string)$this->model->type),
            urlencode((string)$this->model->sort_by),
            urlencode((string)$this->model->sort_direction)
        );
    }
}
