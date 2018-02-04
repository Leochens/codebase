<?php 

/**
*   核心类 控制器
*   再加入新的控制器的时候 一定要继承此父类
*
*   1.此父类可以给视图引擎注册全局通用变量
*   2.
*/
class CONTROLLER 
{
    
 public function __construct()
    {
        //配置全局模板变量
        VIEW::assign($GLOBALS['universal']);   
    }
}
 ?>