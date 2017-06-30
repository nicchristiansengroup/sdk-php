<?php

namespace Easir\SDK\Model;

use Easir\SDK\Response;

class AutomatedCommunication extends Response
{
    protected $collections = ['communications' => 'communication'];

    /**
     * @var string
     */
    public $id;
    /**
     * @var int
     */
    public $team_id;
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
    /**
     * @var string
     */
    public $created_at;
    /**
     * @var string
     */
    public $updated_at;
}
