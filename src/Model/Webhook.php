<?php

namespace Easir\SDK\Model;

use Easir\SDK\Response;

class Webhook extends Response
{
    public $id, $user_id, $target_url, $webhook_event, $verification_token, $created_at, $updated_at;
}