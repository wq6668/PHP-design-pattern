<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/4/19
 * Time: 13:31
 */

define('BASEDIR', __DIR__);
include BASEDIR.'/Database.php';

$db1 = \SingletonMode\Database::getInstance();
//不管我调用多少次，最终只会创建一个对象
//$db2 = \SingletonMode\Database::getInstance();
//$db3 = \SingletonMode\Database::getInstance();
//$db4 = \SingletonMode\Database::getInstance();
