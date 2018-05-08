<?php

namespace Easir\SDK\Model;

use Easir\SDK\Response;

class CaseTimelineEntry extends Response
{
    protected $embedded = [
        'data' => 'case_timeline_entry_data',
    ];

    /**
     * @var string
     */
    public $id;
    /**
     * @var string
     */
    public $type;
    /**
     * @var User
     */
    public $user;
    /**
     * @var CaseTimelineEntryData
     */
    public $data;
    /**
     * @var string
     */
    public $created_at;
    /**
     * @var string
     */
    public $updated_at;
}
