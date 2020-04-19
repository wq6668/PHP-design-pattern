<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/4/19
 * Time: 13:04
 */

define('BASEDIR', __DIR__);
include BASEDIR.'/Factory.php';
include BASEDIR.'/Database.php';

//常规方法获取$db对象,需要new他的类
//假如很多地方都需要用到Database对象，我需要new很多次
//以后如果Database对象修改了名字或相关参数，那么我对应的地方都需要进行修改
//$db = new \Factory\Database();


//使用工厂方法获取Database对象的好处在于以后我修改了类名或相关参数，只需要在工厂方法中修改一次即可
$db = \Factory\Factory::createdatabase();

