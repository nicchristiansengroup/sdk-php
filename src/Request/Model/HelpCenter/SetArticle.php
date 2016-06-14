<?php

namespace Easir\SDK\Request\Model\HelpCenter;

use Easir\SDK\Request\Model;

class SetArticle extends Model
{
    public $id, $category_id, $title, $description, $text, $draft;
}