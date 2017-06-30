<?php

namespace Easir\SDK\Request\Model;

use Easir\SDK\Request\Model;

class CreateTemplate extends Model
{
    /**
     * @var string
     */
    public $type;
    /**
     * @var string
     */
    public $title;
    /**
     * @var string
     */
    public $content;
    /**
     * @var int|null
     */
    public $margin_top;
    /**
     * @var int|null
     */
    public $margin_right;
    /**
     * @var int|null
     */
    public $margin_bottom;
    /**
     * @var int|null
     */
    public $margin_left;
}
