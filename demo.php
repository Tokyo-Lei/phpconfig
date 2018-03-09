<?php
/**
 * Created by PhpStorm.
 * User: wolferhua
 * Date: 18-3-9
 * Time: 下午5:48
 */

require_once "vendor/autoload.php";

define('PHP_CONFIG_PATH',__DIR__.'/test/');

$Config = new Config();
$Config->load(PHP_CONFIG_PATH.'config.php');

var_dump($Config->get('app.test'));