<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/v2/request_stats.proto

namespace GPBMetadata\Google\Bigtable\V2;

class RequestStats
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
&google/bigtable/v2/request_stats.protogoogle.bigtable.v2"�
ReadIteratorStats
rows_seen_count (
rows_returned_count (
cells_seen_count (
cells_returned_count (
deletes_seen_count ("Q
RequestLatencyStats:
frontend_server_latency (2.google.protobuf.Duration"�
ReadEfficiencyStatsB
read_iterator_stats (2%.google.bigtable.v2.ReadIteratorStatsF
request_latency_stats (2\'.google.bigtable.v2.RequestLatencyStats"�
AllReadStatsB
read_iterator_stats (2%.google.bigtable.v2.ReadIteratorStatsF
request_latency_stats (2\'.google.bigtable.v2.RequestLatencyStats"�
RequestStatsH
read_efficiency_stats (2\'.google.bigtable.v2.ReadEfficiencyStatsH :
all_read_stats (2 .google.bigtable.v2.AllReadStatsH B
statsB�
com.google.bigtable.v2BRequestStatsProtoPZ:google.golang.org/genproto/googleapis/bigtable/v2;bigtable�Google.Cloud.Bigtable.V2�Google\\Cloud\\Bigtable\\V2�Google::Cloud::Bigtable::V2bproto3'
        , true);

        static::$is_initialized = true;
    }
}

