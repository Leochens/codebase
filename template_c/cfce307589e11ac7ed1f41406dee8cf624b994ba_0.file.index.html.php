<?php
/* Smarty version 3.1.30, created on 2018-02-04 20:29:46
  from "C:\Users\11834\Desktop\study\codebase\tpl\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a76fcbaf0f5a1_72701204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfce307589e11ac7ed1f41406dee8cf624b994ba' => 
    array (
      0 => 'C:\\Users\\11834\\Desktop\\study\\codebase\\tpl\\index.html',
      1 => 1517747384,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl/head_srcs.html' => 1,
    'file:tpl/nav.html' => 1,
    'file:tpl/footer.html' => 1,
    'file:tpl/js_srcs.html' => 1,
  ),
),false)) {
function content_5a76fcbaf0f5a1_72701204 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
</title>
    <?php $_smarty_tpl->_subTemplateRender("file:tpl/head_srcs.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</head>
<body>

<?php $_smarty_tpl->_subTemplateRender("file:tpl/nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php ob_start();
echo ('tpl/').($_smarty_tpl->tpl_vars['what']->value);
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable1, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php $_smarty_tpl->_subTemplateRender("file:tpl/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




<?php $_smarty_tpl->_subTemplateRender("file:tpl/js_srcs.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!--激活代码高亮-->
<?php echo '<script'; ?>
>hljs.initHighlightingOnLoad();<?php echo '</script'; ?>
> 
</body>
</html><?php }
}
