<?php

namespace Easir\SDK\Model;

use Easir\SDK\Response;

class Template extends Response
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $type;
    /**
     * @var int
     */
    public $company_id;
    /**
     * @var string
     */
    public $title;
    /**
     * @var int
     */
    public $user_id;
    /**
     * @var int|null
     */
    public $team_id;
    /**
     * @var int|null
     */
    public $group_id;
    /**
     * @var bool
     */
    public $campaign;
    /**
     * @var int|null
     */
    public $margin_top;
    /**
     * @var int|null
     */
    public $margin_left;
    /**
     * @var int|null
     */
    public $margin_right;
    /**
     * @var int|null
     */
    public $margin_bottom;
    /**
     * @var string
     */
    public $content;
}
