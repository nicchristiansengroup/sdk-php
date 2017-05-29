<?php

namespace Easir\SDK\Response;

use Easir\SDK\Model\DataCustomField;
use Easir\SDK\Model\DataFixedField;
use Easir\SDK\Response;

class ListFields extends Response
{
    /**
     * @var array
     */
    protected $collections = ['fixed_fields' => 'data_fixed_field', 'custom_fields' => 'data_custom_field'];
    /**
     * @var DataFixedField[]
     */
    public $fixed_fields;
    /**
     * @var DataCustomField[]
     */
    public $custom_fields;
}