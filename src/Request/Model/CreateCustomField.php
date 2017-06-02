<?php

namespace Easir\SDK\Request\Model;

use Easir\SDK\Request\Model;

class CreateCustomField extends Model
{
    /**
     * @var string
     */
    public $owner;
    /**
     * @var string
     */
    public $type;
    /**
     * @var string
     */
    public $label;
    /**
     * @var bool
     */
    public $hidden;
    /**
     * @var bool
     */
    public $read_only;
    /**
     * @var string|null
     */
    public $validation;
    /**
     * @var array|null
     */
    public $options;
}
