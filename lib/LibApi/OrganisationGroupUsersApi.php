<?php
/**
 * OrganisationGroupUsersApi
 * PHP version 5
 *
 * @category Class
 * @package  ChronoSheetsClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ChronoSheets API
 *
 * ChronoSheets is a flexible timesheet solution for small to medium businesses, it is free for small teams of up to 5 and there are iOS and Android apps available.  Use the ChronoSheets API to create your own custom integrations.
 *
 * OpenAPI spec version: v1
 * Contact: lachlan@chronosheets.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ChronoSheetsClient\ChronoSheetsClientLibApi;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use ChronoSheetsClient\ApiException;
use ChronoSheetsClient\Configuration;
use ChronoSheetsClient\HeaderSelector;
use ChronoSheetsClient\ObjectSerializer;

/**
 * OrganisationGroupUsersApi Class Doc Comment
 *
 * @category Class
 * @package  ChronoSheetsClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrganisationGroupUsersApi
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
     * Operation organisationGroupUsersGetOrganisationGroupUsers
     *
     * Get a collection of organisation group users that belong to an organisation group
     *
     * @param  int $orgGroupId orgGroupId (required)
     * @param  string $xChronosheetsAuth The ChronoSheets Auth Token (required)
     *
     * @throws \ChronoSheetsClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseListUserForManagement
     */
    public function organisationGroupUsersGetOrganisationGroupUsers($orgGroupId, $xChronosheetsAuth)
    {
        list($response) = $this->organisationGroupUsersGetOrganisationGroupUsersWithHttpInfo($orgGroupId, $xChronosheetsAuth);
        return $response;
    }

    /**
     * Operation organisationGroupUsersGetOrganisationGroupUsersWithHttpInfo
     *
     * Get a collection of organisation group users that belong to an organisation group
     *
     * @param  int $orgGroupId (required)
     * @param  string $xChronosheetsAuth The ChronoSheets Auth Token (required)
     *
     * @throws \ChronoSheetsClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseListUserForManagement, HTTP status code, HTTP response headers (array of strings)
     */
    public function organisationGroupUsersGetOrganisationGroupUsersWithHttpInfo($orgGroupId, $xChronosheetsAuth)
    {
        $returnType = '\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseListUserForManagement';
        $request = $this->organisationGroupUsersGetOrganisationGroupUsersRequest($orgGroupId, $xChronosheetsAuth);

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
                        '\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseListUserForManagement',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation organisationGroupUsersGetOrganisationGroupUsersAsync
     *
     * Get a collection of organisation group users that belong to an organisation group
     *
     * @param  int $orgGroupId (required)
     * @param  string $xChronosheetsAuth The ChronoSheets Auth Token (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function organisationGroupUsersGetOrganisationGroupUsersAsync($orgGroupId, $xChronosheetsAuth)
    {
        return $this->organisationGroupUsersGetOrganisationGroupUsersAsyncWithHttpInfo($orgGroupId, $xChronosheetsAuth)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation organisationGroupUsersGetOrganisationGroupUsersAsyncWithHttpInfo
     *
     * Get a collection of organisation group users that belong to an organisation group
     *
     * @param  int $orgGroupId (required)
     * @param  string $xChronosheetsAuth The ChronoSheets Auth Token (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function organisationGroupUsersGetOrganisationGroupUsersAsyncWithHttpInfo($orgGroupId, $xChronosheetsAuth)
    {
        $returnType = '\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseListUserForManagement';
        $request = $this->organisationGroupUsersGetOrganisationGroupUsersRequest($orgGroupId, $xChronosheetsAuth);

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
     * Create request for operation 'organisationGroupUsersGetOrganisationGroupUsers'
     *
     * @param  int $orgGroupId (required)
     * @param  string $xChronosheetsAuth The ChronoSheets Auth Token (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function organisationGroupUsersGetOrganisationGroupUsersRequest($orgGroupId, $xChronosheetsAuth)
    {
        // verify the required parameter 'orgGroupId' is set
        if ($orgGroupId === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $orgGroupId when calling organisationGroupUsersGetOrganisationGroupUsers'
            );
        }
        // verify the required parameter 'xChronosheetsAuth' is set
        if ($xChronosheetsAuth === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $xChronosheetsAuth when calling organisationGroupUsersGetOrganisationGroupUsers'
            );
        }

        $resourcePath = '/api/OrganisationGroupUsers/GetOrganisationGroupUsers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($orgGroupId !== null) {
            $queryParams['orgGroupId'] = ObjectSerializer::toQueryValue($orgGroupId);
        }
        // header params
        if ($xChronosheetsAuth !== null) {
            $headerParams['x-chronosheets-auth'] = ObjectSerializer::toHeaderValue($xChronosheetsAuth);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'text/json', 'application/xml', 'text/xml', 'multipart/form-data']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/json', 'application/xml', 'text/xml', 'multipart/form-data'],
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
     * Operation organisationGroupUsersUpdateOrganisationGroupUsers
     *
     * Set the users who belong to an organisation group
     *
     * @param  \ChronoSheetsClient\ChronoSheetsClientLibModel\CSSetOrganisationGroupUsersRequest $request  (required)
     * @param  string $xChronosheetsAuth The ChronoSheets Auth Token (required)
     *
     * @throws \ChronoSheetsClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseBoolean
     */
    public function organisationGroupUsersUpdateOrganisationGroupUsers($request, $xChronosheetsAuth)
    {
        list($response) = $this->organisationGroupUsersUpdateOrganisationGroupUsersWithHttpInfo($request, $xChronosheetsAuth);
        return $response;
    }

    /**
     * Operation organisationGroupUsersUpdateOrganisationGroupUsersWithHttpInfo
     *
     * Set the users who belong to an organisation group
     *
     * @param  \ChronoSheetsClient\ChronoSheetsClientLibModel\CSSetOrganisationGroupUsersRequest $request  (required)
     * @param  string $xChronosheetsAuth The ChronoSheets Auth Token (required)
     *
     * @throws \ChronoSheetsClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseBoolean, HTTP status code, HTTP response headers (array of strings)
     */
    public function organisationGroupUsersUpdateOrganisationGroupUsersWithHttpInfo($request, $xChronosheetsAuth)
    {
        $returnType = '\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseBoolean';
        $request = $this->organisationGroupUsersUpdateOrganisationGroupUsersRequest($request, $xChronosheetsAuth);

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
                        '\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseBoolean',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation organisationGroupUsersUpdateOrganisationGroupUsersAsync
     *
     * Set the users who belong to an organisation group
     *
     * @param  \ChronoSheetsClient\ChronoSheetsClientLibModel\CSSetOrganisationGroupUsersRequest $request  (required)
     * @param  string $xChronosheetsAuth The ChronoSheets Auth Token (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function organisationGroupUsersUpdateOrganisationGroupUsersAsync($request, $xChronosheetsAuth)
    {
        return $this->organisationGroupUsersUpdateOrganisationGroupUsersAsyncWithHttpInfo($request, $xChronosheetsAuth)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation organisationGroupUsersUpdateOrganisationGroupUsersAsyncWithHttpInfo
     *
     * Set the users who belong to an organisation group
     *
     * @param  \ChronoSheetsClient\ChronoSheetsClientLibModel\CSSetOrganisationGroupUsersRequest $request  (required)
     * @param  string $xChronosheetsAuth The ChronoSheets Auth Token (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function organisationGroupUsersUpdateOrganisationGroupUsersAsyncWithHttpInfo($request, $xChronosheetsAuth)
    {
        $returnType = '\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseBoolean';
        $request = $this->organisationGroupUsersUpdateOrganisationGroupUsersRequest($request, $xChronosheetsAuth);

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
     * Create request for operation 'organisationGroupUsersUpdateOrganisationGroupUsers'
     *
     * @param  \ChronoSheetsClient\ChronoSheetsClientLibModel\CSSetOrganisationGroupUsersRequest $request  (required)
     * @param  string $xChronosheetsAuth The ChronoSheets Auth Token (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function organisationGroupUsersUpdateOrganisationGroupUsersRequest($request, $xChronosheetsAuth)
    {
        // verify the required parameter 'request' is set
        if ($request === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $request when calling organisationGroupUsersUpdateOrganisationGroupUsers'
            );
        }
        // verify the required parameter 'xChronosheetsAuth' is set
        if ($xChronosheetsAuth === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $xChronosheetsAuth when calling organisationGroupUsersUpdateOrganisationGroupUsers'
            );
        }

        $resourcePath = '/api/OrganisationGroupUsers/UpdateOrganisationGroupUsers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($xChronosheetsAuth !== null) {
            $headerParams['x-chronosheets-auth'] = ObjectSerializer::toHeaderValue($xChronosheetsAuth);
        }


        // body params
        $_tempBody = null;
        if (isset($request)) {
            $_tempBody = $request;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'text/json', 'application/xml', 'text/xml', 'multipart/form-data']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/json', 'application/xml', 'text/xml', 'multipart/form-data'],
                ['application/json', 'text/json', 'application/xml', 'text/xml', 'application/x-www-form-urlencoded', 'multipart/form-data']
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
            'POST',
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
