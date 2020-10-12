<?php

namespace Easir\SDK\Response;

use Easir\SDK\Model\Product;
use Easir\SDK\Model\Pagination;
use Easir\SDK\Response;

class ListProducts extends Response
{
    /**
     * @var array
     */
    protected $collections = ['data' => 'product'];
    /**
     * @var Product[]
     */
    public $data;
    /**
     * @var Pagination
     */
    public $pagination;
}



