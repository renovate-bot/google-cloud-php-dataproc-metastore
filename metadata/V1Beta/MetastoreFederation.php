<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/metastore/v1beta/metastore_federation.proto

namespace GPBMetadata\Google\Cloud\Metastore\V1Beta;

class MetastoreFederation
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
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
8google/cloud/metastore/v1beta/metastore_federation.protogoogle.cloud.metastore.v1betagoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto#google/longrunning/operations.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"�

Federation
name (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�AE
labels (25.google.cloud.metastore.v1beta.Federation.LabelsEntry
version (	B�A\\
backend_metastores (2@.google.cloud.metastore.v1beta.Federation.BackendMetastoresEntry
endpoint_uri (	B�AC
state (2/.google.cloud.metastore.v1beta.Federation.StateB�A
state_message	 (	B�A
uid
 (	B�A-
LabelsEntry
key (	
value (	:8i
BackendMetastoresEntry
key (>
value (2/.google.cloud.metastore.v1beta.BackendMetastore:8"_
State
STATE_UNSPECIFIED 
CREATING

ACTIVE
UPDATING
DELETING	
ERROR:j�Ag
#metastore.googleapis.com/Federation@projects/{project}/locations/{location}/federations/{federation}"�
BackendMetastore
name (	U
metastore_type (2=.google.cloud.metastore.v1beta.BackendMetastore.MetastoreType"U
MetastoreType
METASTORE_TYPE_UNSPECIFIED 
BIGQUERY
DATAPROC_METASTORE"�
ListFederationsRequest;
parent (	B+�A�A%#metastore.googleapis.com/Federation
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"�
ListFederationsResponse>
federations (2).google.cloud.metastore.v1beta.Federation
next_page_token (	
unreachable (	"Q
GetFederationRequest9
name (	B+�A�A%
#metastore.googleapis.com/Federation"�
CreateFederationRequest;
parent (	B+�A�A%#metastore.googleapis.com/Federation
federation_id (	B�AB

federation (2).google.cloud.metastore.v1beta.FederationB�A

request_id (	B�A"�
UpdateFederationRequest4
update_mask (2.google.protobuf.FieldMaskB�AB

federation (2).google.cloud.metastore.v1beta.FederationB�A

request_id (	B�A"m
DeleteFederationRequest9
name (	B+�A�A%
#metastore.googleapis.com/Federation

request_id (	B�A2�

DataprocMetastoreFederation�
ListFederations5.google.cloud.metastore.v1beta.ListFederationsRequest6.google.cloud.metastore.v1beta.ListFederationsResponse"D���53/v1beta/{parent=projects/*/locations/*}/federations�Aparent�
GetFederation3.google.cloud.metastore.v1beta.GetFederationRequest).google.cloud.metastore.v1beta.Federation"B���53/v1beta/{name=projects/*/locations/*/federations/*}�Aname�
CreateFederation6.google.cloud.metastore.v1beta.CreateFederationRequest.google.longrunning.Operation"����A"3/v1beta/{parent=projects/*/locations/*}/federations:
federation�Aparent,federation,federation_id�A=

Federation/google.cloud.metastore.v1beta.OperationMetadata�
UpdateFederation6.google.cloud.metastore.v1beta.UpdateFederationRequest.google.longrunning.Operation"����L2>/v1beta/{federation.name=projects/*/locations/*/federations/*}:
federation�Afederation,update_mask�A=

Federation/google.cloud.metastore.v1beta.OperationMetadata�
DeleteFederation6.google.cloud.metastore.v1beta.DeleteFederationRequest.google.longrunning.Operation"����5*3/v1beta/{name=projects/*/locations/*/federations/*}�Aname�AH
google.protobuf.Empty/google.cloud.metastore.v1beta.OperationMetadataL�Ametastore.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
!com.google.cloud.metastore.v1betaBMetastoreFederationProtoPZ?cloud.google.com/go/metastore/apiv1beta/metastorepb;metastorepbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

