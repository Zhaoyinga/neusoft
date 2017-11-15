<!DOCTYPE html>
<html>
<head>
	<title>注册</title>
	<meta charset="utf-8">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">
        <script src="js/bootstrap.js" type="text/javascript" ></script> 
        <script src="js/npm.js" type="text/javascript" ></script> 
</head>
<body>
	<div class="container" style="background: url(images/background.jpg);">
	<iframe src="header.php" frameborder="0" scrolling="no" style="width: 100%" ></iframe>
	<div class="row clearfix">
		<div class="col-md-4 column">
		</div>
		<div class="col-md-4 column">
			<form class="form-horizontal" role="form" action="php/registerPHP.php" style="margin-top: 50px" method="post">
				<div class="form-group">
					 <label for="inputEmail" class="col-sm-2 control-label">邮箱</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="inputEmail" name="name" />
					</div>
				</div>
				<div class="form-group">
					 <label for="inputage" class="col-sm-2 control-label">年龄</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="inputage" name="age" />
					</div>
				</div>
				<div class="form-group">
					 <label for="inputPassword" class="col-sm-2 control-label">密码</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" id="inputPassword" name="password" />
					</div>
				</div>
				<div class="form-group">
					 <label for="sex" class="col-sm-2 control-label">性别</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="sex" name="sex" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-5 col-sm-7">
						 <button type="submit" class="btn btn-default">注册</button>
					</div>
				</div>
			</form>
		</div>
		<div class="col-md-4 column">
		</div>
	</div><br><br><br>
	<iframe src="footer.php" frameborder="0" scrolling="no" style="width: 100%" ></iframe>
</div>
</body>
</html>