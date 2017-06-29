<?php

namespace Easir\SDK\Request\Model;

use Easir\SDK\Request\Model;

class CreateCase extends Model
{
    /**
     * @var integer
     */
    public $user_id;
    /**
     * @var integer
     */
    public $contact_id;
    /**
     * @var string
     */
    public $relations_path_id;
    /**
     * @var bool
     */
    public $notify_user = false;
}
