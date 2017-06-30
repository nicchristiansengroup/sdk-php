<?php

namespace Easir\SDK\Request\Model;

use Easir\SDK\Request\Model;

class ListCompanies extends Model
{
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
    /**
     * @var integer
     */
    public $userCounts = 0;
}
