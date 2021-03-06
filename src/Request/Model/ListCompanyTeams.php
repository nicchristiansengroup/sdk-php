<?php

namespace Easir\SDK\Request\Model;

class ListCompanyTeams extends Search
{
    /**
     * @var int
     */
    public $company_id;
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
