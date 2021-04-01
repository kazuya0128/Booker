<?php
$user_name=$_POST["user_name"];
$user_id=$_POST["user_id"];
$user_pw=$_POST["user_pw"];

// DB接続
try {
 $pdo = new PDO('mysql:dbname=boo_db;charset=utf8;host=localhost','root','root');
 } catch (PDOException $e) {
 exit('データベースに接続できませんでした。'.$e->getMessage());
}
// 新規アカウントを追加
$sql= "INSERT INTO bo_user_table(id,user_name,user_id,user_pw)VALUES(NULL,:a1,:a2,:a3)";

$stmt=$pdo->prepare($sql);

$stmt->bindValue(':a1',$user_name,PDO::PARAM_STR);
$stmt->bindValue(':a2',$user_id,PDO::PARAM_STR);
$stmt->bindValue(':a3',$user_pw,PDO::PARAM_STR);
$status = $stmt->execute();

// エラー処理
if($status==false){
 $error =$stmt->errorInfo();
 exit("QueryError:".$error[2]);
 }else{
 header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booker 確認画面</title>




</head>
<body>
    
</body>
</html>