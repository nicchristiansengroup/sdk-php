<?php

namespace Easir\SDK\Request\Model;

class GetAccounts extends Search
{
    /**
     * @var string
     */
    public $type;
    /**
     * @var string
     */
    public $sort_by = '';
    /**
     * @var string
     */
    public $sort_direction = '';
}
