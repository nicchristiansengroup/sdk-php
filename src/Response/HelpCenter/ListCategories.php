<?php

namespace Easir\SDK\Response\HelpCenter;

use Easir\SDK\Response;

class ListCategories extends Response
{
    protected $collections = ['data' => 'HelpCenter\\Category'];

    public $data;
}