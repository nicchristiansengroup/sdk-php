<?php

namespace Easir\SDK\Model;

use Easir\SDK\Response;

class CaseObject extends Response
{
    /**
     * @var string
     */
    public $id;
    /**
     * @var int
     */
    public $case_number;
    /**
     * @var string
     */
    public $status;
    /**
     * @var Account
     */
    public $account;
    /**
     * @var Contact
     */
    public $contact;
    /**
     * @var User
     */
    public $user;
    /**
     * @var RelationsPath
     */
    public $relations_path;
    /**
     * @var Milestone
     */
    public $milestones;
    /**
     * @var string|null
     */
    public $latest_milestone_name;
    /**
     * @var string|null
     */
    public $latest_activity_at;
    /**
     * @var string
     */
    public $created_at;
    /**
     * @var string
     */
    public $updated_at;
}
