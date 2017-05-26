<?php

namespace Easir\SDK\Response;

use Easir\SDK\Model\Contact;
use Easir\SDK\Model\Pagination;
use Easir\SDK\Response;

/**
 * Class ListCompanyContacts
 * @package Easir\SDK\Response
 */
class ListCompanyContacts extends Response
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