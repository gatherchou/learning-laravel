<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<style type="text/css">
	.container {
		position: absolute;
		top: 50%;
		left: 50%;
		margin-top: -120px;
		margin-left: -150px;
	}
	</style>
</head>
<body>
	<div class="container">
		<h1><?php echo $title; ?></h1>
		<form method="post">
			用户名　：<input type="text" name="name"/><br /><br />
			密　码　：<input type="password" name="passwd"/><br /><br />
			密码确认：<input type="password" name="repasswd"/><br /><br />
			电子邮件：<input type="email" name="email"/><br /><br />
					<input type="submit" value="sign up">
		</form>	
		<?php 
		if($message){
			echo $message;
		}

		 ?>
	</div>
	
</body>
</html>