<?php 


/**
*   
*/
class indexController extends CONTROLLER
{

 
    public function index()
    { 
        //核心 ： 获得数据之后填充数据
        $indexobj = M('index');
        VIEW::assign(array(
         'index_title'=>'zhl',
         'what'=>'add.html'
        ));

        VIEW::display('tpl/index.html');
    }


}

 ?>