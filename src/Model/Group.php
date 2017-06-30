<?php

namespace Easir\SDK\Model;

use Easir\SDK\Model;

class Group extends Model
{
    /**
     * @var array
     */
    protected $collections = ['teams' => 'team'];
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $created_at;
    /**
     * @var string
     */
    public $updated_at;
    /**
     * @var Team[]
     */
    public $teams;
}
