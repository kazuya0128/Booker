<?php

// Loginのチェック
session_start();
if(!isset($_SESSION["chk_ssid"])|| $_SESSION["chk_ssid"]!=session_id()){
 echo "Loginしてください。";
 exit();
}else{
 session_regenerate_id(true);
 $_SESSION["chk_ssid"]=session_id();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Booker</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    
  </head>
  <body>
    <header>
      <div class="title-logo">Booker</div>
    </header>
 
    
  <main class="main">
    <div class="Regi"> 
      <form action="insret.php" method="POST">
         <h1>本の登録</h1>
    　　　<input type="text" name="name"placeholder="本のタイトル" required />
          <p>本の評価を５段階で入力してください。</p>
          <input type="radio" name="review" value="1" required />1
          <input type="radio" name="review" value="2" required />2
          <input type="radio" name="review" value="3" required />3
          <input type="radio" name="review" value="4" required />4
          <input type="radio" name="review" value="5" required />5
          <p>感想</p>
          <textarea name="text" id="" cols="30" rows="10"placeholder="感想" required></textarea><br>
          <button type="submit" value="登録">
          <i class=" far fa-paper-plane"></i>本を登録する。
          </button>
      </form>
   </div>
   </main>
  　
  </body>
</html>
