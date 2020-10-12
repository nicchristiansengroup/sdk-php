<?php

namespace Easir\SDK\Model;

use Easir\SDK\Response;

class Product extends Response
{
    /**
     * @var string
     */
    public $id;
    /**
     * @var array
     */
    public $category;
    /**
     * @var bool
     */
    public $fixed_fields = true;
    /**
     * @var string
     */
    public $custom_fields;
    /**
     * @var string
     */
    public $created_at;
    /**
     * @var string
     */
    public $updated_at;
}
