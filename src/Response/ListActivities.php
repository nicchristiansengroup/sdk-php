<?php

namespace Easir\SDK\Response;

use Easir\SDK\Model\Activity;
use Easir\SDK\Model\Pagination;
use Easir\SDK\Response;

class ListActivities extends Response
{
    /**
     * @var array
     */
    protected $collections = ['data' => 'activity'];
    /**
     * @var Activity[]
     */
    public $data;
    /**
     * @var Pagination
     */
    public $pagination;
}
