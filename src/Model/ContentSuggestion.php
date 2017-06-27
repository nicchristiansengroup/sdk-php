<?php

namespace Easir\SDK\Model;

use Easir\SDK\Model;

class ContentSuggestion extends Model
{
    /**
     * @var string
     */
    public $id;
    /**
     * @var string
     */
    public $type;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $subject;
    /**
     * @var string
     */
    public $content;
    /**
     * @var int[]|null
     */
    public $template_ids;
    /**
     * @var int|null
     */
    public $team_id;
}
