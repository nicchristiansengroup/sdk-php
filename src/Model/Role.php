<?php

namespace Easir\SDK\Model;

use Easir\SDK\Model;

class Role extends Model
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $name;
    public $access_teams;
    /**
     * @var string[]
     */
    public $rights;
    /**
     * @var string
     */
    public $created_at;
    /**
     * @var string
     */
    public $updated_at;
}
