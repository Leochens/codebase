<?php 
/**
 * 视图引擎工厂类
 */

class VIEW{


    public static $view;
    /**
     * 视图引擎初始化及配置 
     * @param  [type] $viewType 引擎类型
     * @param  [type] $config   关联数组
     * @return [type]           
     */
    public static function init($viewType,$config)
    {
        self::$view = new $viewType;
        foreach ($config as $key => $value) {
            self::$view->$key = $value;
        }
    }   


    /**
     * 视图引擎的变量注册函数
     * @param  [type] $data 关联数组 （变量名，值）
     * @return [type]       
     */
    public static function assign($data)
    {
        foreach ($data as $key => $value) {
            self::$view->assign($key,$value);
        }
    }

    public static function display($tpl)
    {
        
        self::$view->display($tpl);
    }
}   


 ?>