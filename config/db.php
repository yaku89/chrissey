<?php
/**
 * Database Configuration
 *
 * All of your system's database connection settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/DbConfig.php.
 *
 * @see craft\config\DbConfig
 */

 $url = getenv('JAWSDB_URL');

 $dbparts = parse_url($url);

 return array(
   'server' => $dbparts['host'],
   'user' => $dbparts['user'],
   'password' => $dbparts['pass'],
   'database' => ltrim($dbparts['path'],'/'),
   'tablePrefix' => 'craft',
   
 );
