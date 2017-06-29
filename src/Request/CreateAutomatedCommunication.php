<?php

namespace Easir\SDK\Request;

use Easir\SDK\Request;
use Easir\SDK\Request\Model\CreateAutomatedCommunication as CreateAutomatedCommunicationModel;
use Easir\SDK\Model\AutomatedCommunication;

class CreateAutomatedCommunication extends Request
{
    /**
     * @var string
     */
    protected $url = '/automated-communications';
    /**
     * @var string
     */
    public $method = 'POST';
    /**
     * @var string
     */
    public $responseClass = AutomatedCommunication::class;
    /**
     * @var string
     */
    protected $modelClass = CreateAutomatedCommunicationModel::class;
}
