<!DOCTYPE html>
<html>	
<head>
	<meta charset="utf-8">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">
        <script src="js/bootstrap.js" type="text/javascript" ></script> 
        <script src="js/npm.js" type="text/javascript" ></script> 

	<title>东软校讯</title>
</head>
<body>
	<div class="container" style="background: url(images/background.jpg);">
	<iframe src="header.php" frameborder="0" scrolling="no" style="width: 100%" ></iframe>
	<div class="row clearfix">
		<div class="col-md-4 column">
		</div>
		<div class="col-md-4 column" style="margin-top: 50px">
			<form class="form-horizontal" role="form" action="php/loginPHP.php" method="post">
				<div class="form-group">
					 <label for="inputEmail" class="col-sm-2 control-label">邮箱</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="inputEmail" name="name" />
					</div>
				</div>
				<div class="form-group">
					 <label for="inputPassword" class="col-sm-2 control-label">密码</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" id="inputPassword" name="password" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<div class="checkbox">
							 <label><input type="checkbox" />请记住</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						 <button type="submit" class="btn btn-default">登录</button>
					</div>
				</div>
			</form>
		</div>
		<div class="col-md-4 column">
		</div>
	</div><br><br><br>
	<iframe src="footer.php" frameborder="0" scrolling="no" style="width: 100%"></iframe>
</div>
</body>
<script type="text/javascript">
    alert('账号或密码错误!');
</script>
</html>