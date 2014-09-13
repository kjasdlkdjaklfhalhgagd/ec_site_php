<html>
<head>
<title>{$title}</title>
</head>

<!-- 商品検索用フォーム -->
<body>

<h1>{$h1_name}</h1>
<form action="{$materiaru}" method="post">
	商品番号:<input name="item_number"><br>
	商品名:<input name="item_name"><br>
	商品金額:<input name="item_price"><br>
	商品詳細情報:<input name="item_description"><br><br>
	<input type="submit" value="登録">
	</form>
</body>
</html>