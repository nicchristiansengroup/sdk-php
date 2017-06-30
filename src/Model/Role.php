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
