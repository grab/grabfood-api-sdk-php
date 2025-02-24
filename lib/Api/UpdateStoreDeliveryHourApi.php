<?php
/**
 * UpdateStoreDeliveryHourApi
 * PHP version 7.4
 *
 * @category Class
 * @package  Grab\GrabfoodApiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

// Copyright 2024 Grabtaxi Holdings PTE LTE (GRAB), All rights reserved.
// Use of this source code is governed by an MIT-style license that can be found in the LICENSE file

/*
GrabFood

No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)

API version: 1.1.3
*/

// Code generated by OpenAPI Generator (https://openapi-generator.tech); DO NOT EDIT.

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Grab\GrabfoodApiSdk\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Grab\GrabfoodApiSdk\ApiException;
use Grab\GrabfoodApiSdk\Configuration;
use Grab\GrabfoodApiSdk\HeaderSelector;
use Grab\GrabfoodApiSdk\ObjectSerializer;

/**
 * UpdateStoreDeliveryHourApi Class Doc Comment
 *
 * @category Class
 * @package  Grab\GrabfoodApiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class UpdateStoreDeliveryHourApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'updateStoreDeliveryHour' => [
            'application/json',
        ],
    ];

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation updateStoreDeliveryHour
     *
     * Update Store Delivery Hours
     *
     * @param  string $content_type The content type of the request body. You must use &#x60;application/json&#x60; for this header as GrabFood API currently does not support other formats. (required)
     * @param  string $authorization Specify the generated authorization token of the bearer type. (required)
     * @param  string $merchant_id The merchant&#39;s ID that is in GrabFood&#39;s database. (required)
     * @param  \Grab\GrabfoodApiSdk\Model\UpdateDeliveryHourRequest $update_delivery_hour_request update_delivery_hour_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateStoreDeliveryHour'] to see the possible values for this operation
     *
     * @throws \Grab\GrabfoodApiSdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Grab\GrabfoodApiSdk\Model\UpdateDeliveryHourResponse
     */
    public function updateStoreDeliveryHour($content_type, $authorization, $merchant_id, $update_delivery_hour_request, string $contentType = self::contentTypes['updateStoreDeliveryHour'][0])
    {
        list($response) = $this->updateStoreDeliveryHourWithHttpInfo($content_type, $authorization, $merchant_id, $update_delivery_hour_request, $contentType);
        return $response;
    }

    /**
     * Operation updateStoreDeliveryHourWithHttpInfo
     *
     * Update Store Delivery Hours
     *
     * @param  string $content_type The content type of the request body. You must use &#x60;application/json&#x60; for this header as GrabFood API currently does not support other formats. (required)
     * @param  string $authorization Specify the generated authorization token of the bearer type. (required)
     * @param  string $merchant_id The merchant&#39;s ID that is in GrabFood&#39;s database. (required)
     * @param  \Grab\GrabfoodApiSdk\Model\UpdateDeliveryHourRequest $update_delivery_hour_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateStoreDeliveryHour'] to see the possible values for this operation
     *
     * @throws \Grab\GrabfoodApiSdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Grab\GrabfoodApiSdk\Model\UpdateDeliveryHourResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateStoreDeliveryHourWithHttpInfo($content_type, $authorization, $merchant_id, $update_delivery_hour_request, string $contentType = self::contentTypes['updateStoreDeliveryHour'][0])
    {
        $request = $this->updateStoreDeliveryHourRequest($content_type, $authorization, $merchant_id, $update_delivery_hour_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Grab\GrabfoodApiSdk\Model\UpdateDeliveryHourResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Grab\GrabfoodApiSdk\Model\UpdateDeliveryHourResponse' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Grab\GrabfoodApiSdk\Model\UpdateDeliveryHourResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Grab\GrabfoodApiSdk\Model\UpdateDeliveryHourResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Grab\GrabfoodApiSdk\Model\UpdateDeliveryHourResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation updateStoreDeliveryHourAsync
     *
     * Update Store Delivery Hours
     *
     * @param  string $content_type The content type of the request body. You must use &#x60;application/json&#x60; for this header as GrabFood API currently does not support other formats. (required)
     * @param  string $authorization Specify the generated authorization token of the bearer type. (required)
     * @param  string $merchant_id The merchant&#39;s ID that is in GrabFood&#39;s database. (required)
     * @param  \Grab\GrabfoodApiSdk\Model\UpdateDeliveryHourRequest $update_delivery_hour_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateStoreDeliveryHour'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateStoreDeliveryHourAsync($content_type, $authorization, $merchant_id, $update_delivery_hour_request, string $contentType = self::contentTypes['updateStoreDeliveryHour'][0])
    {
        return $this->updateStoreDeliveryHourAsyncWithHttpInfo($content_type, $authorization, $merchant_id, $update_delivery_hour_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateStoreDeliveryHourAsyncWithHttpInfo
     *
     * Update Store Delivery Hours
     *
     * @param  string $content_type The content type of the request body. You must use &#x60;application/json&#x60; for this header as GrabFood API currently does not support other formats. (required)
     * @param  string $authorization Specify the generated authorization token of the bearer type. (required)
     * @param  string $merchant_id The merchant&#39;s ID that is in GrabFood&#39;s database. (required)
     * @param  \Grab\GrabfoodApiSdk\Model\UpdateDeliveryHourRequest $update_delivery_hour_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateStoreDeliveryHour'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateStoreDeliveryHourAsyncWithHttpInfo($content_type, $authorization, $merchant_id, $update_delivery_hour_request, string $contentType = self::contentTypes['updateStoreDeliveryHour'][0])
    {
        $returnType = '\Grab\GrabfoodApiSdk\Model\UpdateDeliveryHourResponse';
        $request = $this->updateStoreDeliveryHourRequest($content_type, $authorization, $merchant_id, $update_delivery_hour_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'updateStoreDeliveryHour'
     *
     * @param  string $content_type The content type of the request body. You must use &#x60;application/json&#x60; for this header as GrabFood API currently does not support other formats. (required)
     * @param  string $authorization Specify the generated authorization token of the bearer type. (required)
     * @param  string $merchant_id The merchant&#39;s ID that is in GrabFood&#39;s database. (required)
     * @param  \Grab\GrabfoodApiSdk\Model\UpdateDeliveryHourRequest $update_delivery_hour_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateStoreDeliveryHour'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateStoreDeliveryHourRequest($content_type, $authorization, $merchant_id, $update_delivery_hour_request, string $contentType = self::contentTypes['updateStoreDeliveryHour'][0])
    {

        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling updateStoreDeliveryHour'
            );
        }

        // verify the required parameter 'authorization' is set
        if ($authorization === null || (is_array($authorization) && count($authorization) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $authorization when calling updateStoreDeliveryHour'
            );
        }

        // verify the required parameter 'merchant_id' is set
        if ($merchant_id === null || (is_array($merchant_id) && count($merchant_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $merchant_id when calling updateStoreDeliveryHour'
            );
        }

        // verify the required parameter 'update_delivery_hour_request' is set
        if ($update_delivery_hour_request === null || (is_array($update_delivery_hour_request) && count($update_delivery_hour_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $update_delivery_hour_request when calling updateStoreDeliveryHour'
            );
        }


        $resourcePath = '/partner/v1/merchants/{merchantID}/store/opening-hours';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }
        // header params
        if ($authorization !== null) {
            $headerParams['Authorization'] = ObjectSerializer::toHeaderValue($authorization);
        }

        // path params
        if ($merchant_id !== null) {
            $resourcePath = str_replace(
                '{' . 'merchantID' . '}',
                ObjectSerializer::toPathValue($merchant_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($update_delivery_hour_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($update_delivery_hour_request));
            } else {
                $httpBody = $update_delivery_hour_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'PUT',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
