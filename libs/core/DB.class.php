<?php 
/**
 * 数据库操作的工厂类
 * 
 */

class DB{

    public static $db;      //用来存放实例化的db

    public static function init($dbtype,$config)
    {
        self::$db=new $dbtype;
        self::$db->connect($config);
    }

    public static function query($sql)
    {
        return self::$db->query($sql);   
    }

    public static function insert($table,$arr)
    {
        return self::$db->insert($table,$arr);   
    }

    public static function update($table,$arr,$where)
    {
        return self::$db->update($table,$arr,$where);   
    }

    public static function delete($table,$where)
    {
        return self::$db->delete($table,$where);   
    }

    public static function findAll($sql)
    {
        $res =self::$db->query($sql);   
        return self::$db->findAll($res);
    }

    public static function findOne($sql)
    {
        $res =self::$db->query($sql);   
        return self::$db->findOne($res);
    }

    public static function findResult($sql,$row,$field )
    {
       
        $res =self::$db->query($sql);   
        return self::$db->findResult($res,$row,$field);
    }
}



 ?>