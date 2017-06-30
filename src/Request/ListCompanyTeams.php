<?php

namespace Easir\SDK\Request;

use Easir\SDK\Exception\RequestException;
use Easir\SDK\Request;
use Easir\SDK\Request\Model\ListCompanyTeams as ListCompanyTeamsModel;
use Easir\SDK\Response\ListCompanyTeams as ListCompanyTeamsResponse;

class ListCompanyTeams extends Request
{
    /**
     * @var string
     */
    protected $url = '/companies/%d/teams?page=%d&per_page=%d&q=%s&team_type=%s&sort_by=%s&sort_direction=%s';
    /**
     * @var string
     */
    public $method = 'GET';
    /**
     * @var string
     */
    public $responseClass = ListCompanyTeamsResponse::class;
    /**
     * @var string
     */
    protected $modelClass = ListCompanyTeamsModel::class;

    /**
     * @throws RequestException
     * @return string
     */
    public function getUrl()
    {
        $this->checkModel();

        return sprintf(parent::getUrl(),
                (int)$this->model->id,
                (int)$this->model->page,
                (int)$this->model->perPage,
                urlencode((string)$this->model->searchTerm),
                urlencode((string)$this->model->team_type),
                urlencode((string)$this->model->sort_by),
                urlencode((string)$this->model->sort_direction)
        );
    }
}
