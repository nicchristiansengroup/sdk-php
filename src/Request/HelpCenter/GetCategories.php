<?php

namespace Easir\SDK\Request\HelpCenter;

use Easir\SDK\Model\HelpCenter\Category;
use Easir\SDK\Request;

class GetCategories extends Request
{
    protected $url = '/helpcenter/categories';
    public $method = 'GET';
    public $requiresAuth = true;
    public $responseClass = Category::class;
}