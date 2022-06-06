<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<title>フォーム入力</title>
	<link href="" rel="stylesheet">
</head>

<body>
	<div>
		<form action="result.php" method="post">
			名前:<input type="text" name="my_name" />
			<br>
			メールアドレス:<input type="email" name="email" />
			<br>
			パスワード:<input type="password" name="password" />
			<br>
			<input type="submit" value="送信" />
		</form>

		<?php
$my_name =$_POST['my_name'];
$email=$_POST['email'];
$password =$_POST['password'];
var_dump($_POST);
?>
		<p>私の名前は、<?php echo $my_name; ?></p>
		<p>私のメールアドレスは、<?php echo $email;?></p>
		<p>私のパスワードは、<?php echo $password;?></p>
	</div>
</body>

</html>
