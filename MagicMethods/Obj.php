<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/4/19
 * Time: 12:29
 */

namespace MagicMethods;

class Obj
{

    protected $arr = array();
    //当对象调用的属性不存在时调用该方法
    public function __get($key){
        echo __METHOD__.'<br/>';
        return $this->arr[$key];
    }

    //当给不存在的对象属性赋值时调用该方法
    public function __set($key,$value){
        echo __METHOD__.'<br/>';
        $this->arr[$key]=$value;
    }

    /**
     * @param $name 方法名
     * @param $arguments 方法中传递的参数
     */
    public function __call($name, $arguments)
    {
        echo '<pre>';
        var_dump($name,$arguments);
    }

    /**
     * @param $name 方法名
     * @param $arguments 方法中传递的参数
     */
    static function __callStatic($name, $arguments)
    {
        echo '<pre>';
        var_dump($name,$arguments);
    }

    public function __toString()
    {
        return __CLASS__;
    }

    public function __invoke($param)
    {
        echo '<pre>';
        var_dump($param);
        return 'invoke';
    }

}