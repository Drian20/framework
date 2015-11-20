<?php
	//first phase
	ini_set('display_errors','on');

	define('DS',DIRECTORY_SEPARATOR);
	define('ROOT',realpath(dirname(__FILE__)).DS);
	//to access filesystem
	define('APP',ROOT.'app'.DS);
	define('APP_W',basename(dirname($_SERVER['SCRIPT_NAME'])));
	// it could be in another file
	/*echo DS.'</br>';
	echo ROOT.'</br>';
	echo APP.'</br>';
	echo APP_W.'</br>';*/
	// echo $_SERVER['REQUEST_URI'];
	require 'sys/core.php';
	Core::init();
?>