<?php
/**
 * MLApi
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

class MLApi extends \Dojah\CustomApi
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
        'verifyPhotoIdWithSelfie' => [
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
     * Operation verifyPhotoIdWithSelfie
     *
     * KYC - Selfie Photo ID Verification
     *
     * @param  \Dojah\Model\MlVerifyPhotoIdWithSelfieRequest $ml_verify_photo_id_with_selfie_request ml_verify_photo_id_with_selfie_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['verifyPhotoIdWithSelfie'] to see the possible values for this operation
     *
     * @throws \Dojah\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object
     */
    public function verifyPhotoIdWithSelfie(

        $selfie_image = SENTINEL_VALUE,
        $photoid_image = SENTINEL_VALUE,

        string $contentType = self::contentTypes['verifyPhotoIdWithSelfie'][0]

    )
    {
        $_body = [];
        $this->setRequestBodyProperty($_body, "selfie_image", $selfie_image);
        $this->setRequestBodyProperty($_body, "photoid_image", $photoid_image);
        $ml_verify_photo_id_with_selfie_request = $_body;

        list($response) = $this->verifyPhotoIdWithSelfieWithHttpInfo($ml_verify_photo_id_with_selfie_request, $contentType);
        return $response;
    }

    /**
     * Operation verifyPhotoIdWithSelfieWithHttpInfo
     *
     * KYC - Selfie Photo ID Verification
     *
     * @param  \Dojah\Model\MlVerifyPhotoIdWithSelfieRequest $ml_verify_photo_id_with_selfie_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['verifyPhotoIdWithSelfie'] to see the possible values for this operation
     *
     * @throws \Dojah\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function verifyPhotoIdWithSelfieWithHttpInfo($ml_verify_photo_id_with_selfie_request, string $contentType = self::contentTypes['verifyPhotoIdWithSelfie'][0], \Dojah\RequestOptions $requestOptions = new \Dojah\RequestOptions())
    {
        ["request" => $request, "serializedBody" => $serializedBody] = $this->verifyPhotoIdWithSelfieRequest($ml_verify_photo_id_with_selfie_request, $contentType);

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
                    return $this->verifyPhotoIdWithSelfieWithHttpInfo(
                        $ml_verify_photo_id_with_selfie_request,
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
     * Operation verifyPhotoIdWithSelfieAsync
     *
     * KYC - Selfie Photo ID Verification
     *
     * @param  \Dojah\Model\MlVerifyPhotoIdWithSelfieRequest $ml_verify_photo_id_with_selfie_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['verifyPhotoIdWithSelfie'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function verifyPhotoIdWithSelfieAsync(

        $selfie_image = SENTINEL_VALUE,
        $photoid_image = SENTINEL_VALUE,

        string $contentType = self::contentTypes['verifyPhotoIdWithSelfie'][0]

    )
    {
        $_body = [];
        $this->setRequestBodyProperty($_body, "selfie_image", $selfie_image);
        $this->setRequestBodyProperty($_body, "photoid_image", $photoid_image);
        $ml_verify_photo_id_with_selfie_request = $_body;

        return $this->verifyPhotoIdWithSelfieAsyncWithHttpInfo($ml_verify_photo_id_with_selfie_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation verifyPhotoIdWithSelfieAsyncWithHttpInfo
     *
     * KYC - Selfie Photo ID Verification
     *
     * @param  \Dojah\Model\MlVerifyPhotoIdWithSelfieRequest $ml_verify_photo_id_with_selfie_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['verifyPhotoIdWithSelfie'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function verifyPhotoIdWithSelfieAsyncWithHttpInfo($ml_verify_photo_id_with_selfie_request, string $contentType = self::contentTypes['verifyPhotoIdWithSelfie'][0], \Dojah\RequestOptions $requestOptions = new \Dojah\RequestOptions())
    {
        $returnType = 'object';
        ["request" => $request, "serializedBody" => $serializedBody] = $this->verifyPhotoIdWithSelfieRequest($ml_verify_photo_id_with_selfie_request, $contentType);

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
     * Create request for operation 'verifyPhotoIdWithSelfie'
     *
     * @param  \Dojah\Model\MlVerifyPhotoIdWithSelfieRequest $ml_verify_photo_id_with_selfie_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['verifyPhotoIdWithSelfie'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function verifyPhotoIdWithSelfieRequest($ml_verify_photo_id_with_selfie_request, string $contentType = self::contentTypes['verifyPhotoIdWithSelfie'][0])
    {

        if ($ml_verify_photo_id_with_selfie_request !== SENTINEL_VALUE) {
            if (!($ml_verify_photo_id_with_selfie_request instanceof \Dojah\Model\MlVerifyPhotoIdWithSelfieRequest)) {
                if (!is_array($ml_verify_photo_id_with_selfie_request))
                    throw new \InvalidArgumentException('"ml_verify_photo_id_with_selfie_request" must be associative array or an instance of \Dojah\Model\MlVerifyPhotoIdWithSelfieRequest MLApi.verifyPhotoIdWithSelfie.');
                else
                    $ml_verify_photo_id_with_selfie_request = new \Dojah\Model\MlVerifyPhotoIdWithSelfieRequest($ml_verify_photo_id_with_selfie_request);
            }
        }
        // verify the required parameter 'ml_verify_photo_id_with_selfie_request' is set
        if ($ml_verify_photo_id_with_selfie_request === SENTINEL_VALUE || (is_array($ml_verify_photo_id_with_selfie_request) && count($ml_verify_photo_id_with_selfie_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter ml_verify_photo_id_with_selfie_request when calling verifyPhotoIdWithSelfie'
            );
        }


        $resourcePath = '/api/v1/kyc/photoid/verify';
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
        if (isset($ml_verify_photo_id_with_selfie_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($ml_verify_photo_id_with_selfie_request));
            } else {
                $httpBody = $ml_verify_photo_id_with_selfie_request;
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
