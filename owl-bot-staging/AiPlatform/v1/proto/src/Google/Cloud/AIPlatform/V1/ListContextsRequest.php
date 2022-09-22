<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/metadata_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [MetadataService.ListContexts][google.cloud.aiplatform.v1.MetadataService.ListContexts]
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ListContextsRequest</code>
 */
class ListContextsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The MetadataStore whose Contexts should be listed.
     * Format:
     * `projects/{project}/locations/{location}/metadataStores/{metadatastore}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * The maximum number of Contexts to return. The service may return fewer.
     * Must be in range 1-1000, inclusive. Defaults to 100.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    protected $page_size = 0;
    /**
     * A page token, received from a previous [MetadataService.ListContexts][google.cloud.aiplatform.v1.MetadataService.ListContexts]
     * call. Provide this to retrieve the subsequent page.
     * When paginating, all other provided parameters must match the call that
     * provided the page token. (Otherwise the request will fail with
     * INVALID_ARGUMENT error.)
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    protected $page_token = '';
    /**
     * Filter specifying the boolean condition for the Contexts to satisfy in
     * order to be part of the result set.
     * The syntax to define filter query is based on https://google.aip.dev/160.
     * Following are the supported set of filters:
     * *  **Attribute filtering**:
     *    For example: `display_name = "test"`.
     *    Supported fields include: `name`, `display_name`, `schema_title`,
     *    `create_time`, and `update_time`.
     *    Time fields, such as `create_time` and `update_time`, require values
     *    specified in RFC-3339 format.
     *    For example: `create_time = "2020-11-19T11:30:00-04:00"`.
     * *  **Metadata field**:
     *    To filter on metadata fields use traversal operation as follows:
     *    `metadata.<field_name>.<type_value>`.
     *    For example: `metadata.field_1.number_value = 10.0`.
     * *  **Parent Child filtering**:
     *    To filter Contexts based on parent-child relationship use the HAS
     *    operator as follows:
     *    ```
     *    parent_contexts:
     *    "projects/<project_number>/locations/<location>/metadataStores/<metadatastore_name>/contexts/<context_id>"
     *    child_contexts:
     *    "projects/<project_number>/locations/<location>/metadataStores/<metadatastore_name>/contexts/<context_id>"
     *    ```
     * Each of the above supported filters can be combined together using
     * logical operators (`AND` & `OR`).
     * For example: `display_name = "test" AND metadata.field1.bool_value = true`.
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     */
    protected $filter = '';
    /**
     * How the list of messages is ordered. Specify the values to order by and an
     * ordering operation. The default sorting order is ascending. To specify
     * descending order for a field, users append a " desc" suffix; for example:
     * "foo desc, bar".
     * Subfields are specified with a `.` character, such as foo.bar.
     * see https://google.aip.dev/132#ordering for more details.
     *
     * Generated from protobuf field <code>string order_by = 5;</code>
     */
    protected $order_by = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The MetadataStore whose Contexts should be listed.
     *           Format:
     *           `projects/{project}/locations/{location}/metadataStores/{metadatastore}`
     *     @type int $page_size
     *           The maximum number of Contexts to return. The service may return fewer.
     *           Must be in range 1-1000, inclusive. Defaults to 100.
     *     @type string $page_token
     *           A page token, received from a previous [MetadataService.ListContexts][google.cloud.aiplatform.v1.MetadataService.ListContexts]
     *           call. Provide this to retrieve the subsequent page.
     *           When paginating, all other provided parameters must match the call that
     *           provided the page token. (Otherwise the request will fail with
     *           INVALID_ARGUMENT error.)
     *     @type string $filter
     *           Filter specifying the boolean condition for the Contexts to satisfy in
     *           order to be part of the result set.
     *           The syntax to define filter query is based on https://google.aip.dev/160.
     *           Following are the supported set of filters:
     *           *  **Attribute filtering**:
     *              For example: `display_name = "test"`.
     *              Supported fields include: `name`, `display_name`, `schema_title`,
     *              `create_time`, and `update_time`.
     *              Time fields, such as `create_time` and `update_time`, require values
     *              specified in RFC-3339 format.
     *              For example: `create_time = "2020-11-19T11:30:00-04:00"`.
     *           *  **Metadata field**:
     *              To filter on metadata fields use traversal operation as follows:
     *              `metadata.<field_name>.<type_value>`.
     *              For example: `metadata.field_1.number_value = 10.0`.
     *           *  **Parent Child filtering**:
     *              To filter Contexts based on parent-child relationship use the HAS
     *              operator as follows:
     *              ```
     *              parent_contexts:
     *              "projects/<project_number>/locations/<location>/metadataStores/<metadatastore_name>/contexts/<context_id>"
     *              child_contexts:
     *              "projects/<project_number>/locations/<location>/metadataStores/<metadatastore_name>/contexts/<context_id>"
     *              ```
     *           Each of the above supported filters can be combined together using
     *           logical operators (`AND` & `OR`).
     *           For example: `display_name = "test" AND metadata.field1.bool_value = true`.
     *     @type string $order_by
     *           How the list of messages is ordered. Specify the values to order by and an
     *           ordering operation. The default sorting order is ascending. To specify
     *           descending order for a field, users append a " desc" suffix; for example:
     *           "foo desc, bar".
     *           Subfields are specified with a `.` character, such as foo.bar.
     *           see https://google.aip.dev/132#ordering for more details.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\MetadataService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The MetadataStore whose Contexts should be listed.
     * Format:
     * `projects/{project}/locations/{location}/metadataStores/{metadatastore}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The MetadataStore whose Contexts should be listed.
     * Format:
     * `projects/{project}/locations/{location}/metadataStores/{metadatastore}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * The maximum number of Contexts to return. The service may return fewer.
     * Must be in range 1-1000, inclusive. Defaults to 100.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of Contexts to return. The service may return fewer.
     * Must be in range 1-1000, inclusive. Defaults to 100.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * A page token, received from a previous [MetadataService.ListContexts][google.cloud.aiplatform.v1.MetadataService.ListContexts]
     * call. Provide this to retrieve the subsequent page.
     * When paginating, all other provided parameters must match the call that
     * provided the page token. (Otherwise the request will fail with
     * INVALID_ARGUMENT error.)
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * A page token, received from a previous [MetadataService.ListContexts][google.cloud.aiplatform.v1.MetadataService.ListContexts]
     * call. Provide this to retrieve the subsequent page.
     * When paginating, all other provided parameters must match the call that
     * provided the page token. (Otherwise the request will fail with
     * INVALID_ARGUMENT error.)
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Filter specifying the boolean condition for the Contexts to satisfy in
     * order to be part of the result set.
     * The syntax to define filter query is based on https://google.aip.dev/160.
     * Following are the supported set of filters:
     * *  **Attribute filtering**:
     *    For example: `display_name = "test"`.
     *    Supported fields include: `name`, `display_name`, `schema_title`,
     *    `create_time`, and `update_time`.
     *    Time fields, such as `create_time` and `update_time`, require values
     *    specified in RFC-3339 format.
     *    For example: `create_time = "2020-11-19T11:30:00-04:00"`.
     * *  **Metadata field**:
     *    To filter on metadata fields use traversal operation as follows:
     *    `metadata.<field_name>.<type_value>`.
     *    For example: `metadata.field_1.number_value = 10.0`.
     * *  **Parent Child filtering**:
     *    To filter Contexts based on parent-child relationship use the HAS
     *    operator as follows:
     *    ```
     *    parent_contexts:
     *    "projects/<project_number>/locations/<location>/metadataStores/<metadatastore_name>/contexts/<context_id>"
     *    child_contexts:
     *    "projects/<project_number>/locations/<location>/metadataStores/<metadatastore_name>/contexts/<context_id>"
     *    ```
     * Each of the above supported filters can be combined together using
     * logical operators (`AND` & `OR`).
     * For example: `display_name = "test" AND metadata.field1.bool_value = true`.
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Filter specifying the boolean condition for the Contexts to satisfy in
     * order to be part of the result set.
     * The syntax to define filter query is based on https://google.aip.dev/160.
     * Following are the supported set of filters:
     * *  **Attribute filtering**:
     *    For example: `display_name = "test"`.
     *    Supported fields include: `name`, `display_name`, `schema_title`,
     *    `create_time`, and `update_time`.
     *    Time fields, such as `create_time` and `update_time`, require values
     *    specified in RFC-3339 format.
     *    For example: `create_time = "2020-11-19T11:30:00-04:00"`.
     * *  **Metadata field**:
     *    To filter on metadata fields use traversal operation as follows:
     *    `metadata.<field_name>.<type_value>`.
     *    For example: `metadata.field_1.number_value = 10.0`.
     * *  **Parent Child filtering**:
     *    To filter Contexts based on parent-child relationship use the HAS
     *    operator as follows:
     *    ```
     *    parent_contexts:
     *    "projects/<project_number>/locations/<location>/metadataStores/<metadatastore_name>/contexts/<context_id>"
     *    child_contexts:
     *    "projects/<project_number>/locations/<location>/metadataStores/<metadatastore_name>/contexts/<context_id>"
     *    ```
     * Each of the above supported filters can be combined together using
     * logical operators (`AND` & `OR`).
     * For example: `display_name = "test" AND metadata.field1.bool_value = true`.
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * How the list of messages is ordered. Specify the values to order by and an
     * ordering operation. The default sorting order is ascending. To specify
     * descending order for a field, users append a " desc" suffix; for example:
     * "foo desc, bar".
     * Subfields are specified with a `.` character, such as foo.bar.
     * see https://google.aip.dev/132#ordering for more details.
     *
     * Generated from protobuf field <code>string order_by = 5;</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * How the list of messages is ordered. Specify the values to order by and an
     * ordering operation. The default sorting order is ascending. To specify
     * descending order for a field, users append a " desc" suffix; for example:
     * "foo desc, bar".
     * Subfields are specified with a `.` character, such as foo.bar.
     * see https://google.aip.dev/132#ordering for more details.
     *
     * Generated from protobuf field <code>string order_by = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setOrderBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_by = $var;

        return $this;
    }

}

