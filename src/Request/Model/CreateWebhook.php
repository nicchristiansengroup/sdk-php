<?php

namespace Easir\SDK\Request\Model;

use Easir\SDK\Request\Model;

class CreateWebhook extends Model
{
    public $target_url, $event, $scope = "global", $verification_token;
}