<?php

namespace Easir\SDK\Request\Model;

use Easir\SDK\Request\Model;

class CreateAttachment extends Model
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var resource
     */
    public $contents;
    /**
     * @var string
     */
    public $filename;
    /**
     * @var string
     */
    public $belongs_to;
}
