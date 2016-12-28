<?php

namespace Easir\SDK\Request\Model;

use Easir\SDK\Request\Model;

/**
 * Generic class to get entities by id
 */
class GetById extends Model
{
    public $id;

    public function __construct($id = null)
    {
        parent::__construct(['id' => $id]);
    }
}