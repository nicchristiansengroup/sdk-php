<?php

namespace Easir\SDK\Response;

use Easir\SDK\Model\CaseTimelineEntry;
use Easir\SDK\Model\Pagination;
use Easir\SDK\Response;

class ListCaseTimelineEntries extends Response
{
    /**
     * @var array
     */
    protected $collections = ['data' => 'case_timeline_entry'];
    /**
     * @var CaseTimelineEntry[]
     */
    public $data;
    /**
     * @var Pagination
     */
    public $pagination;
}
