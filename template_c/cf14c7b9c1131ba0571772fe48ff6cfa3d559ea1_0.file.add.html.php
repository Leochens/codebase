<?php
/* Smarty version 3.1.30, created on 2018-02-04 20:55:31
  from "C:\Users\11834\Desktop\study\codebase\tpl\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7702c35c2c55_91347953',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf14c7b9c1131ba0571772fe48ff6cfa3d559ea1' => 
    array (
      0 => 'C:\\Users\\11834\\Desktop\\study\\codebase\\tpl\\add.html',
      1 => 1517748928,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a7702c35c2c55_91347953 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container-fluid col-lg-8 col-lg-offset-2">
    <form action="<?php echo $_smarty_tpl->tpl_vars['router_code_codeInsertUpdate']->value;?>
" class="form-group " method="POST" role="form">
        <legend>新增代码</legend>
        <div class="form-inline   ">
            <div class=" form-group">
                <label for="">标题</label>
                <input type="text" name="title" class="form-control "  value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['title'])===null||$tmp==='' ? '' : $tmp);?>
" id="" placeholder="Input field">
            </div>
            
            <div class="form-group">
                <label for="">作者</label>
                <input type="text" name="author" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['author'])===null||$tmp==='' ? '张鹤麟' : $tmp);?>
" class="form-control" id="" placeholder="Input field">
            </div>
            <div class="form-group">
                <label for="">分类</label>
                <input type="text" name="" class="form-control" id="" value="默认分类" placeholder="Input field">
            </div> 
            <div class="form-group">
                <label for="">标签</label>
                <input type="text" name="tag" value="code" class="form-control" id="" placeholder="Input field">
            </div>                 
        </div>
        <br>
        <div class=" form-group ">
            <label for="">代码</label>
            <textarea type="text" rows="10" name="code_content" class="code_content input-lg form-control " id="" placeholder="来收藏喜欢的代码吧~"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['code_content'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="存入" ></input>
        <input type="hidden" name="id" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['id'])===null||$tmp==='' ? '' : $tmp);?>
">
        <a type="button" class="btn btn-info">仓库</a>
    </form>
</div><?php }
}
