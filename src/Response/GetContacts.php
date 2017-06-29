<?php

namespace Easir\SDK\Response;

use Easir\SDK\Model\Contact;
use Easir\SDK\Response;
use Easir\SDK\Model\Pagination;

class GetContacts extends Response
{
    /**
     * @var array
     */
    protected $collections = ['data' => 'contact'];
    /**
     * @var Contact[]
     */
    public $data;
    /**
     * @var Pagination
     */
    public $pagination;
}
