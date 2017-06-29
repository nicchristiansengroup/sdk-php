<?php

namespace Easir\SDK\Request;

use Easir\SDK\Exception\RequestException;
use Easir\SDK\Request;
use Easir\SDK\Request\Model\Auth as AuthRequestModel;
use Easir\SDK\Response\Auth as AuthResponse;

class Auth extends Request
{
    /**
     * @var string
     */
    protected $url = '/token';
    /**
     * @var string
     */
    public $method = 'POST';
    /**
     * @var bool
     */
    public $requiresAuth = false;
    /**
     * @var string
     */
    public $responseClass = AuthResponse::class;
    /**
     * @var string
     */
    protected $modelClass = AuthRequestModel::class;

    /**
     * @var array
     */
    private $availableGrantTypes = ['client_credentials', 'password', 'refresh_token'];

    public function __construct(Model $model)
    {
        parent::__construct($model);

        // Default to first grant type
        $this->setGrantType($this->availableGrantTypes[0]);
    }

    /**
     * @param string
     * @throws RequestException
     */
    public function setGrantType($grantType)
    {
        if (!in_array($grantType, $this->availableGrantTypes)) {
            throw new RequestException(sprintf('Unsupported grant type: %s', $grantType), RequestException::BAD_GRANT_TYPE);
        }

        $this->options['query'] = ['grant_type' => $grantType];
    }
}
