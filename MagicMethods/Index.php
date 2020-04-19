<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/4/19
 * Time: 12:29
 */
define('BASEDIR', __DIR__);
include BASEDIR.'/Obj.php';

$obj = new MagicMethods\Obj();

//会自动调用obj->__set()方法
$obj->title="this is title";
//会自动调用obj->__get()方法
echo $obj->title;

//getName方法不存在，会自动调用obj->__call方法
$obj->getName('123','456');

//静态方法getName不存在，会自动调用obj->__callStatic方法，__callStatic方法也必须是静态的
$obj::getList('123','456');

//当输出一个对象时，对象本身是不能输出的，对象会先转换成字符串，这时会自动调用__toString()方法
echo $obj;

//当把一个对象当作一个函数调用时会自动调用__invoke方法
echo $obj('test');

