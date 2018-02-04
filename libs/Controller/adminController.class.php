<?php 

class adminController extends CONTROLLER{


    public $auth='';


    public function __construct()
    {
        VIEW::assign($GLOBALS['universal']);   
        //判断当前是否已经登录->auth模型
        $authobj = M('auth');
        $this->auth = $authobj->getAuth();
        //不在登录页并且没有登录，就要跳转到登录页面
        if(empty($this->auth)&&START::$method!='login')
        {
            $this->showMessage('请登录后再操作','{$router_admin_login}');
        }

    }
    public function index()
    {
        

    }
   

    public function login()
    {

        if($_POST)
        {
            //登录处理
            //业务逻辑放在 admin auth
            //admin同表名的模型：从数据库里读取信息
            //auth模型：进行用户的核对
            //-->把一系列的登录处理操作放在新的方法里去处理
            $this->checkLogin();
        }else   //如果没有post数据 就显示登录界面
        {
            VIEW::display('tpl/admin/login.html');
        }
    }


    public function logOut()
    {
        $authobj = M('auth');
        $authobj->logOut();
        $this->showMessage('退出成功','{$router_admin_login}');
    }

    

 

/******************************************/
    
    private function checkLogin()
    {
        $authobj = M('auth');   //实例化 auth模型
       
        if($authobj->loginSubmit()){
           
            $this->showMessage("登录成功!",'{$router_admin_index}');
            exit();
        }else{
            $this->showMessage("登录失败!",'{$router_admin_login}');
            exit();

        }
    }
    private function showMessage($info, $url){
        echo "<script>alert('$info');window.location.href='$url'</script>";
        exit;
    }    
}

 ?>