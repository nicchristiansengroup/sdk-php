<?php

namespace Easir\SDK\Model;

use Easir\SDK\Response;

class Webhook extends Response
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var int
     */
    public $user_id;
    /**
     * @var string
     */
    public $target_url;
    /**
     * @var WebhookEvent
     */
    public $webhook_event;
    /**
     * @var string
     */
    public $verification_token;
    /**
     * @var string
     */
    public $created_at;
    /**
     * @var string
     */
    public $updated_at;
}
