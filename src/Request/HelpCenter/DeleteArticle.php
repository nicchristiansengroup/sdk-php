<?php

namespace Easir\SDK\Request\HelpCenter;

use Easir\SDK\Exception\RequestException;
use Easir\SDK\Model\HelpCenter\Article;
use Easir\SDK\Request;
use Easir\SDK\Request\Model\HelpCenter\SetArticle as SetArticleRM;

class DeleteArticle extends Request
{
    protected $url = '/helpcenter/categories/%d/article/%d';
    public $method = 'DELETE';
    public $requiresAuth = true;
    protected $modelClass = SetArticleRM::class;

    public function getUrl()
    {
        if (is_null($this->model)) {
            throw new RequestException("We can't make a request without a RequestModel", RequestException::MISSING_MODEL);
        } else {
            return sprintf(parent::getUrl(), $this->model->category_id, $this->model->id);
        }
    }
}