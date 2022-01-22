<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('../config.php');

$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
	'dsn'	=> '',
	'hostname' => DB_HOST,
	// 'username' => 'codeglam_codecan',
	// 'password' => 'Pakistan@123+-',
	// 'database' => 'codeglam_demotest',
	'username' => DB_USER,
	'password' => DB_PASS,
	'database' => DB_NAME,
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
