<?php

namespace Easir\SDK\Model;

use Easir\SDK\Response;

class Communication extends Response
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var Delay
     */
    public $delay;
    /**
     * @var int
     */
    public $template_id;
    /**
     * @var string
     */
    public $subject;
    /**
     * @var string
     */
    public $content;
    /**
     * @var string[]
     */
    public $attachments;
}
