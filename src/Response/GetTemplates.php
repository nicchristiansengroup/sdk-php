<?php

namespace Easir\SDK\Response;

use Easir\SDK\Model\Template;
use Easir\SDK\Response;
use Easir\SDK\Model\Pagination;

class GetTemplates extends Response
{
    /**
     * @var array
     */
    protected $collections = ['data' => 'template'];
    /**
     * @var Template[]
     */
    public $data;
    /**
     * @var Pagination
     */
    public $pagination;
}