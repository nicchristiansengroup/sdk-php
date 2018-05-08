<?php

namespace Easir\SDK\Request\Model;

use Easir\SDK\Request\Model;

class ListCaseTimelineEntries extends Model
{
    /**
     * @var string
     */
    public $case_id;
    /**
     * @var integer
     */
    public $page = 1;
    /**
     * @var integer
     */
    public $perPage = 15;
    /**
     * @var string
     */
    public $sort_by = '';
    /**
     * @var string
     */
    public $sort_direction = 'desc';
    /**
     * @var string
     */
    public $types = '';
    /**
     * @var string
     */
    public $activity_types = '';
    /**
     * @var string|null
     */
    public $start_at = '';
    /**
     * @var string|null
     */
    public $end_at = '';
}
