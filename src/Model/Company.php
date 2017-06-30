<?php

namespace Easir\SDK\Model;

use Easir\SDK\Response;

class Company extends Response
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $name;
    /**
     * @var Billing
     */
    public $billing;
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
    public $vat;
    /**
     * @var string
     */
    public $logo_1;
    /**
     * @var string
     */
    public $logo_2;
    /**
     * @var Timezone
     */
    public $timezone;
    /**
     * @var Locale
     */
    public $locale;
    /**
     * @var Language
     */
    public $language;
    /**
     * @var Currency
     */
    public $currency;
    /**
     * @var User
     */
    public $user;
    /**
     * @var Plan
     */
    public $plan;
    /**
     * @var string
     */
    public $created_at;
    /**
     * @var string
     */
    public $updated_at;
    /**
     * @var array
     */
    public $settings;
}
