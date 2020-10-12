<?php

namespace Easir\SDK\Request;

use Easir\SDK\Request;
use Easir\SDK\Request\Model\GetProducts as GetProductsModel;
use Easir\SDK\Response\ListProducts;

class GetProducts extends Request
{
    /**
     * @var string
     */
    protected $url = '/products';
    /**
     * @var string
     */
    public $method = 'GET';
    /**
     * @var string
     */
    public $responseClass = ListProducts::class;
    /**
     * @var string
     */
    protected $modelClass = GetProductsModel::class;
}
