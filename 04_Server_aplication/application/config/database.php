<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$active_group = 'default';
$query_builder = TRUE;


// LOCAL
$db['default'] = array(
	'dsn'	=> '186.202.152.36',
	'hostname' => 'sodelivery.mysql.dbaas.com.br',
	'username' => 'sodelivery',
	'password' => 'Marc9951',
	'database' => 'sodelivery',
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


// ----- SITE
// $db['default'] = array(
// 	'dsn'	=> '',
// 	'hostname' => 'sodelivery.mysql.dbaas.com.br',
// 	'username' => 'sodelivery',
// 	'password' => 'vhwjJZhKd3jpnI',
// 	'database' => 'sodelivery',
// 	'dbdriver' => 'mysqli',
// 	'dbprefix' => '',
// 	'pconnect' => FALSE,
// 	'db_debug' => (ENVIRONMENT !== 'production'),
// 	'cache_on' => FALSE,
// 	'cachedir' => '',
// 	'char_set' => 'utf8',
// 	'dbcollat' => 'utf8_general_ci',
// 	'swap_pre' => '',
// 	'encrypt' => FALSE,
// 	'compress' => FALSE,
// 	'stricton' => FALSE,
// 	'failover' => array(),
// 	'save_queries' => TRUE
// );
