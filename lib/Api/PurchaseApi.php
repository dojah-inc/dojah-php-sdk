<?php
/**
 * PurchaseApi
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

class PurchaseApi extends \Dojah\CustomApi
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
        'sendAirtime' => [
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
     * Operation sendAirtime
     *
     * Purchase - Send Airtime
     *
     * @param  \Dojah\Model\PurchaseAirtimeRequest $purchase_airtime_request purchase_airtime_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['sendAirtime'] to see the possible values for this operation
     *
     * @throws \Dojah\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Dojah\Model\PurchaseAirtimeResponse
     */
    public function sendAirtime(

        $destination = SENTINEL_VALUE,
        $amount = SENTINEL_VALUE,

        string $contentType = self::contentTypes['sendAirtime'][0]

    )
    {
        $_body = [];
        $this->setRequestBodyProperty($_body, "destination", $destination);
        $this->setRequestBodyProperty($_body, "amount", $amount);
        $purchase_airtime_request = $_body;

        list($response) = $this->sendAirtimeWithHttpInfo($purchase_airtime_request, $contentType);
        return $response;
    }

    /**
     * Operation sendAirtimeWithHttpInfo
     *
     * Purchase - Send Airtime
     *
     * @param  \Dojah\Model\PurchaseAirtimeRequest $purchase_airtime_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['sendAirtime'] to see the possible values for this operation
     *
     * @throws \Dojah\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Dojah\Model\PurchaseAirtimeResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function sendAirtimeWithHttpInfo($purchase_airtime_request, string $contentType = self::contentTypes['sendAirtime'][0], \Dojah\RequestOptions $requestOptions = new \Dojah\RequestOptions())
    {
        ["request" => $request, "serializedBody" => $serializedBody] = $this->sendAirtimeRequest($purchase_airtime_request, $contentType);

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
                    return $this->sendAirtimeWithHttpInfo(
                        $purchase_airtime_request,
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
                    if ('\Dojah\Model\PurchaseAirtimeResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Dojah\Model\PurchaseAirtimeResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Dojah\Model\PurchaseAirtimeResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Dojah\Model\PurchaseAirtimeResponse';
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
                        '\Dojah\Model\PurchaseAirtimeResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation sendAirtimeAsync
     *
     * Purchase - Send Airtime
     *
     * @param  \Dojah\Model\PurchaseAirtimeRequest $purchase_airtime_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['sendAirtime'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendAirtimeAsync(

        $destination = SENTINEL_VALUE,
        $amount = SENTINEL_VALUE,

        string $contentType = self::contentTypes['sendAirtime'][0]

    )
    {
        $_body = [];
        $this->setRequestBodyProperty($_body, "destination", $destination);
        $this->setRequestBodyProperty($_body, "amount", $amount);
        $purchase_airtime_request = $_body;

        return $this->sendAirtimeAsyncWithHttpInfo($purchase_airtime_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation sendAirtimeAsyncWithHttpInfo
     *
     * Purchase - Send Airtime
     *
     * @param  \Dojah\Model\PurchaseAirtimeRequest $purchase_airtime_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['sendAirtime'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendAirtimeAsyncWithHttpInfo($purchase_airtime_request, string $contentType = self::contentTypes['sendAirtime'][0], \Dojah\RequestOptions $requestOptions = new \Dojah\RequestOptions())
    {
        $returnType = '\Dojah\Model\PurchaseAirtimeResponse';
        ["request" => $request, "serializedBody" => $serializedBody] = $this->sendAirtimeRequest($purchase_airtime_request, $contentType);

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
     * Create request for operation 'sendAirtime'
     *
     * @param  \Dojah\Model\PurchaseAirtimeRequest $purchase_airtime_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['sendAirtime'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function sendAirtimeRequest($purchase_airtime_request, string $contentType = self::contentTypes['sendAirtime'][0])
    {

        if ($purchase_airtime_request !== SENTINEL_VALUE) {
            if (!($purchase_airtime_request instanceof \Dojah\Model\PurchaseAirtimeRequest)) {
                if (!is_array($purchase_airtime_request))
                    throw new \InvalidArgumentException('"purchase_airtime_request" must be associative array or an instance of \Dojah\Model\PurchaseAirtimeRequest PurchaseApi.sendAirtime.');
                else
                    $purchase_airtime_request = new \Dojah\Model\PurchaseAirtimeRequest($purchase_airtime_request);
            }
        }
        // verify the required parameter 'purchase_airtime_request' is set
        if ($purchase_airtime_request === SENTINEL_VALUE || (is_array($purchase_airtime_request) && count($purchase_airtime_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter purchase_airtime_request when calling sendAirtime'
            );
        }


        $resourcePath = '/v1/purchase/airtime';
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
        if (isset($purchase_airtime_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($purchase_airtime_request));
            } else {
                $httpBody = $purchase_airtime_request;
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
