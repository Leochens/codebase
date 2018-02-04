<?php 
/**
 * 
 */
 class  adminModel      //
 {

    public  $table ='user';      //定义表名
    function findOne_by_username($username)//通过用户名获取用户信息
    {
        $sql = 'SELECT * FROM '.$this->table." WHERE username =  '".$username."'";
        return DB::findOne($sql);
    }

    

    //用户密码核对 auth模型
    
    //



 } 



 ?>