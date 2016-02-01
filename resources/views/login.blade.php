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
			用户名：<input type="text" name="name"/><br /><br />
			密　码：<input type="password" name="passwd"/><br /><br />
					<input type="submit" value="login">
		</form>	
	</div>
	
</body>
</html>