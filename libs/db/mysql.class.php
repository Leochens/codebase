<?php 

/**
* 数据库操作类
* 包括
*     初始化
*     添加
*     更新
*     删除
*     查找
*/
class mysql 
{
    
    /**
     * 错误处理函数
     * @param  [type] $err [description]
     * @return [type]      [description]
     */
    function err($err)
    {
        die("出现错误！".$err);
    }

    /**
     * 初始化连接函数
     * 
     * @param  [type] $cfg 配置数组 一个关联数组 键值对形式  包括 host user pwd  charset
     * @return  bool 连接是否成功
     */
    function connect($cfg)
    {
        extract($cfg);      //将数组变量还原
        if(!($con = mysql_connect($host,$user,$pwd)))   //连接数据库 失败返回错误码
                $this->err(mysql_error());
        if(!(mysql_select_db($dbname,$con)))            //选择数据库 失败返回
                $this->err(mysql_error());  
        mysql_query('set names '.$charset);             //设置数据库编码 utf8

    }

    /**
     * 执行sql语句
     * @param  [type] $sql sql语句
     * @return [type]      成功返回资源 失败返回错误
     */
    function query($sql)
    {
        if(!($res=mysql_query($sql)))
            $this->err($sql.'<br>'.mysql_error());
        else
            return $res;
    }

    
    /**
     * 返回一个资源的数组形式
     * @param  [type] $res 资源
     * @return [type]      [description]
     */
    function findAll($res)
    {
        $list=array();
        while($rs=mysql_fetch_array($res,MYSQL_ASSOC))  //mysql_fetch_array 把资源转化为数组 每次转化一行
            $list[]=$rs;                        //将转化完的数组项赋值给list
        //print_r($list);
        return isset($list)?$list:'';           //判断list是否为空 不为空返回list  为空返回一个空串
    }
    /**
     * findOne 一次只取得一条数据
     * @param  [资源] $res [接受资源符 返回该资源的额一条数据]
     * @return [数组项]   一条数据   
     */
    function findOne($res)
    {
        $rs=mysql_fetch_array($res,MYSQL_ASSOC);
        return $rs;
    }

    /**
     * 获得指定行指定字段的值
     * @param  [type]  $res   [mysql_query执行返回的资源]
     * @param  integer $row   [行]
     * @param  [type]  $field [字段(列)]
     * @return [type]         [返回这个结果]
     */
    function findResult($res,$row=0,$field)
    {
        $rs=mysql_result($res, $row,$field);
        return $rs;
    }

    /**
     * 添加数据的函数
     * @param  [type] $table [待添加数据的表名]
     * @param  [type] $arr   [关联数组 包括各个字段和它对应的值]
     * @return [type]        [返回插入的一行的主键的值]
     */
    function insert($table,$arr)
    {
        //制作key表和value表 目的是解决一一对应和拼接sql语句时很复杂的问题
        foreach ($arr as $key => $value) {
            $value = mysql_real_escape_string($value);      //对有害字符进行转义化 
            $keylist[]='`'.$key.'`';        //使用右引号 防止key中有关键词
            $valuelist[]="'".$value."'";    //值加上单引号
        }

        //将key和value数组变成字符串形式 项与项之间用逗号分隔
        $keys=implode(',',$keylist);
        $values=implode(',',$valuelist);

        //制作 插入sql 语句
        $sql= "INSERT INTO ".$table."(".$keys.") VALUES(".$values.")";  //将多个字段一一对应插入
        $this->query($sql);         //向自身的query调用执行
        return mysql_insert_id();      //返回插入id
    }


    /**
     * 更新数据
     * @param  [type] $table [要更新的数据表]
     * @param  [type] $arr   [关联数组 一维数组 包含字段和值]
     * @param  [str] $where [在哪进行更新 条件]
     * @return [type]        [description]
     */
    function update($table,$arr,$where)
    {
        //update 表名 set 字段 = 值 where 条件;
        //
        
        foreach ($arr as $key => $value) {  //将每一个 ‘字段 = 值’ 打包成一个数组
            $value = mysql_real_escape_string($value);      //对有害字符进行转义化 
            $update_list[] = '`'.$key.'`'.'='."'".$value."'";
        }
        $up_list = implode(',',$update_list);   //化成字符串格式
        $sql = 'UPDATE '.$table.' SET '.$up_list.' where '.$where;//拼接sql语句
        $this->query($sql);     //执行
        return true;
    }



    /**
     * 删除操作
     * @param  表 $table 表名
     * @param  [type] $where 条件
     * @return     成功返回true 失败返回错误   
     */
    function delete($table,$where)
    {
        $sql = 'DELETE FROM '.$table.' where '.$where;
        $this->query($sql);
        return true;
    }
}



 ?>