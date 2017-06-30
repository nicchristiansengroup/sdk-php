<?php

namespace Easir\SDK\Request;

use Easir\SDK\Request;
use Easir\SDK\Request\Model\CreateTeam as TeamRequestModel;
use Easir\SDK\Model\Team;

class CreateTeam extends Request
{
    /**
     * @var string
     */
    protected $url = '/teams';
    /**
     * @var string
     */
    public $method = 'POST';
    /**
     * @var string
     */
    public $responseClass = Team::class;
    /**
     * @var string
     */
    protected $modelClass = TeamRequestModel::class;
}
