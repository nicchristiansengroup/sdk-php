<?php

namespace Easir\SDK\Request;

use Easir\SDK\Exception\RequestException;
use Easir\SDK\Request;
use Easir\SDK\Request\Model\CreateUser as UserRequestModel;
use Easir\SDK\Model\User;

class CreateUser extends Request
{
    /**
     * @var string
     */
    protected $url = '/companies/%d/users';
    /**
     * @var string
     */
    public $method = 'POST';
    /**
     * @var string
     */
    public $responseClass = User::class;
    /**
     * @var string
     */
    protected $modelClass = UserRequestModel::class;

    /**
     * @throws RequestException
     * @return string
     */
    public function getUrl()
    {
        $this->checkModel();

        return sprintf(parent::getUrl(), (int)$this->model->company_id);
    }
}
