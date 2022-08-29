<?php 
mb_internal_encoding("utf8");

session_start();

if(empty($_POST["from_mypage"])){
    header("Location:login_error.php");
}
?>

<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>マイページ</title>
        <link rel="stylesheet" type="text/css" href="mypage.css">
    </head>
    <body>

        <header>
            <img src="4eachblog_logo.jpg">
            <div class="logout"><a href="log_out.php">ログアウト</a></div>
        </header>
        <main>
            <form action ="mypage_update.php" method="post" class="box">
                <div class="form_contents">
                    <h2>会員情報</h2>
                    <div>
                        <?php echo "こんにちは！".$_SESSION['name']."さん";?>
                    </div>
                    <div class="picture">
                        <img src="<?php echo $_SESSION['picture'];?>">
                    </div>
                    <div class="name">
                        <p>氏名：<input type="text" class="formbox" value="<?php echo $_SESSION['name'];?>" name="name">
                        </p>
                    </div>
                    <div class="mail">
                        <p>メール：<input type="text" class="formbox" value="<?php echo $_SESSION['mail'];?>" name="mail">
                        </p>
                    </div>
                    <div class="password">
                        <p>パスワード：<input type="text" class="formbox" value="<?php echo $_SESSION['password'];?>" name="password">
                        </p>
                    </div>
                    
                    <div class="comments">
                        <p>コメント：
                            <textarea class="formbox" name="comments"><?php echo $_SESSION['comments'];?>
                            </textarea>
                        </p>
                    </div>
                    <div class="toroku">
                        <input type="submit" class="button" value="編集する">
                    </div>
                </div>
            </form>
        </main>
        <footer>
            &copy;2018 InterNous.inc. All rights reserved
        </footer>
    </body>
</html>