<?php

namespace Easir\SDK\Request\Model;

class GetTeams extends Search
{
    /**
     * @var integer
     */
    public $group_id;
    /**
     * @var string
     */
    public $team_type = '';
    /**
     * @var string
     */
    public $sort_by = '';
    /**
     * @var string
     */
    public $sort_direction = 'desc';
}
