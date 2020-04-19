<?php

define('BASEDIR', __DIR__);
include BASEDIR.'/Loader/ClassAutoLoader.php';
//如果Test1或Test2不存在，自动调用ClassAutoLoader类下的autoload方法
spl_autoload_register('\\Loader\\ClassAutoLoader::autoload');

\Loader\Test1::test();
\Loader\Test2::test();

