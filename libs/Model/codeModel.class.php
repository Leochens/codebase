<?php 

class codeModel {

    private $table = 'code';


    public function codeDelete($id)
    {
            if (DB::delete($this->table,' id = '.$id))
                return true;
            else
                return false;
    }
    public function codeShow()
    {
        $sql = 'SELECT * FROM '.$this->table;

        return DB::findAll($sql);
    }
    public function codeSingle($id)
    {
        $sql = "SELECT * FROM ".$this->table." where id  = ".$id;  
        return DB::findOne($sql);
    }
    public function codeSub($data)
    {
            extract($data); //恢复变量
            if(empty($code_content)||empty($title))  //没有title和内容不行
                return 0;
            //转义 安全
            $title= addslashes($title);
            $author=addslashes($author);
            $code_content=htmlentities($code_content);
            //$code=addslashes($tags);
            //$r_id= intval($r_id);       //relations里面的id
            //$pic_path=addslashes($pic_path);
            $data=array(
                'title'=>$title,
                'author'=>$author,
                'code_content'=>$code_content,
                'tag'=>$tag,
                'time'=>time(),
 
            );
            //echo $data['content'];
            if($_POST['id']!='')    //如果id不是空 那么说明要修改
            {
                DB::update($this->table,$data,'id = '.$_POST['id']);
                return 2;
            }else{                  //id为空 则是添加操作
                DB::insert($this->table,$data);
                return 1;
            }
    }
}

 ?>