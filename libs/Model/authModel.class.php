<?php 
/**
* auth模型：进行用户的核对
*/
class authModel
{
    private $auth = ''; //保存当前登录管理员的信息
    public function loginSubmit()   //进行登录验证的一系列业务逻辑
    {
        if(empty($_POST['username'])||empty($_POST['password']))
            return false;
        $username = addslashes($_POST['username']); 
        //$password = addslashes($_POST['password']);
        $password = md5(addslashes($_POST['password']));
        
        //用户验证操作 到checkuser方法
        if($this->auth=$this-> checkuser($username,$password))
        {
            $_SESSION['auth'] = $this->auth;
           
            return true;
        }else
            return false;
    }    


    function checkuser($username,$password)
    {
        $adminobj = M('admin');
        $auth = $adminobj->findOne_by_username($username);
        if(!empty($auth)&&$auth['password']==$password)
        {
            return $auth;
        }else return false;

    }

    public function getAuth()
    {
        return $this->auth;
    }

    public function logOut()
    {
        unset($_SESSION['auth']);
        //$_SESSION['auth'] = '';
        $this->auth='';
    }


    function __construct()
    {
        if(isset($_SESSION['auth'])&&!empty($_SESSION['auth']))
        {
            $this->auth = $_SESSION['auth'];
        }
    }
}


 ?>