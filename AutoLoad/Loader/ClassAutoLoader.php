<?php
namespace Loader;

class ClassAutoLoader
{
    static function autoload($class)
    {
        //根据传入的类名自动去找对于的类文件
        require BASEDIR.'/'.str_replace('\\', '/', $class).'.php';
    }
}