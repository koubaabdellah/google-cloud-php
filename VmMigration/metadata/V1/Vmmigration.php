<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmmigration/v1/vmmigration.proto

namespace GPBMetadata\Google\Cloud\Vmmigration\V1;

class Vmmigration
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\ErrorDetails::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
��
-google/cloud/vmmigration/v1/vmmigration.protogoogle.cloud.vmmigration.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto#google/longrunning/operations.protogoogle/protobuf/duration.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.protogoogle/rpc/error_details.protogoogle/rpc/status.proto"\\
ReplicationCycle.

start_time (2.google.protobuf.Timestamp
progress_percent ("E
ReplicationSync2
last_sync_time (2.google.protobuf.Timestamp"�

MigratingVmb
compute_engine_target_defaults (28.google.cloud.vmmigration.v1.ComputeEngineTargetDefaultsH 
name (	B�A
source_vm_id (	
display_name (	
description (	;
policy (2+.google.cloud.vmmigration.v1.SchedulePolicy4
create_time	 (2.google.protobuf.TimestampB�A4
update_time
 (2.google.protobuf.TimestampB�AD
	last_sync (2,.google.cloud.vmmigration.v1.ReplicationSyncB�AB
state (2..google.cloud.vmmigration.v1.MigratingVm.StateB�A3

state_time (2.google.protobuf.TimestampB�AM
current_sync_info (2-.google.cloud.vmmigration.v1.ReplicationCycleB�A7
group (	B(�A�A" vmmigration.googleapis.com/GroupD
labels (24.google.cloud.vmmigration.v1.MigratingVm.LabelsEntryE
recent_clone_jobs (2%.google.cloud.vmmigration.v1.CloneJobB�A&
error (2.google.rpc.StatusB�AI
recent_cutover_jobs (2\'.google.cloud.vmmigration.v1.CutoverJobB�A-
LabelsEntry
key (	
value (	:8"�
State
STATE_UNSPECIFIED 
PENDING	
READY

FIRST_SYNC

ACTIVE
CUTTING_OVER
CUTOVER

FINAL_SYNC	

PAUSED


FINALIZING
	FINALIZED	
ERROR:��A~
&vmmigration.googleapis.com/MigratingVmTprojects/{project}/locations/{location}/sources/{source}/migratingVms/{migrating_vm}B
target_vm_defaults"�
CloneJobe
compute_engine_target_details (27.google.cloud.vmmigration.v1.ComputeEngineTargetDetailsB�AH 4
create_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A
name (	B�A?
state (2+.google.cloud.vmmigration.v1.CloneJob.StateB�A3

state_time (2.google.protobuf.TimestampB�A&
error (2.google.rpc.StatusB�A"�
State
STATE_UNSPECIFIED 
PENDING

ACTIVE

FAILED
	SUCCEEDED
	CANCELLED

CANCELLING
ADAPTING_OS:��A�
#vmmigration.googleapis.com/CloneJobjprojects/{project}/locations/{location}/sources/{source}/migratingVms/{migrating_vm}/cloneJobs/{clone_job}B
target_vm_details"�

CutoverJobe
compute_engine_target_details (27.google.cloud.vmmigration.v1.ComputeEngineTargetDetailsB�AH 4
create_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A
name (	B�AA
state (2-.google.cloud.vmmigration.v1.CutoverJob.StateB�A3

state_time (2.google.protobuf.TimestampB�A
progress_percent (B�A&
error	 (2.google.rpc.StatusB�A
state_message
 (	B�A"�
State
STATE_UNSPECIFIED 
PENDING

FAILED
	SUCCEEDED
	CANCELLED

CANCELLING

ACTIVE
ADAPTING_OS:��A�
%vmmigration.googleapis.com/CutoverJobnprojects/{project}/locations/{location}/sources/{source}/migratingVms/{migrating_vm}/cutoverJobs/{cutover_job}B
target_vm_details"�
CreateCloneJobRequest;
parent (	B+�A�A%#vmmigration.googleapis.com/CloneJob
clone_job_id (	B�A=
	clone_job (2%.google.cloud.vmmigration.v1.CloneJobB�A

request_id (	"R
CancelCloneJobRequest9
name (	B+�A�A%
#vmmigration.googleapis.com/CloneJob"
CancelCloneJobResponse"�
ListCloneJobsRequest;
parent (	B+�A�A%#vmmigration.googleapis.com/CloneJob
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"�
ListCloneJobsResponse>

clone_jobs (2%.google.cloud.vmmigration.v1.CloneJobB�A
next_page_token (	B�A
unreachable (	B�A"O
GetCloneJobRequest9
name (	B+�A�A%
#vmmigration.googleapis.com/CloneJob"�
SourceB
vmware
 (20.google.cloud.vmmigration.v1.VmwareSourceDetailsH 
name (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A?
labels (2/.google.cloud.vmmigration.v1.Source.LabelsEntry
description (	-
LabelsEntry
key (	
value (	:8:`�A]
!vmmigration.googleapis.com/Source8projects/{project}/locations/{location}/sources/{source}B
source_details"f
VmwareSourceDetails
username (	
password (	B�A

vcenter_ip (	

thumbprint (	"�
DatacenterConnector4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A
name (	B�A
registration_id (	B�A
service_account (	
version (	
bucket
 (	B�AJ
state (26.google.cloud.vmmigration.v1.DatacenterConnector.StateB�A3

state_time (2.google.protobuf.TimestampB�A&
error (2.google.rpc.StatusB�A-
 appliance_infrastructure_version (	B�A\'
appliance_software_version (	B�AN
available_versions (2-.google.cloud.vmmigration.v1.AvailableUpdatesB�AG
upgrade_status (2*.google.cloud.vmmigration.v1.UpgradeStatusB�A"P
State
STATE_UNSPECIFIED 
PENDING
OFFLINE

FAILED

ACTIVE:��A�
.vmmigration.googleapis.com/DatacenterConnectordprojects/{project}/locations/{location}/sources/{source}/datacenterConnectors/{datacenter_connector}"�
UpgradeStatus
version (	?
state (20.google.cloud.vmmigration.v1.UpgradeStatus.State!
error (2.google.rpc.Status.

start_time (2.google.protobuf.Timestamp
previous_version (	"F
State
STATE_UNSPECIFIED 
RUNNING

FAILED
	SUCCEEDED"�
AvailableUpdatesO
new_deployable_appliance (2-.google.cloud.vmmigration.v1.ApplianceVersionF
in_place_update (2-.google.cloud.vmmigration.v1.ApplianceVersion"]
ApplianceVersion
version (	
uri (	
critical (
release_notes_uri (	"�
ListSourcesRequest9
parent (	B)�A�A#!vmmigration.googleapis.com/Source
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"�
ListSourcesResponse9
sources (2#.google.cloud.vmmigration.v1.SourceB�A
next_page_token (	B�A
unreachable (	B�A"K
GetSourceRequest7
name (	B)�A�A#
!vmmigration.googleapis.com/Source"�
CreateSourceRequest9
parent (	B)�A�A#!vmmigration.googleapis.com/Source
	source_id (	B�A8
source (2#.google.cloud.vmmigration.v1.SourceB�A

request_id (	"�
UpdateSourceRequest/
update_mask (2.google.protobuf.FieldMask8
source (2#.google.cloud.vmmigration.v1.SourceB�A

request_id (	"g
DeleteSourceRequest7
name (	B)�A�A#
!vmmigration.googleapis.com/Source

request_id (	B�A"i
FetchInventoryRequest9
source (	B)�A�A#
!vmmigration.googleapis.com/Source
force_refresh ("�
VmwareVmDetails
vm_id (	
datacenter_id (	
datacenter_description (	
uuid (	
display_name (	L
power_state (27.google.cloud.vmmigration.v1.VmwareVmDetails.PowerState
	cpu_count (
	memory_mb (

disk_count	 (
committed_storage_mb (
guest_description (	Q
boot_option (27.google.cloud.vmmigration.v1.VmwareVmDetails.BootOptionB�A"I

PowerState
POWER_STATE_UNSPECIFIED 
ON
OFF
	SUSPENDED"<

BootOption
BOOT_OPTION_UNSPECIFIED 
EFI
BIOS"Q
VmwareVmsDetails=
details (2,.google.cloud.vmmigration.v1.VmwareVmDetails"�
FetchInventoryResponseC

vmware_vms (2-.google.cloud.vmmigration.v1.VmwareVmsDetailsH 4
update_time (2.google.protobuf.TimestampB�AB
	SourceVms"�
UtilizationReport
name (	B�A
display_name (	H
state (24.google.cloud.vmmigration.v1.UtilizationReport.StateB�A3

state_time (2.google.protobuf.TimestampB�A&
error (2.google.rpc.StatusB�A4
create_time (2.google.protobuf.TimestampB�AL

time_frame (28.google.cloud.vmmigration.v1.UtilizationReport.TimeFrame7
frame_end_time (2.google.protobuf.TimestampB�A
vm_count	 (B�A;
vms
 (2..google.cloud.vmmigration.v1.VmUtilizationInfo"G
State
STATE_UNSPECIFIED 
CREATING
	SUCCEEDED

FAILED"F
	TimeFrame
TIME_FRAME_UNSPECIFIED 
WEEK	
MONTH
YEAR:��A�
,vmmigration.googleapis.com/UtilizationReport`projects/{project}/locations/{location}/sources/{source}/utilizationReports/{utilization_report}"�
VmUtilizationInfoI
vmware_vm_details (2,.google.cloud.vmmigration.v1.VmwareVmDetailsH 
vm_id (	F
utilization (21.google.cloud.vmmigration.v1.VmUtilizationMetricsB
	VmDetails"�
VmUtilizationMetrics
cpu_max_percent	 (
cpu_average_percent
 (
memory_max_percent (
memory_average_percent (
disk_io_rate_max_kbps (!
disk_io_rate_average_kbps (#
network_throughput_max_kbps (\'
network_throughput_average_kbps ("�
ListUtilizationReportsRequestD
parent (	B4�A�A.,vmmigration.googleapis.com/UtilizationReportE
view (22.google.cloud.vmmigration.v1.UtilizationReportViewB�A
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"�
ListUtilizationReportsResponseP
utilization_reports (2..google.cloud.vmmigration.v1.UtilizationReportB�A
next_page_token (	B�A
unreachable (	B�A"�
GetUtilizationReportRequestB
name (	B4�A�A.
,vmmigration.googleapis.com/UtilizationReportE
view (22.google.cloud.vmmigration.v1.UtilizationReportViewB�A"�
CreateUtilizationReportRequestD
parent (	B4�A�A.,vmmigration.googleapis.com/UtilizationReportO
utilization_report (2..google.cloud.vmmigration.v1.UtilizationReportB�A"
utilization_report_id (	B�A

request_id (	"}
DeleteUtilizationReportRequestB
name (	B4�A�A.
,vmmigration.googleapis.com/UtilizationReport

request_id (	B�A"�
 ListDatacenterConnectorsResponseT
datacenter_connectors (20.google.cloud.vmmigration.v1.DatacenterConnectorB�A
next_page_token (	B�A
unreachable (	B�A"e
GetDatacenterConnectorRequestD
name (	B6�A�A0
.vmmigration.googleapis.com/DatacenterConnector"�
 CreateDatacenterConnectorRequestF
parent (	B6�A�A0.vmmigration.googleapis.com/DatacenterConnector$
datacenter_connector_id (	B�AS
datacenter_connector (20.google.cloud.vmmigration.v1.DatacenterConnectorB�A

request_id (	"|
 DeleteDatacenterConnectorRequestD
name (	B6�A�A0
.vmmigration.googleapis.com/DatacenterConnector

request_id (	"�
UpgradeApplianceRequestT
datacenter_connector (	B6�A�A0
.vmmigration.googleapis.com/DatacenterConnector

request_id (	"
UpgradeApplianceResponse"�
ListDatacenterConnectorsRequestF
parent (	B6�A�A0.vmmigration.googleapis.com/DatacenterConnector
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"�
ComputeEngineTargetDefaults
vm_name (	E
target_project (	B-�A*
(vmmigration.googleapis.com/TargetProject
zone (	
machine_type_series (	
machine_type (	
network_tags (	I
network_interfaces (2-.google.cloud.vmmigration.v1.NetworkInterface
service_account (	E
	disk_type	 (22.google.cloud.vmmigration.v1.ComputeEngineDiskTypeT
labels
 (2D.google.cloud.vmmigration.v1.ComputeEngineTargetDefaults.LabelsEntryK
license_type (25.google.cloud.vmmigration.v1.ComputeEngineLicenseTypeI
applied_license (2+.google.cloud.vmmigration.v1.AppliedLicenseB�AJ
compute_scheduling (2..google.cloud.vmmigration.v1.ComputeScheduling
secure_boot (N
boot_option (24.google.cloud.vmmigration.v1.ComputeEngineBootOptionB�AX
metadata (2F.google.cloud.vmmigration.v1.ComputeEngineTargetDefaults.MetadataEntry
additional_licenses (	
hostname (	-
LabelsEntry
key (	
value (	:8/
MetadataEntry
key (	
value (	:8"�
ComputeEngineTargetDetails
vm_name (	
project (	
zone (	
machine_type_series (	
machine_type (	
network_tags (	I
network_interfaces (2-.google.cloud.vmmigration.v1.NetworkInterface
service_account (	E
	disk_type	 (22.google.cloud.vmmigration.v1.ComputeEngineDiskTypeS
labels
 (2C.google.cloud.vmmigration.v1.ComputeEngineTargetDetails.LabelsEntryK
license_type (25.google.cloud.vmmigration.v1.ComputeEngineLicenseTypeD
applied_license (2+.google.cloud.vmmigration.v1.AppliedLicenseJ
compute_scheduling (2..google.cloud.vmmigration.v1.ComputeScheduling
secure_boot (I
boot_option (24.google.cloud.vmmigration.v1.ComputeEngineBootOptionW
metadata (2E.google.cloud.vmmigration.v1.ComputeEngineTargetDetails.MetadataEntry
additional_licenses (	
hostname (	-
LabelsEntry
key (	
value (	:8/
MetadataEntry
key (	
value (	:8"a
NetworkInterface
network (	

subnetwork (	
internal_ip (	
external_ip (	"�
AppliedLicense>
type (20.google.cloud.vmmigration.v1.AppliedLicense.Type

os_license (	":
Type
TYPE_UNSPECIFIED 
NONE
PAYG
BYOL"�
SchedulingNodeAffinity
key (	N
operator (2<.google.cloud.vmmigration.v1.SchedulingNodeAffinity.Operator
values (	"8
Operator
OPERATOR_UNSPECIFIED 
IN

NOT_IN"�
ComputeScheduling]
on_host_maintenance (2@.google.cloud.vmmigration.v1.ComputeScheduling.OnHostMaintenanceP
restart_type (2:.google.cloud.vmmigration.v1.ComputeScheduling.RestartTypeL
node_affinities (23.google.cloud.vmmigration.v1.SchedulingNodeAffinity
min_node_cpus ("T
OnHostMaintenance#
ON_HOST_MAINTENANCE_UNSPECIFIED 
	TERMINATE
MIGRATE"\\
RestartType
RESTART_TYPE_UNSPECIFIED 
AUTOMATIC_RESTART
NO_AUTOMATIC_RESTART"^
SchedulePolicy0
idle_duration (2.google.protobuf.Duration
skip_os_adaptation ("�
CreateMigratingVmRequest>
parent (	B.�A�A(&vmmigration.googleapis.com/MigratingVm
migrating_vm_id (	B�AC
migrating_vm (2(.google.cloud.vmmigration.v1.MigratingVmB�A

request_id (	"�
ListMigratingVmsRequest>
parent (	B.�A�A(&vmmigration.googleapis.com/MigratingVm
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A?
view (2,.google.cloud.vmmigration.v1.MigratingVmViewB�A"�
ListMigratingVmsResponseD
migrating_vms (2(.google.cloud.vmmigration.v1.MigratingVmB�A
next_page_token (	B�A
unreachable (	B�A"�
GetMigratingVmRequest<
name (	B.�A�A(
&vmmigration.googleapis.com/MigratingVm?
view (2,.google.cloud.vmmigration.v1.MigratingVmViewB�A"�
UpdateMigratingVmRequest/
update_mask (2.google.protobuf.FieldMaskC
migrating_vm (2(.google.cloud.vmmigration.v1.MigratingVmB�A

request_id (	"X
DeleteMigratingVmRequest<
name (	B.�A�A(
&vmmigration.googleapis.com/MigratingVm"]
StartMigrationRequestD
migrating_vm (	B.�A�A(
&vmmigration.googleapis.com/MigratingVm"
StartMigrationResponse"]
PauseMigrationRequestD
migrating_vm (	B.�A�A(
&vmmigration.googleapis.com/MigratingVm"
PauseMigrationResponse"^
ResumeMigrationRequestD
migrating_vm (	B.�A�A(
&vmmigration.googleapis.com/MigratingVm"
ResumeMigrationResponse"`
FinalizeMigrationRequestD
migrating_vm (	B.�A�A(
&vmmigration.googleapis.com/MigratingVm"
FinalizeMigrationResponse"�
TargetProject
name (	B�A
project (	
description (	4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A:v�As
(vmmigration.googleapis.com/TargetProjectGprojects/{project}/locations/{location}/targetProjects/{target_project}"Y
GetTargetProjectRequest>
name (	B0�A�A*
(vmmigration.googleapis.com/TargetProject"�
ListTargetProjectsRequest@
parent (	B0�A�A*(vmmigration.googleapis.com/TargetProject
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"�
ListTargetProjectsResponseH
target_projects (2*.google.cloud.vmmigration.v1.TargetProjectB�A
next_page_token (	B�A
unreachable (	B�A"�
CreateTargetProjectRequest@
parent (	B0�A�A*(vmmigration.googleapis.com/TargetProject
target_project_id (	B�AG
target_project (2*.google.cloud.vmmigration.v1.TargetProjectB�A

request_id (	"�
UpdateTargetProjectRequest/
update_mask (2.google.protobuf.FieldMaskG
target_project (2*.google.cloud.vmmigration.v1.TargetProjectB�A

request_id (	"u
DeleteTargetProjectRequest>
name (	B0�A�A*
(vmmigration.googleapis.com/TargetProject

request_id (	B�A"�
Group
name (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A
description (	
display_name (	:]�AZ
 vmmigration.googleapis.com/Group6projects/{project}/locations/{location}/groups/{group}"�
ListGroupsRequest8
parent (	B(�A�A" vmmigration.googleapis.com/Group
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"�
ListGroupsResponse7
groups (2".google.cloud.vmmigration.v1.GroupB�A
next_page_token (	B�A
unreachable (	B�A"I
GetGroupRequest6
name (	B(�A�A"
 vmmigration.googleapis.com/Group"�
CreateGroupRequest8
parent (	B(�A�A" vmmigration.googleapis.com/Group
group_id (	B�A6
group (2".google.cloud.vmmigration.v1.GroupB�A

request_id (	"�
UpdateGroupRequest/
update_mask (2.google.protobuf.FieldMask6
group (2".google.cloud.vmmigration.v1.GroupB�A

request_id (	"e
DeleteGroupRequest6
name (	B(�A�A"
 vmmigration.googleapis.com/Group

request_id (	B�A"�
AddGroupMigrationRequest7
group (	B(�A�A"
 vmmigration.googleapis.com/GroupA
migrating_vm (	B+�A(
&vmmigration.googleapis.com/MigratingVm"
AddGroupMigrationResponse"�
RemoveGroupMigrationRequest7
group (	B(�A�A"
 vmmigration.googleapis.com/GroupA
migrating_vm (	B+�A(
&vmmigration.googleapis.com/MigratingVm"
RemoveGroupMigrationResponse"�
CreateCutoverJobRequest=
parent (	B-�A�A\'%vmmigration.googleapis.com/CutoverJob
cutover_job_id (	B�AA
cutover_job (2\'.google.cloud.vmmigration.v1.CutoverJobB�A

request_id (	"V
CancelCutoverJobRequest;
name (	B-�A�A\'
%vmmigration.googleapis.com/CutoverJob"
CancelCutoverJobResponse"�
ListCutoverJobsRequest=
parent (	B-�A�A\'%vmmigration.googleapis.com/CutoverJob
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"�
ListCutoverJobsResponseB
cutover_jobs (2\'.google.cloud.vmmigration.v1.CutoverJobB�A
next_page_token (	B�A
unreachable (	B�A"S
GetCutoverJobRequest;
name (	B-�A�A\'
%vmmigration.googleapis.com/CutoverJob"�
OperationMetadata4
create_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A
target (	B�A
verb (	B�A
status_message (	B�A#
requested_cancellation (B�A
api_version (	B�A"�
MigrationErrorH
code (25.google.cloud.vmmigration.v1.MigrationError.ErrorCodeB�A8
error_message (2.google.rpc.LocalizedMessageB�A6
action_item (2.google.rpc.LocalizedMessageB�A.

help_links (2.google.rpc.Help.LinkB�A3

error_time (2.google.protobuf.TimestampB�A"�
	ErrorCode
ERROR_CODE_UNSPECIFIED 
UNKNOWN_ERROR
SOURCE_VALIDATION_ERROR
SOURCE_REPLICATION_ERROR
TARGET_REPLICATION_ERROR
OS_ADAPTATION_ERROR
CLONE_ERROR
CUTOVER_ERROR
UTILIZATION_REPORT_ERROR
APPLIANCE_UPGRADE_ERROR	*U
UtilizationReportView\'
#UTILIZATION_REPORT_VIEW_UNSPECIFIED 	
BASIC
FULL*m
MigratingVmView!
MIGRATING_VM_VIEW_UNSPECIFIED 
MIGRATING_VM_VIEW_BASIC
MIGRATING_VM_VIEW_FULL*�
ComputeEngineDiskType(
$COMPUTE_ENGINE_DISK_TYPE_UNSPECIFIED %
!COMPUTE_ENGINE_DISK_TYPE_STANDARD 
COMPUTE_ENGINE_DISK_TYPE_SSD%
!COMPUTE_ENGINE_DISK_TYPE_BALANCED*�
ComputeEngineLicenseType\'
#COMPUTE_ENGINE_LICENSE_TYPE_DEFAULT $
 COMPUTE_ENGINE_LICENSE_TYPE_PAYG$
 COMPUTE_ENGINE_LICENSE_TYPE_BYOL*�
ComputeEngineBootOption*
&COMPUTE_ENGINE_BOOT_OPTION_UNSPECIFIED "
COMPUTE_ENGINE_BOOT_OPTION_EFI#
COMPUTE_ENGINE_BOOT_OPTION_BIOS2�O
VmMigration�
ListSources/.google.cloud.vmmigration.v1.ListSourcesRequest0.google.cloud.vmmigration.v1.ListSourcesResponse"<���-+/v1/{parent=projects/*/locations/*}/sources�Aparent�
	GetSource-.google.cloud.vmmigration.v1.GetSourceRequest#.google.cloud.vmmigration.v1.Source":���-+/v1/{name=projects/*/locations/*/sources/*}�Aname�
CreateSource0.google.cloud.vmmigration.v1.CreateSourceRequest.google.longrunning.Operation"s���5"+/v1/{parent=projects/*/locations/*}/sources:source�Aparent,source,source_id�A
SourceOperationMetadata�
UpdateSource0.google.cloud.vmmigration.v1.UpdateSourceRequest.google.longrunning.Operation"u���<22/v1/{source.name=projects/*/locations/*/sources/*}:source�Asource,update_mask�A
SourceOperationMetadata�
DeleteSource0.google.cloud.vmmigration.v1.DeleteSourceRequest.google.longrunning.Operation"g���-*+/v1/{name=projects/*/locations/*/sources/*}�Aname�A*
google.protobuf.EmptyOperationMetadata�
FetchInventory2.google.cloud.vmmigration.v1.FetchInventoryRequest3.google.cloud.vmmigration.v1.FetchInventoryResponse"M���></v1/{source=projects/*/locations/*/sources/*}:fetchInventory�Asource�
ListUtilizationReports:.google.cloud.vmmigration.v1.ListUtilizationReportsRequest;.google.cloud.vmmigration.v1.ListUtilizationReportsResponse"Q���B@/v1/{parent=projects/*/locations/*/sources/*}/utilizationReports�Aparent�
GetUtilizationReport8.google.cloud.vmmigration.v1.GetUtilizationReportRequest..google.cloud.vmmigration.v1.UtilizationReport"O���B@/v1/{name=projects/*/locations/*/sources/*/utilizationReports/*}�Aname�
CreateUtilizationReport;.google.cloud.vmmigration.v1.CreateUtilizationReportRequest.google.longrunning.Operation"����V"@/v1/{parent=projects/*/locations/*/sources/*}/utilizationReports:utilization_report�A/parent,utilization_report,utilization_report_id�A&
UtilizationReportOperationMetadata�
DeleteUtilizationReport;.google.cloud.vmmigration.v1.DeleteUtilizationReportRequest.google.longrunning.Operation"|���B*@/v1/{name=projects/*/locations/*/sources/*/utilizationReports/*}�Aname�A*
google.protobuf.EmptyOperationMetadata�
ListDatacenterConnectors<.google.cloud.vmmigration.v1.ListDatacenterConnectorsRequest=.google.cloud.vmmigration.v1.ListDatacenterConnectorsResponse"S���DB/v1/{parent=projects/*/locations/*/sources/*}/datacenterConnectors�Aparent�
GetDatacenterConnector:.google.cloud.vmmigration.v1.GetDatacenterConnectorRequest0.google.cloud.vmmigration.v1.DatacenterConnector"Q���DB/v1/{name=projects/*/locations/*/sources/*/datacenterConnectors/*}�Aname�
CreateDatacenterConnector=.google.cloud.vmmigration.v1.CreateDatacenterConnectorRequest.google.longrunning.Operation"����Z"B/v1/{parent=projects/*/locations/*/sources/*}/datacenterConnectors:datacenter_connector�A3parent,datacenter_connector,datacenter_connector_id�A(
DatacenterConnectorOperationMetadata�
DeleteDatacenterConnector=.google.cloud.vmmigration.v1.DeleteDatacenterConnectorRequest.google.longrunning.Operation"~���D*B/v1/{name=projects/*/locations/*/sources/*/datacenterConnectors/*}�Aname�A*
google.protobuf.EmptyOperationMetadata�
UpgradeAppliance4.google.cloud.vmmigration.v1.UpgradeApplianceRequest.google.longrunning.Operation"����h"c/v1/{datacenter_connector=projects/*/locations/*/sources/*/datacenterConnectors/*}:upgradeAppliance:*�A-
UpgradeApplianceResponseOperationMetadata�
CreateMigratingVm5.google.cloud.vmmigration.v1.CreateMigratingVmRequest.google.longrunning.Operation"����J":/v1/{parent=projects/*/locations/*/sources/*}/migratingVms:migrating_vm�A#parent,migrating_vm,migrating_vm_id�A 
MigratingVmOperationMetadata�
ListMigratingVms4.google.cloud.vmmigration.v1.ListMigratingVmsRequest5.google.cloud.vmmigration.v1.ListMigratingVmsResponse"K���<:/v1/{parent=projects/*/locations/*/sources/*}/migratingVms�Aparent�
GetMigratingVm2.google.cloud.vmmigration.v1.GetMigratingVmRequest(.google.cloud.vmmigration.v1.MigratingVm"I���<:/v1/{name=projects/*/locations/*/sources/*/migratingVms/*}�Aname�
UpdateMigratingVm5.google.cloud.vmmigration.v1.UpdateMigratingVmRequest.google.longrunning.Operation"����W2G/v1/{migrating_vm.name=projects/*/locations/*/sources/*/migratingVms/*}:migrating_vm�Amigrating_vm,update_mask�A 
MigratingVmOperationMetadata�
DeleteMigratingVm5.google.cloud.vmmigration.v1.DeleteMigratingVmRequest.google.longrunning.Operation"v���<*:/v1/{name=projects/*/locations/*/sources/*/migratingVms/*}�Aname�A*
google.protobuf.EmptyOperationMetadata�
StartMigration2.google.cloud.vmmigration.v1.StartMigrationRequest.google.longrunning.Operation"����V"Q/v1/{migrating_vm=projects/*/locations/*/sources/*/migratingVms/*}:startMigration:*�Amigrating_vm�A+
StartMigrationResponseOperationMetadata�
ResumeMigration3.google.cloud.vmmigration.v1.ResumeMigrationRequest.google.longrunning.Operation"����W"R/v1/{migrating_vm=projects/*/locations/*/sources/*/migratingVms/*}:resumeMigration:*�A,
ResumeMigrationResponseOperationMetadata�
PauseMigration2.google.cloud.vmmigration.v1.PauseMigrationRequest.google.longrunning.Operation"����V"Q/v1/{migrating_vm=projects/*/locations/*/sources/*/migratingVms/*}:pauseMigration:*�A+
PauseMigrationResponseOperationMetadata�
FinalizeMigration5.google.cloud.vmmigration.v1.FinalizeMigrationRequest.google.longrunning.Operation"����Y"T/v1/{migrating_vm=projects/*/locations/*/sources/*/migratingVms/*}:finalizeMigration:*�Amigrating_vm�A.
FinalizeMigrationResponseOperationMetadata�
CreateCloneJob2.google.cloud.vmmigration.v1.CreateCloneJobRequest.google.longrunning.Operation"����S"F/v1/{parent=projects/*/locations/*/sources/*/migratingVms/*}/cloneJobs:	clone_job�Aparent,clone_job,clone_job_id�A
CloneJobOperationMetadata�
CancelCloneJob2.google.cloud.vmmigration.v1.CancelCloneJobRequest.google.longrunning.Operation"����R"M/v1/{name=projects/*/locations/*/sources/*/migratingVms/*/cloneJobs/*}:cancel:*�Aname�A+
CancelCloneJobResponseOperationMetadata�
ListCloneJobs1.google.cloud.vmmigration.v1.ListCloneJobsRequest2.google.cloud.vmmigration.v1.ListCloneJobsResponse"W���HF/v1/{parent=projects/*/locations/*/sources/*/migratingVms/*}/cloneJobs�Aparent�
GetCloneJob/.google.cloud.vmmigration.v1.GetCloneJobRequest%.google.cloud.vmmigration.v1.CloneJob"U���HF/v1/{name=projects/*/locations/*/sources/*/migratingVms/*/cloneJobs/*}�Aname�
CreateCutoverJob4.google.cloud.vmmigration.v1.CreateCutoverJobRequest.google.longrunning.Operation"����W"H/v1/{parent=projects/*/locations/*/sources/*/migratingVms/*}/cutoverJobs:cutover_job�A!parent,cutover_job,cutover_job_id�A

CutoverJobOperationMetadata�
CancelCutoverJob4.google.cloud.vmmigration.v1.CancelCutoverJobRequest.google.longrunning.Operation"����T"O/v1/{name=projects/*/locations/*/sources/*/migratingVms/*/cutoverJobs/*}:cancel:*�Aname�A-
CancelCutoverJobResponseOperationMetadata�
ListCutoverJobs3.google.cloud.vmmigration.v1.ListCutoverJobsRequest4.google.cloud.vmmigration.v1.ListCutoverJobsResponse"Y���JH/v1/{parent=projects/*/locations/*/sources/*/migratingVms/*}/cutoverJobs�Aparent�
GetCutoverJob1.google.cloud.vmmigration.v1.GetCutoverJobRequest\'.google.cloud.vmmigration.v1.CutoverJob"W���JH/v1/{name=projects/*/locations/*/sources/*/migratingVms/*/cutoverJobs/*}�Aname�

ListGroups..google.cloud.vmmigration.v1.ListGroupsRequest/.google.cloud.vmmigration.v1.ListGroupsResponse";���,*/v1/{parent=projects/*/locations/*}/groups�Aparent�
GetGroup,.google.cloud.vmmigration.v1.GetGroupRequest".google.cloud.vmmigration.v1.Group"9���,*/v1/{name=projects/*/locations/*/groups/*}�Aname�
CreateGroup/.google.cloud.vmmigration.v1.CreateGroupRequest.google.longrunning.Operation"n���3"*/v1/{parent=projects/*/locations/*}/groups:group�Aparent,group,group_id�A
GroupOperationMetadata�
UpdateGroup/.google.cloud.vmmigration.v1.UpdateGroupRequest.google.longrunning.Operation"p���920/v1/{group.name=projects/*/locations/*/groups/*}:group�Agroup,update_mask�A
GroupOperationMetadata�
DeleteGroup/.google.cloud.vmmigration.v1.DeleteGroupRequest.google.longrunning.Operation"f���,**/v1/{name=projects/*/locations/*/groups/*}�Aname�A*
google.protobuf.EmptyOperationMetadata�
AddGroupMigration5.google.cloud.vmmigration.v1.AddGroupMigrationRequest.google.longrunning.Operation"����B"=/v1/{group=projects/*/locations/*/groups/*}:addGroupMigration:*�Agroup�A.
AddGroupMigrationResponseOperationMetadata�
RemoveGroupMigration8.google.cloud.vmmigration.v1.RemoveGroupMigrationRequest.google.longrunning.Operation"����E"@/v1/{group=projects/*/locations/*/groups/*}:removeGroupMigration:*�Agroup�A1
RemoveGroupMigrationResponseOperationMetadata�
ListTargetProjects6.google.cloud.vmmigration.v1.ListTargetProjectsRequest7.google.cloud.vmmigration.v1.ListTargetProjectsResponse"C���42/v1/{parent=projects/*/locations/*}/targetProjects�Aparent�
GetTargetProject4.google.cloud.vmmigration.v1.GetTargetProjectRequest*.google.cloud.vmmigration.v1.TargetProject"A���42/v1/{name=projects/*/locations/*/targetProjects/*}�Aname�
CreateTargetProject7.google.cloud.vmmigration.v1.CreateTargetProjectRequest.google.longrunning.Operation"����D"2/v1/{parent=projects/*/locations/*}/targetProjects:target_project�A\'parent,target_project,target_project_id�A"
TargetProjectOperationMetadata�
UpdateTargetProject7.google.cloud.vmmigration.v1.UpdateTargetProjectRequest.google.longrunning.Operation"����S2A/v1/{target_project.name=projects/*/locations/*/targetProjects/*}:target_project�Atarget_project,update_mask�A"
TargetProjectOperationMetadata�
DeleteTargetProject7.google.cloud.vmmigration.v1.DeleteTargetProjectRequest.google.longrunning.Operation"n���4*2/v1/{name=projects/*/locations/*/targetProjects/*}�Aname�A*
google.protobuf.EmptyOperationMetadataN�Avmmigration.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloud.vmmigration.v1BVmMigrationProtoPZFgoogle.golang.org/genproto/googleapis/cloud/vmmigration/v1;vmmigration�Google.Cloud.VMMigration.V1�Google\\Cloud\\VMMigration\\V1�Google::Cloud::VMMigration::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

