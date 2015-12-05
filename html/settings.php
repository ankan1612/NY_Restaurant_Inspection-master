<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$db = mysql_connect('localhost','root','ankan');
if(!$db){
	die('Could not connect to ' .mysql_error());
}
$db_selected = mysql_select_db('project2_4', $db);
if(!$db_selected){
	die('Can\'t use '.'Project2_4'.': ' .mysql_error());
}

