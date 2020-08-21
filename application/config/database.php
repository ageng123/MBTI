<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$active_group = 'default';
$query_builder = true;

$db['default'] = [
    'dsn' => '',
    'hostname' => 'localhost',
    'username' => 'root',
<<<<<<< HEAD
    'password' => 'secret',
=======
    'password' => '',
>>>>>>> a0a695a3b6a41a16eb3f089a47e2910c7f01a38c
    'database' => 'maspriya_mbtni',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => false,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => false,
    'cachedir' => '',
    'char_set' => 'utf8mb4',
    'dbcollat' => 'utf8mb4_bin',
    'swap_pre' => '',
    'encrypt' => false,
    'compress' => false,
    'stricton' => false,
    'failover' => [],
    'save_queries' => true
];
