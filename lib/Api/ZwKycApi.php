<?php
/**
 * ZwKycApi
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

class ZwKycApi extends \Dojah\CustomApi
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
        'checkCredit' => [
            'application/json',
        ],
        'verifyId' => [
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
     * Operation checkCredit
     *
     * Credit Check
     *
     * @param  string $app_id app_id (optional)
     * @param  string $id_number id_number (optional)
     * @param  string $name name (optional)
     * @param  string $surname surname (optional)
     * @param  string $gender gender (optional)
     * @param  string $dob dob (optional)
     * @param  string $marital_status marital_status (optional)
     * @param  int $mobile_number mobile_number (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['checkCredit'] to see the possible values for this operation
     *
     * @throws \Dojah\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Dojah\Model\ZwKycCheckCreditResponse
     */
    public function checkCredit(
        $app_id = SENTINEL_VALUE,
        $id_number = SENTINEL_VALUE,
        $name = SENTINEL_VALUE,
        $surname = SENTINEL_VALUE,
        $gender = SENTINEL_VALUE,
        $dob = SENTINEL_VALUE,
        $marital_status = SENTINEL_VALUE,
        $mobile_number = SENTINEL_VALUE,


        string $contentType = self::contentTypes['checkCredit'][0]

    )
    {

        list($response) = $this->checkCreditWithHttpInfo($app_id, $id_number, $name, $surname, $gender, $dob, $marital_status, $mobile_number, $contentType);
        return $response;
    }

    /**
     * Operation checkCreditWithHttpInfo
     *
     * Credit Check
     *
     * @param  string $app_id (optional)
     * @param  string $id_number (optional)
     * @param  string $name (optional)
     * @param  string $surname (optional)
     * @param  string $gender (optional)
     * @param  string $dob (optional)
     * @param  string $marital_status (optional)
     * @param  int $mobile_number (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['checkCredit'] to see the possible values for this operation
     *
     * @throws \Dojah\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Dojah\Model\ZwKycCheckCreditResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function checkCreditWithHttpInfo($app_id = null, $id_number = null, $name = null, $surname = null, $gender = null, $dob = null, $marital_status = null, $mobile_number = null, string $contentType = self::contentTypes['checkCredit'][0], \Dojah\RequestOptions $requestOptions = new \Dojah\RequestOptions())
    {
        ["request" => $request, "serializedBody" => $serializedBody] = $this->checkCreditRequest($app_id, $id_number, $name, $surname, $gender, $dob, $marital_status, $mobile_number, $contentType);

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
                    return $this->checkCreditWithHttpInfo(
                        $app_id,
                        $id_number,
                        $name,
                        $surname,
                        $gender,
                        $dob,
                        $marital_status,
                        $mobile_number,
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
                    if ('\Dojah\Model\ZwKycCheckCreditResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Dojah\Model\ZwKycCheckCreditResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Dojah\Model\ZwKycCheckCreditResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Dojah\Model\ZwKycCheckCreditResponse';
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
                        '\Dojah\Model\ZwKycCheckCreditResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation checkCreditAsync
     *
     * Credit Check
     *
     * @param  string $app_id (optional)
     * @param  string $id_number (optional)
     * @param  string $name (optional)
     * @param  string $surname (optional)
     * @param  string $gender (optional)
     * @param  string $dob (optional)
     * @param  string $marital_status (optional)
     * @param  int $mobile_number (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['checkCredit'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function checkCreditAsync(
        $app_id = SENTINEL_VALUE,
        $id_number = SENTINEL_VALUE,
        $name = SENTINEL_VALUE,
        $surname = SENTINEL_VALUE,
        $gender = SENTINEL_VALUE,
        $dob = SENTINEL_VALUE,
        $marital_status = SENTINEL_VALUE,
        $mobile_number = SENTINEL_VALUE,


        string $contentType = self::contentTypes['checkCredit'][0]

    )
    {

        return $this->checkCreditAsyncWithHttpInfo($app_id, $id_number, $name, $surname, $gender, $dob, $marital_status, $mobile_number, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation checkCreditAsyncWithHttpInfo
     *
     * Credit Check
     *
     * @param  string $app_id (optional)
     * @param  string $id_number (optional)
     * @param  string $name (optional)
     * @param  string $surname (optional)
     * @param  string $gender (optional)
     * @param  string $dob (optional)
     * @param  string $marital_status (optional)
     * @param  int $mobile_number (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['checkCredit'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function checkCreditAsyncWithHttpInfo($app_id = null, $id_number = null, $name = null, $surname = null, $gender = null, $dob = null, $marital_status = null, $mobile_number = null, string $contentType = self::contentTypes['checkCredit'][0], \Dojah\RequestOptions $requestOptions = new \Dojah\RequestOptions())
    {
        $returnType = '\Dojah\Model\ZwKycCheckCreditResponse';
        ["request" => $request, "serializedBody" => $serializedBody] = $this->checkCreditRequest($app_id, $id_number, $name, $surname, $gender, $dob, $marital_status, $mobile_number, $contentType);

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
     * Create request for operation 'checkCredit'
     *
     * @param  string $app_id (optional)
     * @param  string $id_number (optional)
     * @param  string $name (optional)
     * @param  string $surname (optional)
     * @param  string $gender (optional)
     * @param  string $dob (optional)
     * @param  string $marital_status (optional)
     * @param  int $mobile_number (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['checkCredit'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function checkCreditRequest($app_id = SENTINEL_VALUE, $id_number = SENTINEL_VALUE, $name = SENTINEL_VALUE, $surname = SENTINEL_VALUE, $gender = SENTINEL_VALUE, $dob = SENTINEL_VALUE, $marital_status = SENTINEL_VALUE, $mobile_number = SENTINEL_VALUE, string $contentType = self::contentTypes['checkCredit'][0])
    {

        // Check if $app_id is a string
        if ($app_id !== SENTINEL_VALUE && !is_string($app_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($app_id, true), gettype($app_id)));
        }
        // Check if $id_number is a string
        if ($id_number !== SENTINEL_VALUE && !is_string($id_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id_number, true), gettype($id_number)));
        }
        // Check if $name is a string
        if ($name !== SENTINEL_VALUE && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)));
        }
        // Check if $surname is a string
        if ($surname !== SENTINEL_VALUE && !is_string($surname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($surname, true), gettype($surname)));
        }
        // Check if $gender is a string
        if ($gender !== SENTINEL_VALUE && !is_string($gender)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($gender, true), gettype($gender)));
        }
        // Check if $dob is a string
        if ($dob !== SENTINEL_VALUE && !is_string($dob)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dob, true), gettype($dob)));
        }
        // Check if $marital_status is a string
        if ($marital_status !== SENTINEL_VALUE && !is_string($marital_status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($marital_status, true), gettype($marital_status)));
        }


        $resourcePath = '/api/v1/zw/kyc/fcb';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        if ($id_number !== SENTINEL_VALUE) {
            // query params
            $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
                $id_number,
                'id_number', // param base name
                'string', // openApiType
                'form', // style
                true, // explode
                false // required
            ) ?? []);
        }
        if ($name !== SENTINEL_VALUE) {
            // query params
            $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
                $name,
                'name', // param base name
                'string', // openApiType
                'form', // style
                true, // explode
                false // required
            ) ?? []);
        }
        if ($surname !== SENTINEL_VALUE) {
            // query params
            $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
                $surname,
                'surname', // param base name
                'string', // openApiType
                'form', // style
                true, // explode
                false // required
            ) ?? []);
        }
        if ($gender !== SENTINEL_VALUE) {
            // query params
            $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
                $gender,
                'gender', // param base name
                'string', // openApiType
                'form', // style
                true, // explode
                false // required
            ) ?? []);
        }
        if ($dob !== SENTINEL_VALUE) {
            // query params
            $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
                $dob,
                'dob', // param base name
                'string', // openApiType
                'form', // style
                true, // explode
                false // required
            ) ?? []);
        }
        if ($marital_status !== SENTINEL_VALUE) {
            // query params
            $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
                $marital_status,
                'marital_status', // param base name
                'string', // openApiType
                'form', // style
                true, // explode
                false // required
            ) ?? []);
        }
        if ($mobile_number !== SENTINEL_VALUE) {
            // query params
            $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
                $mobile_number,
                'mobile_number', // param base name
                'integer', // openApiType
                'form', // style
                true, // explode
                false // required
            ) ?? []);
        }

        // header params
        if ($app_id !== SENTINEL_VALUE) {
            $headerParams['AppId'] = ObjectSerializer::toHeaderValue($app_id);
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
     * Operation verifyId
     *
     * National ID Verification
     *
     * @param  string $app_id app_id (optional)
     * @param  string $id id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['verifyId'] to see the possible values for this operation
     *
     * @throws \Dojah\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Dojah\Model\ZwKycVerifyIdResponse
     */
    public function verifyId(
        $app_id = SENTINEL_VALUE,
        $id = SENTINEL_VALUE,


        string $contentType = self::contentTypes['verifyId'][0]

    )
    {

        list($response) = $this->verifyIdWithHttpInfo($app_id, $id, $contentType);
        return $response;
    }

    /**
     * Operation verifyIdWithHttpInfo
     *
     * National ID Verification
     *
     * @param  string $app_id (optional)
     * @param  string $id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['verifyId'] to see the possible values for this operation
     *
     * @throws \Dojah\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Dojah\Model\ZwKycVerifyIdResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function verifyIdWithHttpInfo($app_id = null, $id = null, string $contentType = self::contentTypes['verifyId'][0], \Dojah\RequestOptions $requestOptions = new \Dojah\RequestOptions())
    {
        ["request" => $request, "serializedBody" => $serializedBody] = $this->verifyIdRequest($app_id, $id, $contentType);

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
                    return $this->verifyIdWithHttpInfo(
                        $app_id,
                        $id,
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
                    if ('\Dojah\Model\ZwKycVerifyIdResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Dojah\Model\ZwKycVerifyIdResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Dojah\Model\ZwKycVerifyIdResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Dojah\Model\ZwKycVerifyIdResponse';
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
                        '\Dojah\Model\ZwKycVerifyIdResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation verifyIdAsync
     *
     * National ID Verification
     *
     * @param  string $app_id (optional)
     * @param  string $id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['verifyId'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function verifyIdAsync(
        $app_id = SENTINEL_VALUE,
        $id = SENTINEL_VALUE,


        string $contentType = self::contentTypes['verifyId'][0]

    )
    {

        return $this->verifyIdAsyncWithHttpInfo($app_id, $id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation verifyIdAsyncWithHttpInfo
     *
     * National ID Verification
     *
     * @param  string $app_id (optional)
     * @param  string $id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['verifyId'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function verifyIdAsyncWithHttpInfo($app_id = null, $id = null, string $contentType = self::contentTypes['verifyId'][0], \Dojah\RequestOptions $requestOptions = new \Dojah\RequestOptions())
    {
        $returnType = '\Dojah\Model\ZwKycVerifyIdResponse';
        ["request" => $request, "serializedBody" => $serializedBody] = $this->verifyIdRequest($app_id, $id, $contentType);

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
     * Create request for operation 'verifyId'
     *
     * @param  string $app_id (optional)
     * @param  string $id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['verifyId'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function verifyIdRequest($app_id = SENTINEL_VALUE, $id = SENTINEL_VALUE, string $contentType = self::contentTypes['verifyId'][0])
    {

        // Check if $app_id is a string
        if ($app_id !== SENTINEL_VALUE && !is_string($app_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($app_id, true), gettype($app_id)));
        }
        // Check if $id is a string
        if ($id !== SENTINEL_VALUE && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)));
        }


        $resourcePath = '/api/v1/zw/kyc/nin';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        if ($id !== SENTINEL_VALUE) {
            // query params
            $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
                $id,
                'id', // param base name
                'string', // openApiType
                'form', // style
                true, // explode
                false // required
            ) ?? []);
        }

        // header params
        if ($app_id !== SENTINEL_VALUE) {
            $headerParams['AppId'] = ObjectSerializer::toHeaderValue($app_id);
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
