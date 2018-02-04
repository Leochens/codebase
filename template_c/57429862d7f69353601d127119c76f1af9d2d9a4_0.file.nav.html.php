<?php
/* Smarty version 3.1.30, created on 2018-02-04 20:42:50
  from "C:\Users\11834\Desktop\study\codebase\tpl\nav.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a76ffcada8595_65913388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57429862d7f69353601d127119c76f1af9d2d9a4' => 
    array (
      0 => 'C:\\Users\\11834\\Desktop\\study\\codebase\\tpl\\nav.html',
      1 => 1517747857,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a76ffcada8595_65913388 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php?controller=code&method=codeShow">代码仓库</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse  navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">添加</a></li>
                <li><a href="#">Link</a></li>
            </ul>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="查找代码">
                </div>
                <button type="submit" class="btn btn-default">查</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">分类 <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">C</a></li>
                        <li><a href="#">C++</a></li>
                        <li><a href="#">python</a></li>
                        <li><a href="#">php</a></li>
                    </ul>
                </li>
            <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">我 <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">信息</a></li>
                        <div class="divider"></div>
                        <li><a href="#">信息</a></li>

                    </ul>
                </li>                
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>

<?php }
}
