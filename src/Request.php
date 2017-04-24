<?php

namespace Easir\SDK;

use Easir\SDK\Exception\RequestException;
use Easir\SDK\Request\Model as RequestModel;

/**
 * Request base class.
 *
 * @package Easir\SDK
 */
abstract class Request
{
    /**
     * @var string
     */
    protected $url;
    /**
     * @var string
     */
    public $method = "GET";
    /**
     * @var array
     */
    public $options = array();
    /**
     * @var bool
     */
    public $requiresAuth = true;
    /**
     * @var string|null
     */
    public $model = null;
    /**
     * @var string
     */
    public $responseClass = Response::class;
    /**
     * @var string
     */
    protected $modelClass;
    /**
     * @var array
     */
    private $allowedMethods = array("GET", "POST", "PUT", "DELETE");

    /**
     * Request constructor.
     *
     * @param RequestModel $model
     * @throws RequestException
     */
    public function __construct(RequestModel $model = null)
    {
        if (!is_null($model) && !is_a($model, $this->modelClass)) {
            throw new RequestException(sprintf("Bad model class (%s) expecting %s", get_class($model), $this->modelClass), RequestException::BAD_MODEL);
        }

        $this->model = $model;
    }

    /**
     * Used to format the request to send to the API
     *
     * @return string
     */
    public function __toString()
    {
        return (string)json_encode($this->model);
    }

    /**
     * Perform validation on the request object
     *
     * @throws RequestException
     */
    public function validate()
    {
        if (!in_array($this->method, $this->allowedMethods)) {
            throw new RequestException("Bad request method", RequestException::BAD_METHOD);
        }
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Perform validation on the request model
     *
     * @throws RequestException
     */
    protected function checkModel()
    {
        if (is_null($this->model)) {
            throw new RequestException('We can\'t make a request without a RequestModel', RequestException::MISSING_MODEL);
        }
    }
}