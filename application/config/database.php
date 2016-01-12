<?php  
// Allow direct access to this file. Because quickbooks connection will need it.
//if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access your database.
|
| For complete instructions please consult the 'Database Connection'
| page of the User Guide.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|	['hostname'] The hostname of your database server.
|	['username'] The username used to connect to the database
|	['password'] The password used to connect to the database
|	['database'] The name of the database you want to connect to
|	['dbdriver'] The database type. ie: mysql.  Currently supported:
				 mysql, mysqli, postgre, odbc, mssql, sqlite, oci8
|	['dbprefix'] You can add an optional prefix, which will be added
|				 to the table name when using the  Active Record class
|	['pconnect'] TRUE/FALSE - Whether to use a persistent connection
|	['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
|	['cache_on'] TRUE/FALSE - Enables/disables query caching
|	['cachedir'] The path to the folder where cache files should be stored
|	['char_set'] The character set used in communicating with the database
|	['dbcollat'] The character collation used in communicating with the database
|				 NOTE: For MySQL and MySQLi databases, this setting is only used
| 				 as a backup if your server is running PHP < 5.2.3 or MySQL < 5.0.7.
| 				 There is an incompatibility in PHP with mysql_real_escape_string() which
| 				 can make your site vulnerable to SQL injection if you are using a
| 				 multi-byte character set and are running versions lower than these.
| 				 Sites using Latin-1 or UTF-8 database character set and collation are unaffected.
|	['swap_pre'] A default table prefix that should be swapped with the dbprefix
|	['autoinit'] Whether or not to automatically initialize the database.
|	['stricton'] TRUE/FALSE - forces 'Strict Mode' connections
|							- good for ensuring strict SQL while developing
|
| The $active_group variable lets you choose which connection group to
| make active.  By default there is only one group (the 'default' group).
|
| The $active_record variables lets you determine whether or not to load
| the active record class
*/

$active_group = 'default';
$active_record = TRUE;

$db['default']['hostname'] = '10.189.252.46';
$db['default']['username'] = 'ascopedb_user';
$db['default']['password'] = 'Asc0p3+DBPass)(-';
$db['default']['database'] = 'as_staging';
$db['default']['dbdriver'] = 'mysql';
$db['default']['dbprefix'] = '';
$db['default']['pconnect'] = FALSE;
$db['default']['db_debug'] = TRUE;
$db['default']['cache_on'] = FALSE;
$db['default']['cachedir'] = '';
$db['default']['char_set'] = 'utf8';
$db['default']['dbcollat'] = 'utf8_general_ci';
$db['default']['swap_pre'] = '';
$db['default']['autoinit'] = TRUE;
$db['default']['stricton'] = FALSE;

$db['dbappraiser']['hostname'] = '10.189.252.46';
$db['dbappraiser']['username'] = 'ascopedb_user';
$db['dbappraiser']['password'] = 'Asc0p3+DBPass)(-';
$db['dbappraiser']['database'] = 'as_directory';
$db['dbappraiser']['dbdriver'] = 'mysql';
$db['dbappraiser']['dbprefix'] = '';
$db['dbappraiser']['pconnect'] = FALSE;
$db['dbappraiser']['db_debug'] = TRUE;
$db['dbappraiser']['cache_on'] = FALSE;
$db['dbappraiser']['cachedir'] = '';
$db['dbappraiser']['char_set'] = 'utf8';
$db['dbappraiser']['dbcollat'] = 'utf8_general_ci';
$db['dbappraiser']['swap_pre'] = '';
$db['dbappraiser']['autoinit'] = TRUE;
$db['dbappraiser']['stricton'] = FALSE;

$db['dbslave1']['hostname'] = '10.189.252.48';
$db['dbslave1']['username'] = 'ascopedb_user';
$db['dbslave1']['password'] = 'Asc0p3+DBPass)(-';
$db['dbslave1']['database'] = 'as_staging';
$db['dbslave1']['dbdriver'] = 'mysql';
$db['dbslave1']['dbprefix'] = '';
$db['dbslave1']['pconnect'] = FALSE;
$db['dbslave1']['db_debug'] = FALSE;
$db['dbslave1']['cache_on'] = FALSE;
$db['dbslave1']['cachedir'] = '';
$db['dbslave1']['char_set'] = 'utf8';
$db['dbslave1']['dbcollat'] = 'utf8_general_ci';
$db['dbslave1']['swap_pre'] = '';
$db['dbslave1']['autoinit'] = TRUE;
$db['dbslave1']['stricton'] = FALSE;
/***********************************************************
* Following vars are used for QB integrations.
* Do not remove.
***********************************************************/
if(!defined('QB_DSN'))
{
define('QB_DSN', $db[$active_group]['dbdriver'].'://'.$db[$active_group]['username'].':'.$db[$active_group]['password'].'@'.$db[$active_group]['hostname'].'/'.$db[$active_group]['database']);
}

/* End of file database.php */
/* Location: ./application/config/database.php */
