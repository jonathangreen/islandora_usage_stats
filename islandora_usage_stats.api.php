<?php
/**
 * @file
 * This file documents all available hook functions.
 */

/**
 * Notify modules that the given object access event was persisted.
 *
 * @param int $access_id
 *   The id from the islandora_usage_stats_object_access_log table.
 * @param int $pid_id
 *   The pid_id from the islandora_usage_stats_object_access_log table.
 * @param string $pid
 *   The PID of the object that was accessed.
 */
function hook_islandora_usage_stats_object_access_recorded($access_id, $pid_id, $pid) {

}

/**
 * Notify modules that the given collection access event was persisted.
 *
 * @param int $access_id
 *   The id from the islandora_usage_stats_collection_access_log table.
 * @param int $collection_id
 *   The collection's ID from the islandora_usage_stats_collection_access_log
 *   table.
 * @param string $collection_pid
 *   The PID of the collection object that is the parent of the object accessed.
 * @param int $object_access_id
 *   The object_access_id from the islandora_usage_stats_object_access_log
 *   table.
 * @param int $pid
 *   The PID of the object just accessed.
 */
function hook_islandora_usage_stats_collection_access_recorded($access_id, $collection_id, $collection_pid, $object_access_id, $pid) {

}

/**
 * Notify modules that the given datastream download event was persisted.
 *
 * @param int $download_id
 *   The id from the islandora_usage_stats_object_ds_access_log table.
 * @param int $ds_dsid
 *   The ds_dsid from the islandora_usage_stats_object_ds_access_log table.
 * @param string $pid
 *   The PID of the object the downloaded datastream belongs to.
 * @param string $dsid
 *   The DSID of the datastream that was downloaded.
 */
function hook_islandora_usage_stats_datastream_download_recorded($download_id, $ds_dsid, $pid, $dsid) {

}

/**
 * Notify modules that the given content model access event was persisted.
 *
 * @param string $access_id
 *   The id from the islandora_usage_stats_content_model_access_log table.
 * @param int $cmodel_id
 *   The content model's id in the 
 *   islandora_usage_stats_content_model_access_log table.
 * @param string $cmodel_pid
 *   The PID of the content model that was accessed.
 * @param string $pid
 *   The PID of the object that was accessed.
 */
function hook_islandora_usage_stats_cmodel_access_recorded($access_id, $cmodel_id, $cmodel_pid, $pid) {

}

/**
 * Notify modules that the given content model access event was persisted.
 *
 * @param string $access_id
 *   The id from the islandora_usage_stats_content_model_access_log table.
 * @param string $cmodel_pid
 *   The PID of the content model that was accessed.
 * @param int $cmodel_id
 *   The content model's id in the 
 *   islandora_usage_stats_content_model_access_log table.
 * @param string $pid
 *   The PID of the object that was accessed.
 */
function hook_islandora_usage_stats_cmodel_pid_access_recorded($access_id, $cmodel_pid, $cmodel_id, $pid) {

}
