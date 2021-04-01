<?php

try{
$pdo=new PDO('mysql:dbname=boo_db;charset=utf8;host=localhost','root','root');
} catch(PDOException $e){
exit('データベースに接続できませんでした。'.$e->getMessage());
}

// データ表示
$stmt = $pdo->prepare("SELECT * FROM bo_table");
$status = $stmt->execute();

$view="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
  //Selectデータの数だけ自動でループしてくれる $resultの中に「カラム名」が入ってくるのでそれを表示させる例
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    // $view .= "<p>";
    // $view .= $result["name"]."<br>".$result["review"]."<br>".$result["text"];
    // $view .= "</p>";

  $view.="<p>";
  $view.='<a href="u_view.php?id='.$result["id"].'">';
  $view.=$result["name"];
  $view.='</a>';
  $view.=' ';
  $view.='<a href="delete.php?id='.$result["id"].'">';
  $view.='[削除]';
  $view.='</a>';
  $view.='</p>';
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Booker</title>
    <link rel="stylesheet" href="select.css" />
  </head>
  <body>
  <header class="menubar">
      <h1 class="title-logo">Booker</h1>
      <ul>
        <li><a class="acount" href="index.php">本を追加する</a></li>
       </ul>
       <p>本を検索</p>
       <form action="search.php" method="POST">
         <input type="text" name="search" placeholder="本のタイトル">
         <input type="submit" value="検索">
       </form>
    
    </header>

 <main class="content">
    <div class='box'>
     
     <?php echo  $view ?>
    </div>  
</main>


  </body>
</html>