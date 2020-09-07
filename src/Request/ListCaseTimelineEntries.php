<?php

namespace Easir\SDK\Request;

use Easir\SDK\Exception\RequestException;
use Easir\SDK\Request;
use Easir\SDK\Request\Model\ListCaseTimelineEntries as ListCaseTimelineEntriesModel;
use Easir\SDK\Response\ListCaseTimelineEntries as ListCaseTimelineEntriesResponse;

/**
 * @property-read ListCaseTimelineEntriesModel $model
 */
class ListCaseTimelineEntries extends Request
{
    /**
     * @var string
     */
    protected $url = '/cases/%s/timeline?page=%d&per_page=%d';
    /**
     * @var string
     */
    public $method = 'GET';
    /**
     * @var string
     */
    public $responseClass = ListCaseTimelineEntriesResponse::class;
    /**
     * @var string
     */
    protected $modelClass = ListCaseTimelineEntriesModel::class;

    /**
     * @throws RequestException
     * @return string
     */
    public function getUrl()
    {
        $this->checkModel();
        $this->options['json'] = null;

        $searchParams = http_build_query(array_filter([
            'activity_types' => $this->model->activity_types,
            'start_at' => $this->model->start_at,
            'end_at' => $this->model->end_at,
            'types' => $this->model->types,
        ]));
        if (!empty($searchParams)) {
            $searchParams = "&{$searchParams}";
        }

        return sprintf(parent::getUrl(),
            $this->model->case_id,
            (int)$this->model->page,
            (int)$this->model->perPage
        ) . $searchParams;
    }
}
