<?php
/**
 * @file
 * This file documents all available hook functions to manipulate data.
 */

/**
 * Notify modules that the given access event was persisted.
 *
 * This hook is called after the event was persisted to the database. If the
 * attempt to persist the event failed, 
 *
 * @param string $type
 *   One of 'object', 'collection', 'cmodel', 'ds'.
 * @param int $access_id
 *   The database ID resulting from persisting the entry to the database.
 *   If the attempt to persist the record failed, this will be NULL.
 * @param int $pid_id
 *   For object access events, the ID of the row recording the event.
 * @param string $pid
 *   For object access events, the objec't PID.
 */
function hook_islandora_usage_stats_access_recorded($type, $access_id, $pid_id = NULL, $pid = NULL);

}
