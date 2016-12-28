<?php

namespace Easir\SDK\Model;

use Easir\SDK\Response;

class Communication extends Response
{
    public $name, $delay, $template_id, $subject, $content;
}