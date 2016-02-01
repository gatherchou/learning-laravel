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
			ユーザ名　：<input type="text" name="name"/><br /><br />
			パスワード：<input type="password" name="password"/><br /><br />
					<input type="submit" value="login">
		</form>	
	</div>
	
</body>
</html>