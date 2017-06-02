<?php

namespace Easir\SDK\Request\Model;

use Easir\SDK\Request\Model;

class GetLeadTypes extends Model
{
    /**
     * @var bool
     */
    public $include_bundled = false;
    /**
     * @var bool|null
     */
    public $enable_escalation = null;
    /**
     * @var string
     */
    public $searchTerm = '';
    /**
     * @var integer
     */
    public $page = 1;
    /**
     * @var integer
     */
    public $perPage = 15;
}