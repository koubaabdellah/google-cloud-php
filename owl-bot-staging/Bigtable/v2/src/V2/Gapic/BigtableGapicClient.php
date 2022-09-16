<?php
/*
 * Copyright 2022 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/bigtable/v2/bigtable.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Bigtable\V2\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\Call;
use Google\ApiCore\CredentialsWrapper;

use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PathTemplate;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Bigtable\V2\CheckAndMutateRowRequest;
use Google\Cloud\Bigtable\V2\CheckAndMutateRowResponse;
use Google\Cloud\Bigtable\V2\MutateRowRequest;
use Google\Cloud\Bigtable\V2\MutateRowResponse;
use Google\Cloud\Bigtable\V2\MutateRowsRequest;
use Google\Cloud\Bigtable\V2\MutateRowsRequest\Entry;
use Google\Cloud\Bigtable\V2\MutateRowsResponse;
use Google\Cloud\Bigtable\V2\Mutation;
use Google\Cloud\Bigtable\V2\PingAndWarmRequest;
use Google\Cloud\Bigtable\V2\PingAndWarmResponse;
use Google\Cloud\Bigtable\V2\ReadModifyWriteRowRequest;
use Google\Cloud\Bigtable\V2\ReadModifyWriteRowResponse;
use Google\Cloud\Bigtable\V2\ReadModifyWriteRule;
use Google\Cloud\Bigtable\V2\ReadRowsRequest;
use Google\Cloud\Bigtable\V2\ReadRowsResponse;
use Google\Cloud\Bigtable\V2\RowFilter;
use Google\Cloud\Bigtable\V2\RowSet;
use Google\Cloud\Bigtable\V2\SampleRowKeysRequest;
use Google\Cloud\Bigtable\V2\SampleRowKeysResponse;

/**
 * Service Description: Service for reading from and writing to existing Bigtable tables.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $bigtableClient = new BigtableClient();
 * try {
 *     $formattedTableName = $bigtableClient->tableName('[PROJECT]', '[INSTANCE]', '[TABLE]');
 *     $rowKey = '';
 *     $response = $bigtableClient->checkAndMutateRow($formattedTableName, $rowKey);
 * } finally {
 *     $bigtableClient->close();
 * }
 * ```
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 */
class BigtableGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.bigtable.v2.Bigtable';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'bigtable.googleapis.com';

    /**
     * The default port of the service.
     */
    const DEFAULT_SERVICE_PORT = 443;

    /**
     * The name of the code generator, to be included in the agent header.
     */
    const CODEGEN_NAME = 'gapic';

    /**
     * The default scopes required by the service.
     */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/bigtable.data',
        'https://www.googleapis.com/auth/bigtable.data.readonly',
        'https://www.googleapis.com/auth/cloud-bigtable.data',
        'https://www.googleapis.com/auth/cloud-bigtable.data.readonly',
        'https://www.googleapis.com/auth/cloud-platform',
        'https://www.googleapis.com/auth/cloud-platform.read-only',
    ];

    private static $instanceNameTemplate;

    private static $tableNameTemplate;

    private static $pathTemplateMap;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'serviceAddress' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/bigtable_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/bigtable_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/bigtable_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/bigtable_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getInstanceNameTemplate()
    {
        if (self::$instanceNameTemplate == null) {
            self::$instanceNameTemplate = new PathTemplate('projects/{project}/instances/{instance}');
        }

        return self::$instanceNameTemplate;
    }

    private static function getTableNameTemplate()
    {
        if (self::$tableNameTemplate == null) {
            self::$tableNameTemplate = new PathTemplate('projects/{project}/instances/{instance}/tables/{table}');
        }

        return self::$tableNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (self::$pathTemplateMap == null) {
            self::$pathTemplateMap = [
                'instance' => self::getInstanceNameTemplate(),
                'table' => self::getTableNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a instance
     * resource.
     *
     * @param string $project
     * @param string $instance
     *
     * @return string The formatted instance resource.
     */
    public static function instanceName($project, $instance)
    {
        return self::getInstanceNameTemplate()->render([
            'project' => $project,
            'instance' => $instance,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a table
     * resource.
     *
     * @param string $project
     * @param string $instance
     * @param string $table
     *
     * @return string The formatted table resource.
     */
    public static function tableName($project, $instance, $table)
    {
        return self::getTableNameTemplate()->render([
            'project' => $project,
            'instance' => $instance,
            'table' => $table,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - instance: projects/{project}/instances/{instance}
     * - table: projects/{project}/instances/{instance}/tables/{table}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName($formattedName, $template = null)
    {
        $templateMap = self::getPathTemplateMap();
        if ($template) {
            if (!isset($templateMap[$template])) {
                throw new ValidationException("Template name $template does not exist");
            }

            return $templateMap[$template]->match($formattedName);
        }

        foreach ($templateMap as $templateName => $pathTemplate) {
            try {
                return $pathTemplate->match($formattedName);
            } catch (ValidationException $ex) {
                // Swallow the exception to continue trying other path templates
            }
        }

        throw new ValidationException("Input did not match any known format. Input: $formattedName");
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $serviceAddress
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'bigtable.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $serviceAddress setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
    }

    /**
     * Mutates a row atomically based on the output of a predicate Reader filter.
     *
     * Sample code:
     * ```
     * $bigtableClient = new BigtableClient();
     * try {
     *     $formattedTableName = $bigtableClient->tableName('[PROJECT]', '[INSTANCE]', '[TABLE]');
     *     $rowKey = '';
     *     $response = $bigtableClient->checkAndMutateRow($formattedTableName, $rowKey);
     * } finally {
     *     $bigtableClient->close();
     * }
     * ```
     *
     * @param string $tableName    Required. The unique name of the table to which the conditional mutation should be
     *                             applied.
     *                             Values are of the form
     *                             `projects/<project>/instances/<instance>/tables/<table>`.
     * @param string $rowKey       Required. The key of the row to which the conditional mutation should be applied.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type string $appProfileId
     *           This value specifies routing for replication. If not specified, the
     *           "default" application profile will be used.
     *     @type RowFilter $predicateFilter
     *           The filter to be applied to the contents of the specified row. Depending
     *           on whether or not any results are yielded, either `true_mutations` or
     *           `false_mutations` will be executed. If unset, checks that the row contains
     *           any values at all.
     *     @type Mutation[] $trueMutations
     *           Changes to be atomically applied to the specified row if `predicate_filter`
     *           yields at least one cell when applied to `row_key`. Entries are applied in
     *           order, meaning that earlier mutations can be masked by later ones.
     *           Must contain at least one entry if `false_mutations` is empty, and at most
     *           100000.
     *     @type Mutation[] $falseMutations
     *           Changes to be atomically applied to the specified row if `predicate_filter`
     *           does not yield any cells when applied to `row_key`. Entries are applied in
     *           order, meaning that earlier mutations can be masked by later ones.
     *           Must contain at least one entry if `true_mutations` is empty, and at most
     *           100000.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Bigtable\V2\CheckAndMutateRowResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function checkAndMutateRow($tableName, $rowKey, array $optionalArgs = [])
    {
        $request = new CheckAndMutateRowRequest();
        $requestParamHeaders = [];
        $request->setTableName($tableName);
        $request->setRowKey($rowKey);
        $tableNameMatches = [];
        if (preg_match('/^(?<table_name>projects\/[^\/]+\/instances\/[^\/]+\/tables\/[^\/]+)$/', $tableName, $tableNameMatches)) {
            $requestParamHeaders['table_name'] = $tableNameMatches['table_name'];
        }

        
        if (isset($optionalArgs['appProfileId'])) {
            $request->setAppProfileId($optionalArgs['appProfileId']);
            $requestParamHeaders['app_profile_id'] = $optionalArgs['app_profile_id'];
        }

        if (isset($optionalArgs['predicateFilter'])) {
            $request->setPredicateFilter($optionalArgs['predicateFilter']);
        }

        if (isset($optionalArgs['trueMutations'])) {
            $request->setTrueMutations($optionalArgs['trueMutations']);
        }

        if (isset($optionalArgs['falseMutations'])) {
            $request->setFalseMutations($optionalArgs['falseMutations']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('CheckAndMutateRow', CheckAndMutateRowResponse::class, $optionalArgs, $request)->wait();
    }

    /**
     * Mutates a row atomically. Cells already present in the row are left
     * unchanged unless explicitly changed by `mutation`.
     *
     * Sample code:
     * ```
     * $bigtableClient = new BigtableClient();
     * try {
     *     $formattedTableName = $bigtableClient->tableName('[PROJECT]', '[INSTANCE]', '[TABLE]');
     *     $rowKey = '';
     *     $mutations = [];
     *     $response = $bigtableClient->mutateRow($formattedTableName, $rowKey, $mutations);
     * } finally {
     *     $bigtableClient->close();
     * }
     * ```
     *
     * @param string     $tableName    Required. The unique name of the table to which the mutation should be applied.
     *                                 Values are of the form
     *                                 `projects/<project>/instances/<instance>/tables/<table>`.
     * @param string     $rowKey       Required. The key of the row to which the mutation should be applied.
     * @param Mutation[] $mutations    Required. Changes to be atomically applied to the specified row. Entries are applied
     *                                 in order, meaning that earlier mutations can be masked by later ones.
     *                                 Must contain at least one entry and at most 100000.
     * @param array      $optionalArgs {
     *     Optional.
     *
     *     @type string $appProfileId
     *           This value specifies routing for replication. If not specified, the
     *           "default" application profile will be used.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Bigtable\V2\MutateRowResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function mutateRow($tableName, $rowKey, $mutations, array $optionalArgs = [])
    {
        $request = new MutateRowRequest();
        $requestParamHeaders = [];
        $request->setTableName($tableName);
        $request->setRowKey($rowKey);
        $request->setMutations($mutations);
        $tableNameMatches = [];
        if (preg_match('/^(?<table_name>projects\/[^\/]+\/instances\/[^\/]+\/tables\/[^\/]+)$/', $tableName, $tableNameMatches)) {
            $requestParamHeaders['table_name'] = $tableNameMatches['table_name'];
        }

        
        if (isset($optionalArgs['appProfileId'])) {
            $request->setAppProfileId($optionalArgs['appProfileId']);
            $requestParamHeaders['app_profile_id'] = $optionalArgs['app_profile_id'];
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('MutateRow', MutateRowResponse::class, $optionalArgs, $request)->wait();
    }

    /**
     * Mutates multiple rows in a batch. Each individual row is mutated
     * atomically as in MutateRow, but the entire batch is not executed
     * atomically.
     *
     * Sample code:
     * ```
     * $bigtableClient = new BigtableClient();
     * try {
     *     $formattedTableName = $bigtableClient->tableName('[PROJECT]', '[INSTANCE]', '[TABLE]');
     *     $entries = [];
     *     // Read all responses until the stream is complete
     *     $stream = $bigtableClient->mutateRows($formattedTableName, $entries);
     *     foreach ($stream->readAll() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $bigtableClient->close();
     * }
     * ```
     *
     * @param string  $tableName    Required. The unique name of the table to which the mutations should be applied.
     * @param Entry[] $entries      Required. The row keys and corresponding mutations to be applied in bulk.
     *                              Each entry is applied as an atomic mutation, but the entries may be
     *                              applied in arbitrary order (even between entries for the same row).
     *                              At least one entry must be specified, and in total the entries can
     *                              contain at most 100000 mutations.
     * @param array   $optionalArgs {
     *     Optional.
     *
     *     @type string $appProfileId
     *           This value specifies routing for replication. If not specified, the
     *           "default" application profile will be used.
     *     @type int $timeoutMillis
     *           Timeout to use for this call.
     * }
     *
     * @return \Google\ApiCore\ServerStream
     *
     * @throws ApiException if the remote call fails
     */
    public function mutateRows($tableName, $entries, array $optionalArgs = [])
    {
        $request = new MutateRowsRequest();
        $requestParamHeaders = [];
        $request->setTableName($tableName);
        $request->setEntries($entries);
        $tableNameMatches = [];
        if (preg_match('/^(?<table_name>projects\/[^\/]+\/instances\/[^\/]+\/tables\/[^\/]+)$/', $tableName, $tableNameMatches)) {
            $requestParamHeaders['table_name'] = $tableNameMatches['table_name'];
        }

        
        if (isset($optionalArgs['appProfileId'])) {
            $request->setAppProfileId($optionalArgs['appProfileId']);
            $requestParamHeaders['app_profile_id'] = $optionalArgs['app_profile_id'];
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('MutateRows', MutateRowsResponse::class, $optionalArgs, $request, Call::SERVER_STREAMING_CALL);
    }

    /**
     * Warm up associated instance metadata for this connection.
     * This call is not required but may be useful for connection keep-alive.
     *
     * Sample code:
     * ```
     * $bigtableClient = new BigtableClient();
     * try {
     *     $formattedName = $bigtableClient->instanceName('[PROJECT]', '[INSTANCE]');
     *     $response = $bigtableClient->pingAndWarm($formattedName);
     * } finally {
     *     $bigtableClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The unique name of the instance to check permissions for as well as
     *                             respond. Values are of the form `projects/<project>/instances/<instance>`.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type string $appProfileId
     *           This value specifies routing for replication. If not specified, the
     *           "default" application profile will be used.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Bigtable\V2\PingAndWarmResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function pingAndWarm($name, array $optionalArgs = [])
    {
        $request = new PingAndWarmRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $nameMatches = [];
        if (preg_match('/^(?<name>projects\/[^\/]+\/instances\/[^\/]+)$/', $name, $nameMatches)) {
            $requestParamHeaders['name'] = $nameMatches['name'];
        }

        
        if (isset($optionalArgs['appProfileId'])) {
            $request->setAppProfileId($optionalArgs['appProfileId']);
            $requestParamHeaders['app_profile_id'] = $optionalArgs['app_profile_id'];
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('PingAndWarm', PingAndWarmResponse::class, $optionalArgs, $request)->wait();
    }

    /**
     * Modifies a row atomically on the server. The method reads the latest
     * existing timestamp and value from the specified columns and writes a new
     * entry based on pre-defined read/modify/write rules. The new value for the
     * timestamp is the greater of the existing timestamp or the current server
     * time. The method returns the new contents of all modified cells.
     *
     * Sample code:
     * ```
     * $bigtableClient = new BigtableClient();
     * try {
     *     $formattedTableName = $bigtableClient->tableName('[PROJECT]', '[INSTANCE]', '[TABLE]');
     *     $rowKey = '';
     *     $rules = [];
     *     $response = $bigtableClient->readModifyWriteRow($formattedTableName, $rowKey, $rules);
     * } finally {
     *     $bigtableClient->close();
     * }
     * ```
     *
     * @param string                $tableName    Required. The unique name of the table to which the read/modify/write rules should be
     *                                            applied.
     *                                            Values are of the form
     *                                            `projects/<project>/instances/<instance>/tables/<table>`.
     * @param string                $rowKey       Required. The key of the row to which the read/modify/write rules should be applied.
     * @param ReadModifyWriteRule[] $rules        Required. Rules specifying how the specified row's contents are to be transformed
     *                                            into writes. Entries are applied in order, meaning that earlier rules will
     *                                            affect the results of later ones.
     * @param array                 $optionalArgs {
     *     Optional.
     *
     *     @type string $appProfileId
     *           This value specifies routing for replication. If not specified, the
     *           "default" application profile will be used.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Bigtable\V2\ReadModifyWriteRowResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function readModifyWriteRow($tableName, $rowKey, $rules, array $optionalArgs = [])
    {
        $request = new ReadModifyWriteRowRequest();
        $requestParamHeaders = [];
        $request->setTableName($tableName);
        $request->setRowKey($rowKey);
        $request->setRules($rules);
        $tableNameMatches = [];
        if (preg_match('/^(?<table_name>projects\/[^\/]+\/instances\/[^\/]+\/tables\/[^\/]+)$/', $tableName, $tableNameMatches)) {
            $requestParamHeaders['table_name'] = $tableNameMatches['table_name'];
        }

        
        if (isset($optionalArgs['appProfileId'])) {
            $request->setAppProfileId($optionalArgs['appProfileId']);
            $requestParamHeaders['app_profile_id'] = $optionalArgs['app_profile_id'];
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('ReadModifyWriteRow', ReadModifyWriteRowResponse::class, $optionalArgs, $request)->wait();
    }

    /**
     * Streams back the contents of all requested rows in key order, optionally
     * applying the same Reader filter to each. Depending on their size,
     * rows and cells may be broken up across multiple responses, but
     * atomicity of each row will still be preserved. See the
     * ReadRowsResponse documentation for details.
     *
     * Sample code:
     * ```
     * $bigtableClient = new BigtableClient();
     * try {
     *     $formattedTableName = $bigtableClient->tableName('[PROJECT]', '[INSTANCE]', '[TABLE]');
     *     // Read all responses until the stream is complete
     *     $stream = $bigtableClient->readRows($formattedTableName);
     *     foreach ($stream->readAll() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $bigtableClient->close();
     * }
     * ```
     *
     * @param string $tableName    Required. The unique name of the table from which to read.
     *                             Values are of the form
     *                             `projects/<project>/instances/<instance>/tables/<table>`.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type string $appProfileId
     *           This value specifies routing for replication. If not specified, the
     *           "default" application profile will be used.
     *     @type RowSet $rows
     *           The row keys and/or ranges to read sequentially. If not specified, reads
     *           from all rows.
     *     @type RowFilter $filter
     *           The filter to apply to the contents of the specified row(s). If unset,
     *           reads the entirety of each row.
     *     @type int $rowsLimit
     *           The read will stop after committing to N rows' worth of results. The
     *           default (zero) is to return all results.
     *     @type int $timeoutMillis
     *           Timeout to use for this call.
     * }
     *
     * @return \Google\ApiCore\ServerStream
     *
     * @throws ApiException if the remote call fails
     */
    public function readRows($tableName, array $optionalArgs = [])
    {
        $request = new ReadRowsRequest();
        $requestParamHeaders = [];
        $request->setTableName($tableName);
        $tableNameMatches = [];
        if (preg_match('/^(?<table_name>projects\/[^\/]+\/instances\/[^\/]+\/tables\/[^\/]+)$/', $tableName, $tableNameMatches)) {
            $requestParamHeaders['table_name'] = $tableNameMatches['table_name'];
        }

        
        if (isset($optionalArgs['appProfileId'])) {
            $request->setAppProfileId($optionalArgs['appProfileId']);
            $requestParamHeaders['app_profile_id'] = $optionalArgs['app_profile_id'];
        }

        if (isset($optionalArgs['rows'])) {
            $request->setRows($optionalArgs['rows']);
        }

        if (isset($optionalArgs['filter'])) {
            $request->setFilter($optionalArgs['filter']);
        }

        if (isset($optionalArgs['rowsLimit'])) {
            $request->setRowsLimit($optionalArgs['rowsLimit']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('ReadRows', ReadRowsResponse::class, $optionalArgs, $request, Call::SERVER_STREAMING_CALL);
    }

    /**
     * Returns a sample of row keys in the table. The returned row keys will
     * delimit contiguous sections of the table of approximately equal size,
     * which can be used to break up the data for distributed tasks like
     * mapreduces.
     *
     * Sample code:
     * ```
     * $bigtableClient = new BigtableClient();
     * try {
     *     $formattedTableName = $bigtableClient->tableName('[PROJECT]', '[INSTANCE]', '[TABLE]');
     *     // Read all responses until the stream is complete
     *     $stream = $bigtableClient->sampleRowKeys($formattedTableName);
     *     foreach ($stream->readAll() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $bigtableClient->close();
     * }
     * ```
     *
     * @param string $tableName    Required. The unique name of the table from which to sample row keys.
     *                             Values are of the form
     *                             `projects/<project>/instances/<instance>/tables/<table>`.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type string $appProfileId
     *           This value specifies routing for replication. If not specified, the
     *           "default" application profile will be used.
     *     @type int $timeoutMillis
     *           Timeout to use for this call.
     * }
     *
     * @return \Google\ApiCore\ServerStream
     *
     * @throws ApiException if the remote call fails
     */
    public function sampleRowKeys($tableName, array $optionalArgs = [])
    {
        $request = new SampleRowKeysRequest();
        $requestParamHeaders = [];
        $request->setTableName($tableName);
        $tableNameMatches = [];
        if (preg_match('/^(?<table_name>projects\/[^\/]+\/instances\/[^\/]+\/tables\/[^\/]+)$/', $tableName, $tableNameMatches)) {
            $requestParamHeaders['table_name'] = $tableNameMatches['table_name'];
        }

        
        if (isset($optionalArgs['appProfileId'])) {
            $request->setAppProfileId($optionalArgs['appProfileId']);
            $requestParamHeaders['app_profile_id'] = $optionalArgs['app_profile_id'];
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('SampleRowKeys', SampleRowKeysResponse::class, $optionalArgs, $request, Call::SERVER_STREAMING_CALL);
    }
}
