<?php
/*
 * PepipostLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace PepipostLib\Controllers;

use CoreInterfaces\Core\Request\RequestMethod;
use PepipostLib\APIException;
use PepipostLib\APIHelper;
use PepipostLib\Configuration;
use PepipostLib\Models;
use PepipostLib\Exceptions;
use PepipostLib\Http\HttpRequest;
use PepipostLib\Http\HttpResponse;
use PepipostLib\Http\HttpMethod;
use PepipostLib\Http\HttpContext;
use Unirest\HttpClient;
use Unirest\Request;

/**
 * @todo Add a general description for this controller.
 */
class SetrecurringcreditddetailsController extends BaseController
{
    /**
     * @var SetrecurringcreditddetailsController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return SetrecurringcreditddetailsController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Lets you configure a recurring credit allocation to a subaccount
     *
     * @param Models\UpdaterecurringCredisofsubaccount $body Update recurring credit account
     * @return object response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createSetrecurringcreditddetailsPOST(
        $body
    ) {

        //prepare query string for API call
        $_queryBuilder = '/setrecurringcreditddetails';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::$BASEURI . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'   => BaseController::USER_AGENT,
            'content-type' => 'application/json; charset=utf-8',
            'api_key'      => Configuration::$apiKey
        );

        //json encode body
        $_bodyJson = Request\Body::Json($body);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $request = new Request\Request(
            $_queryUrl,
            RequestMethod::POST,
            $_headers,
            $_bodyJson
        );

        $client   = new HttpClient();
        $response = $client->execute($request);

        $_httpResponse = new HttpResponse($response->getStatusCode(), $response->getHeaders(), $response->getRawBody());
        $_httpContext  = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->getStatusCode() == 400) {
            throw new APIException('API Response', $_httpContext);
        }

        if ($response->getStatusCode() == 401) {
            throw new APIException('API Response', $_httpContext);
        }

        if ($response->getStatusCode() == 403) {
            throw new APIException('API Response', $_httpContext);
        }

        if ($response->getStatusCode() == 405) {
            throw new APIException('Invalid input', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->getBody();
    }
}
