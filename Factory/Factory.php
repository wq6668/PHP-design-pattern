<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/4/19
 * Time: 13:01
 */
namespace Factory;

class Factory
{
    public static function createdatabase(){
        $db = new Database();
        return $db;
    }
}