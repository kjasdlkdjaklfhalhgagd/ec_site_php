<html>
<head>
<title>{$title}</title>
</head>
<!-- ユーザー新規作成用フォーム -->
<body>

<h1>{$h1_name}</h1>
	<form action="{$materiaru}" method="post">
	name:<input name="name"><br>
	id:<input name="id"><br>
	password:<input type="password" name="pass"><br><br>
	<input type="submit" value="{$botton}">
	</form>

</body>
</html>