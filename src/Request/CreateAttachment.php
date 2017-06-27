<?php

namespace Easir\SDK\Request;

use Easir\SDK\Exception\RequestException;
use Easir\SDK\Request;
use Easir\SDK\Request\Model as RequestModel;
use Easir\SDK\Request\Model\CreateAttachment as CreateAttachmentModel;
use Easir\SDK\Model\Attachment;

class CreateAttachment extends Request
{
    /**
     * @var string
     */
    protected $url = '/filemanager/files/%s';
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
    public $responseClass = Attachment::class;
    /**
     * @var string
     */
    protected $modelClass = CreateAttachmentModel::class;

    public $options = ['header' => ['Content-Type' => 'multipart/form-data']];

    public function __construct(RequestModel $model = null)
    {
        parent::__construct($model);

        $this->options['multipart'][] = [
             'name' => $model->name,
             'contents' => $model->contents,
             'filename' => $model->filename,
        ];
    }

    /**
     * @throws RequestException
     * @return string
     */
    public function getUrl()
    {
        $this->checkModel();

        return sprintf(parent::getUrl(), (string)$this->model->belongs_to);
    }
}
