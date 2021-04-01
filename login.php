<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="entry.css" />
    <title>Booker Login画面</title>
</head>
<body>
<header>
     <div class="header-logo">Booker</div>
</header>
 <main class="main">
     <div class="entry">
     　<h1>ログイン</h1>
     　<p>項目を入力してログインしてください。</p>
       <form action="login_act.php" method="POST"> 
           <p>ユーザーID</p>
           <input type="text" name="user_id"placeholder="ユーザーID" required ><br>
           <p>パスワード</p>
            <input type="text" name="user_pw"placeholder="パスワード" required><br>
            <input type="submit" value="Login">
            <p><a href="entry.php">アカウントをお持ちでお持ちでない方はこちら</a></p>
        </form>
      </div>
 </main>
</body>
</html>