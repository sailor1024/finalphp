<?php
if(!isset($_SESSION)){
session_start();
}
	
require_once('../../config.php');
require_once(_COMMON_.'/db/conn.php');	
if(isset($_POST['submit'])){
	
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	
	
	//echo $user;
	//echo $pass;

	//header("Content-type:text/html;charset=utf-8");
	//@mysql_connect("localhost","root","") or die("服务器连接失败");
	//mysql_select_db("finalphp") or die("数据库不存在");
	//mysql_query("set names utf8");
	
	$sql="select * from fp_user where name='$user'";
	
	$r=$conn->query($sql);
	$num=$r->num_rows;
	
	
	if($num>0){
	while($row=$r->fetch_assoc()){
		$p=$row['pass'];
		
		}
	}
	if($p==$pass){
		$_SESSION['user']=$user;
		echo "<script>document.write('登录成功');location.href='index.php';</script>";
	
	}else{
		echo "<script>alert('用户名或密码错误！');history.go(-1);</script>";
	}
}else{
	echo "<script>alert('请先登录！');location.href='login.php';</script>";
}
?>