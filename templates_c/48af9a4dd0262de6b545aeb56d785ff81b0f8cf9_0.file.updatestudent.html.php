<?php /* Smarty version 3.1.27, created on 2018-01-30 16:40:15
         compiled from "D:\Software\Win7\wamp64\wampserver3.0.6_x64\www\finalphp\application\index\view\updatestudent.html" */ ?>
<?php
/*%%SmartyHeaderCode:184825a709fef416a89_10134061%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48af9a4dd0262de6b545aeb56d785ff81b0f8cf9' => 
    array (
      0 => 'D:\\Software\\Win7\\wamp64\\wampserver3.0.6_x64\\www\\finalphp\\application\\index\\view\\updatestudent.html',
      1 => 1512207545,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184825a709fef416a89_10134061',
  'variables' => 
  array (
    'id' => 0,
    'sId' => 0,
    'sname' => 0,
    'sgender' => 0,
    'sclass' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a709fef5b8a62_68703735',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a709fef5b8a62_68703735')) {
function content_5a709fef5b8a62_68703735 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '184825a709fef416a89_10134061';
?>

<!-- 

 -->
 <style type="text/css">
	#updateid form input{
		padding: 5px;
		margin: 5px;
	}
	#updateid form input[type='submit']{
		background-color: #508af7;
		width: 100px;
	}
 </style>
 <br>
<div style="margin:50px;border:1px solid #2d4b4c;width:50%;" id="updateid">
	<h2 class="text-center">修改学生表</h2>
	<form action="updatestudentdo.php" method="post" class="text-center">

		<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" name="id" >
		<br>
		学号：<input  type="text" value="<?php echo $_smarty_tpl->tpl_vars['sId']->value;?>
" name="sId" 
		><br>
		姓名：<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['sname']->value;?>
"  name="sname" >
		<br>
		性别：<input style="margin-left:110px;" type="radio" value="男" name="sgender" <?php if (($_smarty_tpl->tpl_vars['sgender']->value == '男')) {?> checked='checked'<?php }?> >男&nbsp;
		<input type="radio" value="女" name="sgender" <?php if (($_smarty_tpl->tpl_vars['sgender']->value == '女')) {?> checked='checked'<?php }?> >女

		<!-- <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['sgender']->value;?>
" name="sgender"><br> -->
		<br>
		班级：<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['sclass']->value;?>
" name="sclass" ><br>
		<input type="submit" value="修改"  name="sub" >
	</form>

</div>

	
</body>
<?php echo '<script'; ?>
 type="text/javascript">

<?php echo '</script'; ?>
>
</html><?php }
}
?>