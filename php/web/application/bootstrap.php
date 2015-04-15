<?php


require 'core/classloader.php';

$loadear = new ClassLoader();
$loader -> registerdir(dirname(__FILE__).'/core');
$loader -> registerdir(dirname(__FILE__).'/models');
$loader -> register();


