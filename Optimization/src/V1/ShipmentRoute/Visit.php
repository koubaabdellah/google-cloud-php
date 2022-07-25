<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/optimization/v1/fleet_routing.proto

namespace Google\Cloud\Optimization\V1\ShipmentRoute;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A visit performed during a route. This visit corresponds to a pickup or a
 * delivery of a `Shipment`.
 *
 * Generated from protobuf message <code>google.cloud.optimization.v1.ShipmentRoute.Visit</code>
 */
class Visit extends \Google\Protobuf\Internal\Message
{
    /**
     * Index of the `shipments` field in the source [ShipmentModel][google.cloud.optimization.v1.ShipmentModel].
     *
     * Generated from protobuf field <code>int32 shipment_index = 1;</code>
     */
    private $shipment_index = 0;
    /**
     * If true the visit corresponds to a pickup of a `Shipment`. Otherwise, it
     * corresponds to a delivery.
     *
     * Generated from protobuf field <code>bool is_pickup = 2;</code>
     */
    private $is_pickup = false;
    /**
     * Index of `VisitRequest` in either the pickup or delivery field of the
     * `Shipment` (see `is_pickup`).
     *
     * Generated from protobuf field <code>int32 visit_request_index = 3;</code>
     */
    private $visit_request_index = 0;
    /**
     * Time at which the visit starts. Note that the vehicle may arrive earlier
     * than this at the visit location. Times are consistent with the
     * `ShipmentModel`.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 4;</code>
     */
    private $start_time = null;
    /**
     * Total visit load demand as the sum of the shipment and the visit request
     * `load_demands`. The values are negative if the visit is a delivery.
     * Demands are reported for the same types as the
     * [Transition.loads][google.cloud.optimization.v1.ShipmentRoute.Transition]
     * (see this field).
     *
     * Generated from protobuf field <code>map<string, .google.cloud.optimization.v1.Shipment.Load> load_demands = 11;</code>
     */
    private $load_demands;
    /**
     * Extra detour time due to the shipments visited on the route before the
     * visit and to the potential waiting time induced by time windows.
     * If the visit is a delivery, the detour is computed from the corresponding
     * pickup visit and is equal to:
     * ```
     * start_time(delivery) - start_time(pickup)
     * - (duration(pickup) + travel duration from the pickup location
     * to the delivery location).
     * ```
     * Otherwise, it is computed from the vehicle `start_location` and is equal
     * to:
     * ```
     * start_time - vehicle_start_time - travel duration from
     * the vehicle's `start_location` to the visit.
     * ```
     *
     * Generated from protobuf field <code>.google.protobuf.Duration detour = 6;</code>
     */
    private $detour = null;
    /**
     * Copy of the corresponding `Shipment.label`, if specified in the
     * `Shipment`.
     *
     * Generated from protobuf field <code>string shipment_label = 7;</code>
     */
    private $shipment_label = '';
    /**
     * Copy of the corresponding
     * [VisitRequest.label][google.cloud.optimization.v1.Shipment.VisitRequest.label],
     * if specified in the `VisitRequest`.
     *
     * Generated from protobuf field <code>string visit_label = 8;</code>
     */
    private $visit_label = '';
    /**
     * Deprecated: Use [ShipmentRoute.Transition.loads][] instead.
     * Vehicle loads upon arrival at the visit location, for each
     * type specified in [Vehicle.capacities][google.cloud.optimization.v1.Vehicle.capacities], `start_load_intervals`,
     * `end_load_intervals` or `demands`.
     * Exception: we omit loads for quantity types unconstrained by intervals
     * and that don't have any non-zero demand on the route.
     *
     * Generated from protobuf field <code>repeated .google.cloud.optimization.v1.CapacityQuantity arrival_loads = 9 [deprecated = true];</code>
     * @deprecated
     */
    private $arrival_loads;
    /**
     * Deprecated: Use [ShipmentRoute.Transition.delay_duration][] instead.
     *
     * Generated from protobuf field <code>.google.cloud.optimization.v1.ShipmentRoute.Delay delay_before_start = 10 [deprecated = true];</code>
     * @deprecated
     */
    protected $delay_before_start = null;
    /**
     * Deprecated: Use [Visit.load_demands][] instead.
     *
     * Generated from protobuf field <code>repeated .google.cloud.optimization.v1.CapacityQuantity demands = 5 [deprecated = true];</code>
     * @deprecated
     */
    private $demands;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $shipment_index
     *           Index of the `shipments` field in the source [ShipmentModel][google.cloud.optimization.v1.ShipmentModel].
     *     @type bool $is_pickup
     *           If true the visit corresponds to a pickup of a `Shipment`. Otherwise, it
     *           corresponds to a delivery.
     *     @type int $visit_request_index
     *           Index of `VisitRequest` in either the pickup or delivery field of the
     *           `Shipment` (see `is_pickup`).
     *     @type \Google\Protobuf\Timestamp $start_time
     *           Time at which the visit starts. Note that the vehicle may arrive earlier
     *           than this at the visit location. Times are consistent with the
     *           `ShipmentModel`.
     *     @type array|\Google\Protobuf\Internal\MapField $load_demands
     *           Total visit load demand as the sum of the shipment and the visit request
     *           `load_demands`. The values are negative if the visit is a delivery.
     *           Demands are reported for the same types as the
     *           [Transition.loads][google.cloud.optimization.v1.ShipmentRoute.Transition]
     *           (see this field).
     *     @type \Google\Protobuf\Duration $detour
     *           Extra detour time due to the shipments visited on the route before the
     *           visit and to the potential waiting time induced by time windows.
     *           If the visit is a delivery, the detour is computed from the corresponding
     *           pickup visit and is equal to:
     *           ```
     *           start_time(delivery) - start_time(pickup)
     *           - (duration(pickup) + travel duration from the pickup location
     *           to the delivery location).
     *           ```
     *           Otherwise, it is computed from the vehicle `start_location` and is equal
     *           to:
     *           ```
     *           start_time - vehicle_start_time - travel duration from
     *           the vehicle's `start_location` to the visit.
     *           ```
     *     @type string $shipment_label
     *           Copy of the corresponding `Shipment.label`, if specified in the
     *           `Shipment`.
     *     @type string $visit_label
     *           Copy of the corresponding
     *           [VisitRequest.label][google.cloud.optimization.v1.Shipment.VisitRequest.label],
     *           if specified in the `VisitRequest`.
     *     @type array<\Google\Cloud\Optimization\V1\CapacityQuantity>|\Google\Protobuf\Internal\RepeatedField $arrival_loads
     *           Deprecated: Use [ShipmentRoute.Transition.loads][] instead.
     *           Vehicle loads upon arrival at the visit location, for each
     *           type specified in [Vehicle.capacities][google.cloud.optimization.v1.Vehicle.capacities], `start_load_intervals`,
     *           `end_load_intervals` or `demands`.
     *           Exception: we omit loads for quantity types unconstrained by intervals
     *           and that don't have any non-zero demand on the route.
     *     @type \Google\Cloud\Optimization\V1\ShipmentRoute\Delay $delay_before_start
     *           Deprecated: Use [ShipmentRoute.Transition.delay_duration][] instead.
     *     @type array<\Google\Cloud\Optimization\V1\CapacityQuantity>|\Google\Protobuf\Internal\RepeatedField $demands
     *           Deprecated: Use [Visit.load_demands][] instead.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Optimization\V1\FleetRouting::initOnce();
        parent::__construct($data);
    }

    /**
     * Index of the `shipments` field in the source [ShipmentModel][google.cloud.optimization.v1.ShipmentModel].
     *
     * Generated from protobuf field <code>int32 shipment_index = 1;</code>
     * @return int
     */
    public function getShipmentIndex()
    {
        return $this->shipment_index;
    }

    /**
     * Index of the `shipments` field in the source [ShipmentModel][google.cloud.optimization.v1.ShipmentModel].
     *
     * Generated from protobuf field <code>int32 shipment_index = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setShipmentIndex($var)
    {
        GPBUtil::checkInt32($var);
        $this->shipment_index = $var;

        return $this;
    }

    /**
     * If true the visit corresponds to a pickup of a `Shipment`. Otherwise, it
     * corresponds to a delivery.
     *
     * Generated from protobuf field <code>bool is_pickup = 2;</code>
     * @return bool
     */
    public function getIsPickup()
    {
        return $this->is_pickup;
    }

    /**
     * If true the visit corresponds to a pickup of a `Shipment`. Otherwise, it
     * corresponds to a delivery.
     *
     * Generated from protobuf field <code>bool is_pickup = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsPickup($var)
    {
        GPBUtil::checkBool($var);
        $this->is_pickup = $var;

        return $this;
    }

    /**
     * Index of `VisitRequest` in either the pickup or delivery field of the
     * `Shipment` (see `is_pickup`).
     *
     * Generated from protobuf field <code>int32 visit_request_index = 3;</code>
     * @return int
     */
    public function getVisitRequestIndex()
    {
        return $this->visit_request_index;
    }

    /**
     * Index of `VisitRequest` in either the pickup or delivery field of the
     * `Shipment` (see `is_pickup`).
     *
     * Generated from protobuf field <code>int32 visit_request_index = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setVisitRequestIndex($var)
    {
        GPBUtil::checkInt32($var);
        $this->visit_request_index = $var;

        return $this;
    }

    /**
     * Time at which the visit starts. Note that the vehicle may arrive earlier
     * than this at the visit location. Times are consistent with the
     * `ShipmentModel`.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * Time at which the visit starts. Note that the vehicle may arrive earlier
     * than this at the visit location. Times are consistent with the
     * `ShipmentModel`.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * Total visit load demand as the sum of the shipment and the visit request
     * `load_demands`. The values are negative if the visit is a delivery.
     * Demands are reported for the same types as the
     * [Transition.loads][google.cloud.optimization.v1.ShipmentRoute.Transition]
     * (see this field).
     *
     * Generated from protobuf field <code>map<string, .google.cloud.optimization.v1.Shipment.Load> load_demands = 11;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLoadDemands()
    {
        return $this->load_demands;
    }

    /**
     * Total visit load demand as the sum of the shipment and the visit request
     * `load_demands`. The values are negative if the visit is a delivery.
     * Demands are reported for the same types as the
     * [Transition.loads][google.cloud.optimization.v1.ShipmentRoute.Transition]
     * (see this field).
     *
     * Generated from protobuf field <code>map<string, .google.cloud.optimization.v1.Shipment.Load> load_demands = 11;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLoadDemands($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Optimization\V1\Shipment\Load::class);
        $this->load_demands = $arr;

        return $this;
    }

    /**
     * Extra detour time due to the shipments visited on the route before the
     * visit and to the potential waiting time induced by time windows.
     * If the visit is a delivery, the detour is computed from the corresponding
     * pickup visit and is equal to:
     * ```
     * start_time(delivery) - start_time(pickup)
     * - (duration(pickup) + travel duration from the pickup location
     * to the delivery location).
     * ```
     * Otherwise, it is computed from the vehicle `start_location` and is equal
     * to:
     * ```
     * start_time - vehicle_start_time - travel duration from
     * the vehicle's `start_location` to the visit.
     * ```
     *
     * Generated from protobuf field <code>.google.protobuf.Duration detour = 6;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getDetour()
    {
        return $this->detour;
    }

    public function hasDetour()
    {
        return isset($this->detour);
    }

    public function clearDetour()
    {
        unset($this->detour);
    }

    /**
     * Extra detour time due to the shipments visited on the route before the
     * visit and to the potential waiting time induced by time windows.
     * If the visit is a delivery, the detour is computed from the corresponding
     * pickup visit and is equal to:
     * ```
     * start_time(delivery) - start_time(pickup)
     * - (duration(pickup) + travel duration from the pickup location
     * to the delivery location).
     * ```
     * Otherwise, it is computed from the vehicle `start_location` and is equal
     * to:
     * ```
     * start_time - vehicle_start_time - travel duration from
     * the vehicle's `start_location` to the visit.
     * ```
     *
     * Generated from protobuf field <code>.google.protobuf.Duration detour = 6;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setDetour($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->detour = $var;

        return $this;
    }

    /**
     * Copy of the corresponding `Shipment.label`, if specified in the
     * `Shipment`.
     *
     * Generated from protobuf field <code>string shipment_label = 7;</code>
     * @return string
     */
    public function getShipmentLabel()
    {
        return $this->shipment_label;
    }

    /**
     * Copy of the corresponding `Shipment.label`, if specified in the
     * `Shipment`.
     *
     * Generated from protobuf field <code>string shipment_label = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setShipmentLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->shipment_label = $var;

        return $this;
    }

    /**
     * Copy of the corresponding
     * [VisitRequest.label][google.cloud.optimization.v1.Shipment.VisitRequest.label],
     * if specified in the `VisitRequest`.
     *
     * Generated from protobuf field <code>string visit_label = 8;</code>
     * @return string
     */
    public function getVisitLabel()
    {
        return $this->visit_label;
    }

    /**
     * Copy of the corresponding
     * [VisitRequest.label][google.cloud.optimization.v1.Shipment.VisitRequest.label],
     * if specified in the `VisitRequest`.
     *
     * Generated from protobuf field <code>string visit_label = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setVisitLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->visit_label = $var;

        return $this;
    }

    /**
     * Deprecated: Use [ShipmentRoute.Transition.loads][] instead.
     * Vehicle loads upon arrival at the visit location, for each
     * type specified in [Vehicle.capacities][google.cloud.optimization.v1.Vehicle.capacities], `start_load_intervals`,
     * `end_load_intervals` or `demands`.
     * Exception: we omit loads for quantity types unconstrained by intervals
     * and that don't have any non-zero demand on the route.
     *
     * Generated from protobuf field <code>repeated .google.cloud.optimization.v1.CapacityQuantity arrival_loads = 9 [deprecated = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     * @deprecated
     */
    public function getArrivalLoads()
    {
        @trigger_error('arrival_loads is deprecated.', E_USER_DEPRECATED);
        return $this->arrival_loads;
    }

    /**
     * Deprecated: Use [ShipmentRoute.Transition.loads][] instead.
     * Vehicle loads upon arrival at the visit location, for each
     * type specified in [Vehicle.capacities][google.cloud.optimization.v1.Vehicle.capacities], `start_load_intervals`,
     * `end_load_intervals` or `demands`.
     * Exception: we omit loads for quantity types unconstrained by intervals
     * and that don't have any non-zero demand on the route.
     *
     * Generated from protobuf field <code>repeated .google.cloud.optimization.v1.CapacityQuantity arrival_loads = 9 [deprecated = true];</code>
     * @param array<\Google\Cloud\Optimization\V1\CapacityQuantity>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     * @deprecated
     */
    public function setArrivalLoads($var)
    {
        @trigger_error('arrival_loads is deprecated.', E_USER_DEPRECATED);
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Optimization\V1\CapacityQuantity::class);
        $this->arrival_loads = $arr;

        return $this;
    }

    /**
     * Deprecated: Use [ShipmentRoute.Transition.delay_duration][] instead.
     *
     * Generated from protobuf field <code>.google.cloud.optimization.v1.ShipmentRoute.Delay delay_before_start = 10 [deprecated = true];</code>
     * @return \Google\Cloud\Optimization\V1\ShipmentRoute\Delay|null
     * @deprecated
     */
    public function getDelayBeforeStart()
    {
        @trigger_error('delay_before_start is deprecated.', E_USER_DEPRECATED);
        return $this->delay_before_start;
    }

    public function hasDelayBeforeStart()
    {
        @trigger_error('delay_before_start is deprecated.', E_USER_DEPRECATED);
        return isset($this->delay_before_start);
    }

    public function clearDelayBeforeStart()
    {
        @trigger_error('delay_before_start is deprecated.', E_USER_DEPRECATED);
        unset($this->delay_before_start);
    }

    /**
     * Deprecated: Use [ShipmentRoute.Transition.delay_duration][] instead.
     *
     * Generated from protobuf field <code>.google.cloud.optimization.v1.ShipmentRoute.Delay delay_before_start = 10 [deprecated = true];</code>
     * @param \Google\Cloud\Optimization\V1\ShipmentRoute\Delay $var
     * @return $this
     * @deprecated
     */
    public function setDelayBeforeStart($var)
    {
        @trigger_error('delay_before_start is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkMessage($var, \Google\Cloud\Optimization\V1\ShipmentRoute\Delay::class);
        $this->delay_before_start = $var;

        return $this;
    }

    /**
     * Deprecated: Use [Visit.load_demands][] instead.
     *
     * Generated from protobuf field <code>repeated .google.cloud.optimization.v1.CapacityQuantity demands = 5 [deprecated = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     * @deprecated
     */
    public function getDemands()
    {
        @trigger_error('demands is deprecated.', E_USER_DEPRECATED);
        return $this->demands;
    }

    /**
     * Deprecated: Use [Visit.load_demands][] instead.
     *
     * Generated from protobuf field <code>repeated .google.cloud.optimization.v1.CapacityQuantity demands = 5 [deprecated = true];</code>
     * @param array<\Google\Cloud\Optimization\V1\CapacityQuantity>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     * @deprecated
     */
    public function setDemands($var)
    {
        @trigger_error('demands is deprecated.', E_USER_DEPRECATED);
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Optimization\V1\CapacityQuantity::class);
        $this->demands = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Visit::class, \Google\Cloud\Optimization\V1\ShipmentRoute_Visit::class);

