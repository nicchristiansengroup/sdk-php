<?php

namespace Easir\SDK\Model;

use Easir\SDK\Response;

class Attachment extends Response
{
    /**
     * @var string
     */
    public $id;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $type;
    /**
     * @var int
     */
    public $size;
    /**
     * @var string
     */
    public $created_at;
    /**
     * @var string
     */
    public $updated_at;
    /**
     * @var int
     */
    public $company_id;
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
     * @var string
     */
    public $belongs_to;
    /**
     * @var string|null
     */
    public $folder_id;
    /**
     * @var string
     */
    public $download_url;
}
