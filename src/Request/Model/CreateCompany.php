<?php

namespace Easir\SDK\Request\Model;

use Easir\SDK\Request\Model;

class CreateCompany extends Model
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $timezone = "Europe/Copenhagen";
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
     * @var string
     */
    public $country = 'dk';
    /**
     * @var string
     */
    public $vat;
    /**
     * @var string
     */
    public $invoice_email;
    /**
     * @var string
     */
    public $phone_number;
    /**
     * @var string
     */
    public $website;
    /**
     * @var string
     */
    public $locale = 'da-DK';
    /**
     * @var string
     */
    public $currency = 'dkk';
    /**
     * @var string
     */
    public $language = 'da';
    /**
     * @var CreateUser
     */
    public $user;
}
