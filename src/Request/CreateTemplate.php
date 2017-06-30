<?php

namespace Easir\SDK\Request;

use Easir\SDK\Request;
use Easir\SDK\Request\Model\CreateTemplate as CreateTemplateModel;
use Easir\SDK\Model\Template;

class CreateTemplate extends Request
{
    /**
     * @var string
     */
    protected $url = '/templates';
    /**
     * @var string
     */
    public $method = 'POST';
    /**
     * @var string
     */
    public $responseClass = Template::class;
    /**
     * @var string
     */
    protected $modelClass = CreateTemplateModel::class;
}
