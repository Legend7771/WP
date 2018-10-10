<?php
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/../');

require_once(ABSPATH . 'wp-config.php');
mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
mysql_select_db(DB_NAME);

$query = 'SELECT * FROM `wp-comments-stat`';

$res=mysql_query($query);

while ($line = mysql_fetch_assoc($res))
{
	echo '<br/> IP:'.$line['ip'].' time:'.date('Y.m.d h:s:i',$line['time']);
}
