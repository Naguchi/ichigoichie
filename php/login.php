<?php
if (!empty($post["login_id"]) && (!empty($post["login_password"]))) {
	$login_id = $post["login_id"];
	$login_password = $post["login_password"];
	$login_password = md5($login_password);

	$user_id = login_test($login_id, $login_password);
	if ($user_id) {
		$_SESSION["user_id"] = $user_id;
	} else {
		echo "ログイン失敗";
	}

}

if (!isLogged()) { ?>
	<form method="post">
	<table class="nolattice">
		<tr>
			<th><span>ID</span></th>
			<th><span>パスワード</span></th>
			<th><span>ログイン</span></th>
		</tr>
		<tr>
			<th><input name="login_id" type="text"></th>
			<th><input name="login_password" type="password"></th>
			<th><input type="submit" value="ログインする"></th>
		</tr>
	</table>
	</form>
<?php
	exit();
}
?>