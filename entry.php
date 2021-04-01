<?php
session_start();

try {
 $pdo = new PDO('mysql:dbname=boo_db;charset=utf8;host=localhost','root','root');
 } catch (PDOException $e) {
 exit('データベースに接続できませんでした。'.$e->getMessage());
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="entry.css" />

    <title>Booker アカウント作成</title>
</head>
<body>
<header>
     <div class="header-logo">Booker</div>
</header>
    
　　<main class="main">
     <div class="entry">
        <h1>アカウントの作成</h1>
        <p>次のフォームの必須の欄を記入してください。</p>　
        <form action="check.php" method="POST">

         <!-- 名前 -->
         <p>ユーザーネーム</p>
         <input type="text" name="user_name"placeholder="名前入力" required ><br>

         <!-- ID -->
         <p>ユーザーID</p>
         <input type="text" name="user_id"placeholder="ユーザーID" required><br>

         <!-- パスワード -->
         <p>パスワード</p>
         <input type="text" name="user_pw"placeholder="パスワード" required ><br>

         <!-- 送信ボタン -->
         <input type="submit" value="登録する">
         <p><a href="login.php">アカウントを既にお持ちの方はこちら</a></p>
        </form>
    </div>       
    </main>
</body>
</html>