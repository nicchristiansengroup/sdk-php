<?php

namespace Easir\SDK\Model;

use Easir\SDK\Response;

class Communication extends Response
{
    protected $collections = ['delay' => 'delay'];

    public $name, $delay, $template_id, $subject, $content;
}
