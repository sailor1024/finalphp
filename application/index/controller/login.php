
<?php
require_once('../../config.php');
   if(empty(session_start())){
 	session_start();
 }
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<!--定义font_awesome字体-->
	 <link rel="stylesheet" href="<?php echo _PUBLIC_;?>/static/assets/font-awesome-4.7.0/css/font-awesome.css"/>
	
		<title></title>
		<style type="text/css" >
			#l-center{
				width: 500px;
				height: 500px;
				margin: 50px auto;
				border: 1px solid darkgray;
				border-radius: 2px;
				padding: 10px;
			}
			#l-center #l-center-inner{
				width: 450px;
				margin: 0 auto;
			}
			 #l-center-inner .login-table{
				margin-top: 40px;
			}
			 #l-center-inner .login-table tr{
			 	display: block;
			 	padding: 5px;
			 	
			 	/*background: blue;*/
			 }
			#l-center-inner .login-table .two-td{
				
				border: 1px solid lightgreen;
				margin: 5px;
				padding-left: 5px;
			}
			
			 #l-center-inner .login-table input{
			 	
			 	height:40px ;
			 	width: 300px;
			 	margin: 10px;
			 	border: 0px;
			 	padding-left:5px ;
			 	background: #ffffff;
			 	font-size: 20px;
			 }
			  #l-center-inner .login-table .sub-td input{
			  	background: cornflowerblue;
			  	width: 200px;
			  /*	padding: 0px;*/
			  	margin-left: 60px;
			  }
		</style>
	</head>
	<body>
		<h1 style="color:green">管理系统登录中心</h1>
		<p style="height: 3px;background: green;"></p>
		<span id="hidd"></span>
		<div id="l-center" >
			<div id="l-center-inner">
				<h1 style="color:green">管理系统登录</h1>
				<p style="height: 3px;background: green;"></p>
				<form action="logindo.php" method="post" onsubmit='return check()'>
					<table border="0" cellspacing="0" cellpadding="0" class="login-table">
						<tr>
							<td>用户名：</td>
							<td class="two-td"><i class="fa fa-user" ></i><input  type="text" name='user' value="admin" placeholder="请输入你的用户名"/></td>
						</tr>
						<tr>
							<td style="padding-left: 10px;">密    码：</td>
							<td class="two-td"><i class="fa fa-key"></i><input type="password" name='pass' value="123" placeholder="请输入你的面"/></td>
						</tr>
						<tr style="display:none; ">
							<td>验证码：</td>
							<td><input type="text" oninput="keyupfunc()" id='checkkey' style="width: 100px; border:1px solid blue"/></td>
							<td ><img id="aaa" onmouseleave="keyupfunc()" src="checkcode.php" onclick="this.src='checkcode.php?id='+Math.random()"/></td>
						</tr>
						<tr>
							<td class="sub-td" colspan=""><input type="submit"  name="submit" value="登录"></td>
							<td><a href="">忘记密码？</a></td>
						</tr>
					</table>

				</form>	
					<button style="background: cornflowerblue;
			  	width: 200px;height:40px;margin:0 auto;margin-left: 60px;"><a href="">去注册</a></button>
					
				
			</div>
		</div>
	</body>
	<script>
		loadXMLDoc();
		
		function check(){
			var temp=document.getElementById('checkkey').value;
			//var num12="<?php echo $_SESSION['code']; ?>";
			if(temp==num){
				//alert("验证成功！");
				return true;
			}else{
				//alert("验证码错误！");
				//return false;
				return true;
			}
			
		}
		function keyupfunc(){
			loadXMLDoc();
			//var sum23="<?php echo $_SESSION['code']; ?>";
			//document.getElementById('hidd').innerHTML=sum23;
			//alert(sum23);
		}
		
	
		function loadXMLDoc()
{
	
	var xmlhttp;
	if (window.XMLHttpRequest)
	{
		//  IE7+, Firefox, Chrome, Opera, Safari 浏览器执行代码
		xmlhttp=new XMLHttpRequest();
	}
	else
	{
		// IE6, IE5 浏览器执行代码
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			
			num=xmlhttp.responseText;
			document.getElementById('hidd').innerHTML=num;
			//alert(num);
		}
	}
	xmlhttp.open("GET","p.php",true);
	xmlhttp.send();
	}

	</script>
</html>