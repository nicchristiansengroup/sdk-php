<?php

namespace Easir\SDK\Request\Model;

use Easir\SDK\Request\Model;

class GetRoles extends Model
{
    /**
     * @var integer
     */
    public $page = 1;
    /**
     * @var integer
     */
    public $perPage = 15;
}