<?php
/* Smarty version 3.1.30, created on 2018-02-04 20:55:36
  from "C:\Users\11834\Desktop\study\codebase\tpl\show.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7702c8991b51_34334463',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7680f720cb824543a451bb27ea38f666741bb0b2' => 
    array (
      0 => 'C:\\Users\\11834\\Desktop\\study\\codebase\\tpl\\show.html',
      1 => 1517748667,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a7702c8991b51_34334463 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item_list']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>

<div class="container col-lg-8 col-lg-offset-2">
<div class="panel panel-info">
    <div class="panel-heading">
        <span class="h4"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</span >&nbsp;&nbsp;&nbsp;
        <span> <small class="badge"><?php echo $_smarty_tpl->tpl_vars['item']->value['tag'];?>
</small><i class="icon-tag"></i></span>
    </div>
    <div class="panel-body">
        <div class="container-fluid col-lg-12">
            <pre><code>
           <?php echo $_smarty_tpl->tpl_vars['item']->value['code_content'];?>

            </code></pre>
        </div> 
        </div>
        <div class="container-fluid "> 
        <a href="<?php echo $_smarty_tpl->tpl_vars['router_code_codeInsertUpdate']->value;
echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="btn btn-primary">编辑</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['router_code_codeDelete']->value;
echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="btn btn-danger">删除</a>

        </div>
    </div>
    
</div>

</div>

<?php
}
} else {
?>

<div class="container col-lg-8 col-lg-offset-2">
<div class="panel panel-info">
    <div class="panel-heading">
        <span class="h4">暂时没有代码哦</span >&nbsp;&nbsp;&nbsp;
        <span> <small class="badge">NoTag</small> <i class="icon-tag"></i></span>
    </div>
    <div class="panel-body">
        <div class="container-fluid col-lg-12">
            <pre><code>
           哇~什么都没有..
            </code></pre>
        </div>
        </div>
        <div class="container-fluid "> 
        <a href="#" class="btn btn-primary">编辑</a>
        <a href="#" class="btn btn-danger">删除</a>
   
        </div>
    </div>
    
</div>

</div>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


<?php }
}
