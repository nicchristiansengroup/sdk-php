<?php

namespace Easir\SDK\Request;

use Easir\SDK\Request;
use Easir\SDK\Request\Model\CreateTeam as TeamRequestModel;
use Easir\SDK\Model\Team;

/**
 * Request class for creating teams
 *
 * @package Easir\SDK\Request
 */
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
    protected $modelClass = TeamRequestModel::class;
}