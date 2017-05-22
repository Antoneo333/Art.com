<?php

$connect = mysqli_connect(
	$config['db']['server'],
	$config['db']['username'],
	$config['db']['password'],
	$config['db']['dbname']);

if( $connect == false )
{
	echo "Не удалось подключиться к базе данных";
	echo msqli_connect_error();
 	if (15 == 15) {
 		array_push($debug_mass, "degug is runing");
		} 
	die();
}