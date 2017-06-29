<?php

namespace Easir\SDK\Model;

use Easir\SDK\Model;

class DataFixedField extends Model
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $label;
    /**
     * @var string
     */
    public $type;
    /**
     * @var bool
     */
    public $required;
    /**
     * @var string|null
     */
    public $validation;
    /**
     * @var Option[]
     */
    public $options;
    /**
     * @var bool
     */
    public $hidden;
    /**
     * @var bool
     */
    public $read_only;
    /**
     * @var int
     */
    public $sort_order;
    /**
     * @var int|null
     */
    public $team_id;
    /**
     * @var int|null
     */
    public $group_id;
}
