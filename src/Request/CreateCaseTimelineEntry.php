<?php

namespace Easir\SDK\Request;

use Easir\SDK\Exception\RequestException;
use Easir\SDK\Request;
use Easir\SDK\Request\Model\CreateCaseTimelineEntry as CreateCasesRequestModel;

/**
 * @property-read CreateCasesRequestModel $model
 */
class CreateCaseTimelineEntry extends Request
{
    /**
     * @var string
     */
    protected $url = '/cases/%s/timeline';
    /**
     * @var string
     */
    public $method = 'POST';
    /**
     * @var string
     */
    protected $modelClass = CreateCasesRequestModel::class;

    /**
     * @throws RequestException
     * @return string
     */
    public function getUrl()
    {
        $this->checkModel();

        return sprintf(parent::getUrl(), $this->model->case_id);
    }
}
