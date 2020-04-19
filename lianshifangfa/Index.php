<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/4/19
 * Time: 11:43
 */
define('BASEDIR', __DIR__);
include BASEDIR.'/Database.php';

//链式方法的实现
$db = new lianshifangfa\Database();
//链式方法最关键的点在于最后在return是一定要 return $this
//链式方法的好处在于一行代码可以解决下面四行代码所达到的功能，简化了开发
$db->where("id=1")->where("name=2")->order("id desc")->limit("10");

//传统操作方法需要每次调用方法
//$db->where("id=1");
//$db->where("name=2");
//$db->order("id desc");
//$db->limit(10);
