<?php

namespace Easir\SDK\Request;

use Easir\SDK\Request;
use Easir\SDK\Request\Model\CreateActivity as CreateActivityRequestModel;
use Easir\SDK\Model\Activity;

/**
 * Request class for creating activities
 *
 * @package Easir\SDK\Request
 */
class CreateActivity extends Request
{
    /**
     * @var string
     */
    protected $url = '/cases/%s/activities';
    /**
     * @var string
     */
    public $method = 'POST';
    /**
     * @var bool
     */
    public $requiresAuth = true;
    /**
     * @var string
     */
    public $responseClass = Activity::class;
    /**
     * @var string
     */
    protected $modelClass = CreateActivityRequestModel::class;

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