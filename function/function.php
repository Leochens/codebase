<?php 
function M($name)
{
    require_once './libs/Model/'.$name.'Model.class.php';

    $model = $name.'Model';
    $obj = new $model();
    return $obj;

}
function C($name,$method)
{
    require_once('./libs/Controller/'.$name.'Controller.class.php');
    //eval('$obj = new '.$name.'Controller(); $obj->'.$method.'();');
    //eval简单但是不安全
    $controller = $name.'Controller';
    $obj = new $controller();
    $obj->$method();
}
function V($name)
{
    require_once './libs/View/'.$name.'View.class.php';

    $view = $name.'View';
    $obj = new $view();
    return $obj;

}
function daddslashes($str)      //进行安全的符号转义
{
    return (!get_magic_quotes_gpc())?addslashes($str):$str;
}
function ORG($path,$name,$parmas=array())
{
    require_once 'libs/ORG/'.$path.$name.'.class.php';  //引入第三方库
    $obj = new $name;
    if(!empty($parmas))     //如果属性数组为空则不需要初始化
    {
        foreach ($parmas as $key => $value) {
            $obj->$key = $value;
        }
    }
    return $obj;    //将初始化的对象返回出去
}


