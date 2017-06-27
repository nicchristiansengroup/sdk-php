<?php

namespace Easir\SDK\Request\Model;

use Easir\SDK\Model\Communication;
use Easir\SDK\Request\Model;

class CreateAutomatedCommunication extends Model
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $icon;
    /**
     * @var Communication[]
     */
    public $communications;
}
