<?php

defined('BASEPATH') OR exit('No direct script access allowed');
$autoload['packages'] = [];
$autoload['libraries'] = ['session', 'database', 'email', 'parser', 'encryption', 'upload'];
$autoload['drivers'] = [];
$autoload['helper'] = ['form', 'url', 'html', 'file', 'Component_helper', 'Date_helper', 'Encrypt_Helper', 'AccessControl'];
$autoload['config'] = [];
$autoload['language'] = [];
$autoload['model'] = ['Main'];
