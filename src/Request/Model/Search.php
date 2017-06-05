<?php

namespace Easir\SDK\Request\Model;

use Easir\SDK\Request\Model;

/**
 * Generic Search class
 */
class Search extends Model
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
}