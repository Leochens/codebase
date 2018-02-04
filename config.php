<?php 

//配置文件

$config=array(
    'dbconfig'=>array(            //数据库配置

        'host'=>'127.0.0.1',
        'user'=>'root',
        'pwd'=>'178463',
        'dbname'=>'codebase',
        'charset'=>'utf8'
    ),  
    'viewconfig'=>array(          //视图引擎配置

        'left_delimiter'=>"{" ,  //左定界符
        'right_delimiter'=>"}",   //右定界符
        'template_dir'=>"tpl",    //HTML模板目录
        'compile_dir'=>'template_c',  //编译后文件存放的目录 
        'cache_dir'=>'cache'
    )
);

//smarty视图引擎通用模板变量
$universal=array(

    'time'=>time(),                                         //通用时间
    'TITLE'=>'我的代码库',                                     //首页主标题
   // 'LOGO1'=>'',                                //PC端logo
   // 'LOGO2'=>'',                         //移动端logo
   // 'adminTplPath'=>'tpl/admin/',                           //后台模板目录
    'copyright'=>'Copyright © 2018.张鹤麟 @ mokis.top All rights reserved.',   //版权

    /*后台*/

   // 'admin_title'=>'',  //后台的标题 
    //'admin_index'=>'',
   // 'admin_front_index'=>'',
   // 'admin_article_list'=>'',
    //'admin_add_article'=>'',
    //'admin_logout'=>'退出登录',

    /*路由*/
    'router_index_index'                =>'index.php',
   // 'router_admin_index'                =>'admin.php?controller=admin&method=index',
   // 'router_admin_login'                =>'admin.php?controller=admin&method=login',
   // 'router_admin_logout'                =>'admin.php?controller=admin&method=logOut',
   // 'router_code_codeDetail'      =>'index.php?controller=code&method=codeDetail&id=',
    'router_code_codeInsertUpdate'=>'index.php?controller=code&method=codeInsertUpdate&id=',
    'router_code_codeDelete'      =>'index.php?controller=code&method=codeDelete&id=',
    'router_code_codeShow'        =>'index.php?controller=code&method=codeShow',
    );


//


$GLOBALS['universal'] = $universal;

 ?>

