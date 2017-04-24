<?php

namespace Easir\SDK;

use GuzzleHttp\Psr7\Response as GuzzleResponse;

/**
 * Response base class
 *
 * @package Easir\SDK
 */
class Response
{
    use PopulatableFromData;

    public $errors, $statusCode;

    /**
     * Create an instance from the Guzzle client response object
     *
     * @static
     * @param GuzzleResponse $clientResponse
     * @return static
     */
    public static function createFromClientResponse(GuzzleResponse $clientResponse)
    {
        $response = new static;

        $response->statusCode = $clientResponse->getStatusCode();

        $responseData = json_decode($clientResponse->getBody()->getContents());

        if ($responseData) {
            $response->populateFromData($responseData);
        }

        return $response;
    }

    /**
     * Format response as a JSON string
     *
     * @return string
     */
    public function asJson()
    {
        return json_encode($this);
    }

    /**
     * Return true if the response has errors
     *
     * @return bool
     */
    public function hasErrors()
    {
        return (count($this->errors) > 0);
    }

    /**
     * Return true if the response contains the given error code
     *
     * @param string $code
     * @return bool
     */
    public function hasError($code)
    {
        $foundCode = false;
        if (is_array($this->errors)) {
            foreach ($this->errors as $error) {
                if (isset($error->code) && $error->code == $code) {
                    $foundCode = true;
                    break;
                }
            }
        }

        return $foundCode;
    }

    /**
     * Get the error messages associated with the response
     *
     * @return array
     */
    public function getErrorMessages()
    {
        $errorMessages = array();
        if (is_array($this->errors)) {
            foreach ($this->errors as $error) {
                if (isset($error->message)) {
                    array_push($errorMessages, $error->message);
                }
            }
        }

        return $errorMessages;
    }

}