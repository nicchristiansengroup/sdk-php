<?php

namespace Easir\SDK\Request;

use Easir\SDK\Request;
use Easir\SDK\Request\Model\GetById;
use Easir\SDK\Model\Team;

class GetTeam extends Request
{
    /**
     * @var string
     */
    protected $url = '/teams/%d';
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
    public $responseClass = Team::class;
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

        return sprintf(parent::getUrl(), (int)$this->model->id);
    }
}