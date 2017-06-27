<?php

namespace Easir\SDK\Model;

use Easir\SDK\Model;

class Billing extends Model
{
    /**
     * @var string
     */
    public $invoice_email;
    /**
     * @var string
     */
    public $address_1;
    /**
     * @var string
     */
    public $address_2;
    /**
     * @var string
     */
    public $zip_code;
    /**
     * @var string
     */
    public $city;
    /**
     * @var string
     */
    public $state;
    /**
     * @var Country
     */
    public $country;
}
