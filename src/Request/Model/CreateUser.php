<?php

namespace Easir\SDK\Request\Model;

use Easir\SDK\Request\Model;

/**
 * The request model for CreateUser
 *
 * @package Easir\SDK\Request\Model
 */
class CreateUser extends Model
{
    /**
     * @var string
     */
    public $first_name;
    /**
     * @var string
     */
    public $last_name;
    /**
     * @var string
     */
    public $email;
    /**
     * @var string
     */
    public $job_title;
    /**
     * @var string
     */
    public $timezone = "Europe/Copenhagen";
    /**
     * @var string
     */
    public $phone_number;
    /**
     * @var string
     */
    public $password;
    /**
     * @var integer
     */
    public $team_id;
    /**
     * @var string
     */
    public $locale = 'da-DK';
}