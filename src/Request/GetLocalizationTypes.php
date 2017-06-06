<?php

namespace Easir\SDK\Request;

use Easir\SDK\Request;
use Easir\SDK\Model\LocalizationTypes;

abstract class GetLocalizationTypes extends Request
{
    /**
     * @var string
     */
    protected $url = '/localization-types';
    /**
     * @var string
     */
    protected $urlSuffix = '';
    /**
     * @var string
     */
    public $method = 'GET';
    /**
     * @var bool
     */
    public $requiresAuth = false;
    /**
     * @var string
     */
    public $responseClass = LocalizationTypes::class;

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url . $this->urlSuffix;
    }
}