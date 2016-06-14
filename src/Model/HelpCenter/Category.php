<?php

namespace Easir\SDK\Model\HelpCenter;

use Easir\SDK\Model;

class Category extends Model
{
    public $id, $title, $image_url, $description, $user_id, $draft, $created_at, $updated_at;
}