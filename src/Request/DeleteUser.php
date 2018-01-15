<?php

namespace Easir\SDK\Request;

use Easir\SDK\Exception\RequestException;
use Easir\SDK\Request;
use Easir\SDK\Request\Model\DeleteUser as DeleteUserRequestModel;

class DeleteUser extends Request
{
    /**
     * @var string
     */
    protected $url = '/companies/%d/users/%d?assign_to=%d';
    /**
     * @var string
     */
    public $method = 'DELETE';
    /**
     * @var string
     */
    protected $modelClass = DeleteUserRequestModel::class;

    /**
     * @throws RequestException
     * @return string
     */
    public function getUrl()
    {
        $this->checkModel();

        return sprintf(parent::getUrl(), (int)$this->model->companyId, (int)$this->model->id, (int)$this->model->assignTo);
    }
}
