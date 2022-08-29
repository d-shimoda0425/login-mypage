<?php
session_start();
if(isset($_SESSION['id'])){
    header("Location:mypage.php");
}
?>

<!DOCTYPE HTML>
<html lang="ja">
<head>
        <meta charset="UTF-8">
        <title>マイページ登録</title>
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>
    <body>
        <header>
            <img src="4eachblog_logo.jpg">
            <div class="login"><a href="login.php">ログイン</a></div>
        </header>

        <main>
            
        <form action="mypage.php" method="post">
            <div class="form_contents">
                <p>メールまたはパスワードが間違っています。</p>
                <div class="mail">
                    <label>メールアドレス</label><br>
                    <input type="text" class="formbox" name="mail" size="40"><br>
                </div>              
                <div class="password">
                    <label>パスワード</label><br>
                    <input type="password" class="formbox" name="password" size="40"><br>
                </div>
                <div class="hoji">
                    <input type="checkbox" class="hoji" name="login_keep" value="login_keep">ログイン状態を保持する
                </div>
                <div class="toroku">
                    <input type="submit" class="button" value="ログイン">
                </div>
            </div>
        </form>
        </main>
        <footer>
            &copy;2018 InterNous.inc. All rights reserved
        </footer>
    </body>
</html>