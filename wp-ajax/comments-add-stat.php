<?php
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/../');

require_once(ABSPATH . 'wp-config.php');
mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
mysql_select_db(DB_NAME);

$query = 'INSERT INTO `wp-comments-stat` SET ip="'.$_SERVER['REMOTE_ADDR'].'", time="'.time().'"';

mysql_query($query);

echo 'ok - '.$query;