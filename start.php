<?php 
//启动程序
ini_set('default_charset','utf-8');
header("Content-Type:text/html;charset=utf-8");
date_default_timezone_set('Asia/Shanghai'); //设置时区
$curdir=dirname(__FILE__);      //获得当前目录
include './include.list.php';    //获得清单
foreach ($path as $item) {
    include_once $curdir.'/'.$item;      //依次引入
}

class START{        //启动类

    //初始化数据库
    public static $db;
    public static $view;
    public static $controller;
    public static $method;
    public static $config;

    public static function init_db()
    {
        DB::init('mysql',self::$config['dbconfig']);
    }
    
    //初始化视图引擎
    public static function init_view()
    {
        VIEW::init('Smarty',self::$config['viewconfig']);
    }
    //初始化控制器
    public static function init_controller()
    {
        self::$controller = isset($_GET['controller'])?daddslashes($_GET['controller']):'index';
    }
    
    //初始化方法
    public static function init_method()
    {
        self::$method = isset($_GET['method'])?daddslashes($_GET['method']):'index';
    }
    
    public static function Run($config)
    {
        self::$config=$config;
        self::init_db();
        self::init_view();
        self::init_controller();
        self::init_method();

        C(self::$controller,self::$method);
    }
}



