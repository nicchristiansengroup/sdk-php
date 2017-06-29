<?php

namespace Easir\SDK\Model;

use Easir\SDK\Model;

class Pagination extends Model
{
    /**
     * @var int
     */
    public $total;
    /**
     * @var int
     */
    public $page;
    /**
     * @var int
     */
    public $per_page;
    /**
     * @var Urls
     */
    public $urls;
}
