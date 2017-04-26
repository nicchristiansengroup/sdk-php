# EASI'R PHP SDK

Current version `0.10.2`
Supported API version `2.18.0`

The purpose of this SDK is to standardise how our apps communicate with the EASI'R API.

To run tests `./vendor/bin/codecept run`

## Project structure
- Exception
- Model
- Request
-- Models
- Response

## Usage
### Installing

The package is registered with packagist so it can simply be installed with: `composer require easir/sdk`

### Implementation
```
$client = new \Easir\SDK\Client("https://api.url");
$requestModel = new \Easir\SDK\Request\Model\MyRequestModel;
$requestModel->property_1 = "something";
$requestModel->property_2 = "something_else";
$myRequest = new \Easir\SDK\Request\MyRequest($requestModel);
$myResponse = $client->execute($myRequest);
```

You can check if the request fails with `$myResponse->hasErrors()` and/or `$myResponse->statusCode`.
