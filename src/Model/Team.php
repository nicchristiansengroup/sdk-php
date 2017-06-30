<?php

namespace Easir\SDK\Model;

use Easir\SDK\Response;

class Team extends Response
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
     * @var Timezone
     */
    public $timezone;
    /**
     * @var Locale
     */
    public $locale;
    /**
     * @var Group
     */
    public $group;
    /**
     * @var string|null
     */
    public $team_type;
    /**
     * @var string
     */
    public $created_at;
    /**
     * @var string
     */
    public $updated_at;
    /**
     * @var Plan
     */
    public $plan;
    /**
     * @var bool
     */
    public $use_social_lookup;
}
