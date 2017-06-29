<?php

namespace Easir\SDK\Request;

use Easir\SDK\Request;
use Easir\SDK\Request\Model\CreateCustomField as CreateCustomFieldRequestModel;
use Easir\SDK\Model\DataCustomField;

class CreateCustomField extends Request
{
    /**
     * @var string
     */
    protected $url = '/fields/custom';
    /**
     * @var string
     */
    public $method = 'POST';
    /**
     * @var string
     */
    public $responseClass = DataCustomField::class;
    /**
     * @var string
     */
    protected $modelClass = CreateCustomFieldRequestModel::class;
}
