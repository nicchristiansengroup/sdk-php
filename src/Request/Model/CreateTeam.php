<?php

namespace Easir\SDK\Request\Model;

use Easir\SDK\Request\Model;

class CreateTeam extends Model
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
    public $locale = 'da-DK';
    /**
     * @var string
     */
    public $currency;
    /**
     * @var string
     */
    public $team_type;
    /**
     * @var bool
     */
    public $use_social_lookup;
}
