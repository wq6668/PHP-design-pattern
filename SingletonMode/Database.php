<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/4/19
 * Time: 11:41
 */
namespace SingletonMode;

class Database
{
    private static $db;

    private function __construct()
    {

    }

    static function getInstance(){
        if(self::$db){
            echo 'a<br/>';
            return self::$db;
        }else{
            echo 'b<br/>';
            self::$db=new self();
            return self::$db;
        }
    }

}