<?php

namespace Easir\SDK\Model;

use Easir\SDK\Response;

class CaseTimelineEntryData extends Response
{
    /**
     * @var User
     */
    public $user;
    /**
     * @var Account
     */
    public $account;
    /**
     * @var Contact
     */
    public $contact;
    /**
     * @var string
     */
    public $title;
    /**
     * @var string
     */
    public $description;
}
