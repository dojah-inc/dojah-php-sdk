<?php
/**
 * AMLApi
 * PHP version 7.4
 *
 * @category Class
 * @package  Dojah
 * @author   Konfig
 * @link     https://konfigthis.com
 */

/**
 * DOJAH Publilc APIs
 *
 * Use Dojah to verify, onboard and manage user identity across Africa!
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://konfigthis.com
 */


namespace Dojah\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\BodySummarizer;
use GuzzleHttp\Middleware;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Utils;
use Dojah\ApiException;
use Dojah\Configuration;
use Dojah\HeaderSelector;
use Dojah\ObjectSerializer;

class AMLApi extends \Dojah\CustomApi
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
        'getScreeningInfo' => [
            'application/json',
        ],
        'screenAml' => [
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
        Configuration $config = null,
        ClientInterface $client = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $clientOptions = [];
        if (!$config->getVerifySsl()) $clientOptions["verify"] = false;

        // Do not truncate error messages
        // https://github.com/guzzle/guzzle/issues/2185#issuecomment-800293420
        $stack = new HandlerStack(Utils::chooseHandler());
        $stack->push(Middleware::httpErrors(new BodySummarizer(10000)), 'http_errors');
        $stack->push(Middleware::redirect(), 'allow_redirects');
        $stack->push(Middleware::cookies(), 'cookies');
        $stack->push(Middleware::prepareBody(), 'prepare_body');
        $clientOptions["handler"] = $stack;

        $this->client = $client ?: new Client($clientOptions);
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
     * For initializing request body parameter
     */
    private function setRequestBodyProperty(&$body, $property, $value) {
        if ($body === null) $body = [];
        // user did not pass in a value for this parameter
        if ($value === SENTINEL_VALUE) return;
        $body[$property] = $value;
    }

    /**
     * Operation getScreeningInfo
     *
     * Get AML Info
     *
     * @param  string $profile_id profile_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getScreeningInfo'] to see the possible values for this operation
     *
     * @throws \Dojah\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object
     */
    public function getScreeningInfo(
        $profile_id = SENTINEL_VALUE,


        string $contentType = self::contentTypes['getScreeningInfo'][0]

    )
    {

        list($response) = $this->getScreeningInfoWithHttpInfo($profile_id, $contentType);
        return $response;
    }

    /**
     * Operation getScreeningInfoWithHttpInfo
     *
     * Get AML Info
     *
     * @param  string $profile_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getScreeningInfo'] to see the possible values for this operation
     *
     * @throws \Dojah\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function getScreeningInfoWithHttpInfo($profile_id = null, string $contentType = self::contentTypes['getScreeningInfo'][0], \Dojah\RequestOptions $requestOptions = new \Dojah\RequestOptions())
    {
        ["request" => $request, "serializedBody" => $serializedBody] = $this->getScreeningInfoRequest($profile_id, $contentType);

        // Customization hook
        $this->beforeSendHook($request, $requestOptions, $this->config);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if (
                    ($e->getCode() == 401 || $e->getCode() == 403) &&
                    !empty($this->getConfig()->getAccessToken()) &&
                    $requestOptions->shouldRetryOAuth()
                ) {
                    return $this->getScreeningInfoWithHttpInfo(
                        $profile_id,
                        $contentType,
                        $requestOptions->setRetryOAuth(false)
                    );
                }

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
                    if ('object' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('object' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'object', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'object';
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

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'object',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getScreeningInfoAsync
     *
     * Get AML Info
     *
     * @param  string $profile_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getScreeningInfo'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getScreeningInfoAsync(
        $profile_id = SENTINEL_VALUE,


        string $contentType = self::contentTypes['getScreeningInfo'][0]

    )
    {

        return $this->getScreeningInfoAsyncWithHttpInfo($profile_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getScreeningInfoAsyncWithHttpInfo
     *
     * Get AML Info
     *
     * @param  string $profile_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getScreeningInfo'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getScreeningInfoAsyncWithHttpInfo($profile_id = null, string $contentType = self::contentTypes['getScreeningInfo'][0], \Dojah\RequestOptions $requestOptions = new \Dojah\RequestOptions())
    {
        $returnType = 'object';
        ["request" => $request, "serializedBody" => $serializedBody] = $this->getScreeningInfoRequest($profile_id, $contentType);

        // Customization hook
        $this->beforeSendHook($request, $requestOptions, $this->config);

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
     * Create request for operation 'getScreeningInfo'
     *
     * @param  string $profile_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getScreeningInfo'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getScreeningInfoRequest($profile_id = SENTINEL_VALUE, string $contentType = self::contentTypes['getScreeningInfo'][0])
    {

        // Check if $profile_id is a string
        if ($profile_id !== SENTINEL_VALUE && !is_string($profile_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($profile_id, true), gettype($profile_id)));
        }


        $resourcePath = '/api/v1/aml/screening/info';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        if ($profile_id !== SENTINEL_VALUE) {
            // query params
            $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
                $profile_id,
                'profileId', // param base name
                'string', // openApiType
                'form', // style
                true, // explode
                false // required
            ) ?? []);
        }




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
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
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('AppId');
        if ($apiKey !== null) {
            $headers['AppId'] = $apiKey;
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

        $method = 'GET';
        $this->beforeCreateRequestHook($method, $resourcePath, $queryParams, $headers, $httpBody);

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return [
            "request" => new Request(
                $method,
                $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
                $headers,
                $httpBody
            ),
            "serializedBody" => $httpBody
        ];
    }

    /**
     * Operation screenAml
     *
     * AML Screening
     *
     * @param  \Dojah\Model\AmlScreenAmlRequest $aml_screen_aml_request aml_screen_aml_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['screenAml'] to see the possible values for this operation
     *
     * @throws \Dojah\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Dojah\Model\AmlScreenAmlResponse
     */
    public function screenAml(

        $first_name = SENTINEL_VALUE,
        $last_name = SENTINEL_VALUE,
        $date_of_birth = SENTINEL_VALUE,
        $name_query_match_threshold = SENTINEL_VALUE,

        string $contentType = self::contentTypes['screenAml'][0]

    )
    {
        $_body = [];
        $this->setRequestBodyProperty($_body, "first_name", $first_name);
        $this->setRequestBodyProperty($_body, "last_name", $last_name);
        $this->setRequestBodyProperty($_body, "date_of_birth", $date_of_birth);
        $this->setRequestBodyProperty($_body, "name_query_match_threshold", $name_query_match_threshold);
        $aml_screen_aml_request = $_body;

        list($response) = $this->screenAmlWithHttpInfo($aml_screen_aml_request, $contentType);
        return $response;
    }

    /**
     * Operation screenAmlWithHttpInfo
     *
     * AML Screening
     *
     * @param  \Dojah\Model\AmlScreenAmlRequest $aml_screen_aml_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['screenAml'] to see the possible values for this operation
     *
     * @throws \Dojah\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Dojah\Model\AmlScreenAmlResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function screenAmlWithHttpInfo($aml_screen_aml_request, string $contentType = self::contentTypes['screenAml'][0], \Dojah\RequestOptions $requestOptions = new \Dojah\RequestOptions())
    {
        ["request" => $request, "serializedBody" => $serializedBody] = $this->screenAmlRequest($aml_screen_aml_request, $contentType);

        // Customization hook
        $this->beforeSendHook($request, $requestOptions, $this->config, $serializedBody);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if (
                    ($e->getCode() == 401 || $e->getCode() == 403) &&
                    !empty($this->getConfig()->getAccessToken()) &&
                    $requestOptions->shouldRetryOAuth()
                ) {
                    return $this->screenAmlWithHttpInfo(
                        $aml_screen_aml_request,
                        $contentType,
                        $requestOptions->setRetryOAuth(false)
                    );
                }

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
                    if ('\Dojah\Model\AmlScreenAmlResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Dojah\Model\AmlScreenAmlResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Dojah\Model\AmlScreenAmlResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Dojah\Model\AmlScreenAmlResponse';
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

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Dojah\Model\AmlScreenAmlResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation screenAmlAsync
     *
     * AML Screening
     *
     * @param  \Dojah\Model\AmlScreenAmlRequest $aml_screen_aml_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['screenAml'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function screenAmlAsync(

        $first_name = SENTINEL_VALUE,
        $last_name = SENTINEL_VALUE,
        $date_of_birth = SENTINEL_VALUE,
        $name_query_match_threshold = SENTINEL_VALUE,

        string $contentType = self::contentTypes['screenAml'][0]

    )
    {
        $_body = [];
        $this->setRequestBodyProperty($_body, "first_name", $first_name);
        $this->setRequestBodyProperty($_body, "last_name", $last_name);
        $this->setRequestBodyProperty($_body, "date_of_birth", $date_of_birth);
        $this->setRequestBodyProperty($_body, "name_query_match_threshold", $name_query_match_threshold);
        $aml_screen_aml_request = $_body;

        return $this->screenAmlAsyncWithHttpInfo($aml_screen_aml_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation screenAmlAsyncWithHttpInfo
     *
     * AML Screening
     *
     * @param  \Dojah\Model\AmlScreenAmlRequest $aml_screen_aml_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['screenAml'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function screenAmlAsyncWithHttpInfo($aml_screen_aml_request, string $contentType = self::contentTypes['screenAml'][0], \Dojah\RequestOptions $requestOptions = new \Dojah\RequestOptions())
    {
        $returnType = '\Dojah\Model\AmlScreenAmlResponse';
        ["request" => $request, "serializedBody" => $serializedBody] = $this->screenAmlRequest($aml_screen_aml_request, $contentType);

        // Customization hook
        $this->beforeSendHook($request, $requestOptions, $this->config, $serializedBody);

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
     * Create request for operation 'screenAml'
     *
     * @param  \Dojah\Model\AmlScreenAmlRequest $aml_screen_aml_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['screenAml'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function screenAmlRequest($aml_screen_aml_request, string $contentType = self::contentTypes['screenAml'][0])
    {

        if ($aml_screen_aml_request !== SENTINEL_VALUE) {
            if (!($aml_screen_aml_request instanceof \Dojah\Model\AmlScreenAmlRequest)) {
                if (!is_array($aml_screen_aml_request))
                    throw new \InvalidArgumentException('"aml_screen_aml_request" must be associative array or an instance of \Dojah\Model\AmlScreenAmlRequest AMLApi.screenAml.');
                else
                    $aml_screen_aml_request = new \Dojah\Model\AmlScreenAmlRequest($aml_screen_aml_request);
            }
        }
        // verify the required parameter 'aml_screen_aml_request' is set
        if ($aml_screen_aml_request === SENTINEL_VALUE || (is_array($aml_screen_aml_request) && count($aml_screen_aml_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter aml_screen_aml_request when calling screenAml'
            );
        }


        $resourcePath = '/api/v1/aml/screening/platform';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($aml_screen_aml_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($aml_screen_aml_request));
            } else {
                $httpBody = $aml_screen_aml_request;
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
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('AppId');
        if ($apiKey !== null) {
            $headers['AppId'] = $apiKey;
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

        $method = 'POST';
        $this->beforeCreateRequestHook($method, $resourcePath, $queryParams, $headers, $httpBody);

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return [
            "request" => new Request(
                $method,
                $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
                $headers,
                $httpBody
            ),
            "serializedBody" => $httpBody
        ];
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
