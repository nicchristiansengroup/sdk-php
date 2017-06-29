<?php

namespace Easir\SDK\Model;

use Easir\SDK\Response;

class Contact extends Response
{
    /**
     * @var array
     */
    protected $collections = ['fixed_fields' => 'fixed_field', 'custom_fields' => 'custom_field'];
    /**
     * @var string
     */
    public $id;
    /**
     * @var bool
     */
    public $b2c;
    /**
     * @var integer
     */
    public $team_id;
    /**
     * @var FixedField[]
     */
    public $fixed_fields;
    /**
     * @var CustomField[]
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
