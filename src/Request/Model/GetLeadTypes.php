<?php

namespace Easir\SDK\Request\Model;

class GetLeadTypes extends Search
{
    /**
     * @var bool
     */
    public $include_bundled = false;
    /**
     * @var bool|null
     */
    public $enable_escalation = null;
}