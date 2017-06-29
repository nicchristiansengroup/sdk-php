<?php

namespace Easir\SDK\Model;

use Easir\SDK\Response;

class LocalizationTypes extends Response
{
    /**
     * @var array
     */
    protected $collections = [
            'locales' => 'locale',
            'timezones' => 'timezone',
            'currencies' => 'currency',
            'languages' => 'language',
            'countries' => 'country',
    ];
    /**
     * @var Locale[]
     */
    public $locales;
    /**
     * @var Timezone[]
     */
    public $timezones;
    /**
     * @var Currency[]
     */
    public $currencies;
    /**
     * @var Language[]
     */
    public $languages;
    /**
     * @var Country[]
     */
    public $countries;

    public $plan;
}
