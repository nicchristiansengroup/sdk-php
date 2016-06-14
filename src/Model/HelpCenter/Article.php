<?php

namespace Easir\SDK\Model\HelpCenter;

use Easir\SDK\Model;

class Article extends Model
{
    public $id, $category_id, $title, $description, $text, $user_id, $draft, $created_at, $updated_at;
}