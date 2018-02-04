<?php 
class codeController extends CONTROLLER{

    private $table = 'code';

    private $cfg;

    public function codeInsertUpdate()
    {
        $obj=M('code');
               
        $data=array();
        if(empty($_POST))   //如果没有post数据 那就在判断是否由id
        {
 
            ///$this->showMessage('无数据','{$router_index_index}');
            if(isset($_GET['id']))      //有id 就是修改
            { 
                $data=$obj->codeSingle($_GET['id']);    //获取单一的数据
            }else{
                $data=array();
            }
                //echo "debug";
                VIEW::assign(array('data'=>$data,'what'=>'add.html'));

                VIEW::display('tpl/index.html');
        }else{
            $this->codeSub();
        }
    }
    private function codeSub()
    {
        //$this->checkLogin();


        $res = M('code')->codeSub($_POST);
        if($res==0)
            $this->showMessage('操作失败,标题和内容不能为空。',
            $GLOBALS['universal']['router_code_codeInsertUpdate'].$_POST['id']);
        else if($res==1)
            $this->showMessage('添加成功',
            $GLOBALS['universal']['router_code_codeShow']);
            //'#');
            
        else if($res==2)
            $this->showMessage('修改成功',
            $GLOBALS['universal']['router_code_codeShow']);
            //'#');


    }
   
    public function codeDelete()
    {
        if(intval($_GET['id']))
        {
            
            $obj = M('code');
            if($obj->codeDelete($_GET['id']))
                $this->showMessage('删除成功',$GLOBALS['universal']['router_code_codeShow']);
                //$this->showMessage('删除成功','#');
            else
                $this->showMessage('操作失败',
                $GLOBALS['universal']['router_code_codeInsertUpdate'].$_GET['id']);            
        }                
    }

    public function codeShow()
    {
        $obj = M('code');
        $item_list = $obj->codeShow();
        //print_r($item_list);
        $this->cfg['item_list']=$item_list;
        $this->cfg['what']='show.html';
        VIEW::assign($this->cfg);
        VIEW::display('tpl/index.html');         
       
    }

   private function showMessage($info='未知错误', $url='#'){
        echo "<script>alert('$info');window.location.href='".$url."'</script>";
        
    }     
}


 ?>