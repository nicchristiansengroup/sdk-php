<?php

namespace Easir\SDK\Request\HelpCenter;

use Easir\SDK\Model\HelpCenter\Category;
use Easir\SDK\Request;
use Easir\SDK\Request\Model\HelpCenter\SetCategory as SetCategoryRM;

class CreateCategory extends Request
{
    protected $url = '/helpcenter/categories';
    public $method = 'POST';
    public $requiresAuth = true;
    public $responseClass = Category::class;
    protected $modelClass = SetCategoryRM::class;
}