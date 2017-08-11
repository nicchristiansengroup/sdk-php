<?php

namespace Easir\SDK\Request\Model;

class GetAccountContacts extends Search
{
    /**
     * @var string
     */
    public $account_id;
    /**
     * @var string
     */
    public $sort_by = '';
    /**
     * @var string
     */
    public $sort_direction = '';
}
