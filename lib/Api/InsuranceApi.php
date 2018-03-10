<?php
/**
 * InsuranceApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client\Eve
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * EVE Swagger Interface
 *
 * An OpenAPI for EVE Online
 *
 * OpenAPI spec version: 0.7.5
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Eve\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\Eve\ApiException;
use Swagger\Client\Eve\Configuration;
use Swagger\Client\Eve\HeaderSelector;
use Swagger\Client\Eve\ObjectSerializer;

/**
 * InsuranceApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client\Eve
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InsuranceApi
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
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getInsurancePrices
     *
     * List insurance levels
     *
     * @param  string $datasource The server name you would like data from (optional, default to tranquility)
     * @param  string $language Language to use in the response (optional, default to en-us)
     * @param  string $user_agent Client identifier, takes precedence over headers (optional)
     * @param  string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     *
     * @throws \Swagger\Client\Eve\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Eve\Model\GetInsurancePrices200Ok[]
     */
    public function getInsurancePrices($datasource = 'tranquility', $language = 'en-us', $user_agent = null, $x_user_agent = null)
    {
        list($response) = $this->getInsurancePricesWithHttpInfo($datasource, $language, $user_agent, $x_user_agent);
        return $response;
    }

    /**
     * Operation getInsurancePricesWithHttpInfo
     *
     * List insurance levels
     *
     * @param  string $datasource The server name you would like data from (optional, default to tranquility)
     * @param  string $language Language to use in the response (optional, default to en-us)
     * @param  string $user_agent Client identifier, takes precedence over headers (optional)
     * @param  string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     *
     * @throws \Swagger\Client\Eve\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Eve\Model\GetInsurancePrices200Ok[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getInsurancePricesWithHttpInfo($datasource = 'tranquility', $language = 'en-us', $user_agent = null, $x_user_agent = null)
    {
        $returnType = '\Swagger\Client\Eve\Model\GetInsurancePrices200Ok[]';
        $request = $this->getInsurancePricesRequest($datasource, $language, $user_agent, $x_user_agent);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
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
                        '\Swagger\Client\Eve\Model\GetInsurancePrices200Ok[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Eve\Model\InternalServerError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getInsurancePricesAsync
     *
     * List insurance levels
     *
     * @param  string $datasource The server name you would like data from (optional, default to tranquility)
     * @param  string $language Language to use in the response (optional, default to en-us)
     * @param  string $user_agent Client identifier, takes precedence over headers (optional)
     * @param  string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInsurancePricesAsync($datasource = 'tranquility', $language = 'en-us', $user_agent = null, $x_user_agent = null)
    {
        return $this->getInsurancePricesAsyncWithHttpInfo($datasource, $language, $user_agent, $x_user_agent)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getInsurancePricesAsyncWithHttpInfo
     *
     * List insurance levels
     *
     * @param  string $datasource The server name you would like data from (optional, default to tranquility)
     * @param  string $language Language to use in the response (optional, default to en-us)
     * @param  string $user_agent Client identifier, takes precedence over headers (optional)
     * @param  string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInsurancePricesAsyncWithHttpInfo($datasource = 'tranquility', $language = 'en-us', $user_agent = null, $x_user_agent = null)
    {
        $returnType = '\Swagger\Client\Eve\Model\GetInsurancePrices200Ok[]';
        $request = $this->getInsurancePricesRequest($datasource, $language, $user_agent, $x_user_agent);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getInsurancePrices'
     *
     * @param  string $datasource The server name you would like data from (optional, default to tranquility)
     * @param  string $language Language to use in the response (optional, default to en-us)
     * @param  string $user_agent Client identifier, takes precedence over headers (optional)
     * @param  string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getInsurancePricesRequest($datasource = 'tranquility', $language = 'en-us', $user_agent = null, $x_user_agent = null)
    {

        $resourcePath = '/v1/insurance/prices/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = ObjectSerializer::toQueryValue($datasource);
        }
        // query params
        if ($language !== null) {
            $queryParams['language'] = ObjectSerializer::toQueryValue($language);
        }
        // query params
        if ($user_agent !== null) {
            $queryParams['user_agent'] = ObjectSerializer::toQueryValue($user_agent);
        }
        // header params
        if ($x_user_agent !== null) {
            $headerParams['X-User-Agent'] = ObjectSerializer::toHeaderValue($x_user_agent);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
