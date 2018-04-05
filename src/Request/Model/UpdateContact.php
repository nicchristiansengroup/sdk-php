<?php

namespace Easir\SDK\Request\Model;

class UpdateContact extends CreateContact
{
    /**
     * @var string
     */
    public $contact_id;
    /**
     * @var string
     */
    public $old_account_id;
}
