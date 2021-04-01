<?php
// POST処理
session_start();
$user_name=$_POST["user_name"];
$user_id=$_POST["user_id"];
$user_pw=$_POST["user_pw"];

// DB読み込み
try {
$pdo = new PDO('mysql:dbname=boo_db;charset=utf8;host=localhost','root','root');
} catch (PDOException $e) {
exit('データベースに接続できませんでした。'.$e->getMessage());
}

// DBからLoginで入力された情報を参照する処理
$sql="SELECT * FROM bo_user_table WHERE user_id= :user_id AND user_pw= :user_pw";
$stmt=$pdo->prepare($sql);
$stmt->bindValue(':user_id',$user_id);
$stmt->bindValue(':user_pw',$user_pw);
$res=$stmt->execute();

// SQlにエラー発生時の処理
if($res==false){
$error = $stmt->errorInfo();
exit("登録がありません".$error[2]);
}

// データを取得する際の処理
$val= $stmt->fetch();
if($val["id"]!=""){
$_SESSION["chk_ssid"] =session_id();
$_SESSION["user_name"]=$val['user_name'];
header("Location:main.html");
}else{
header("Location:login.php");
}
exit();
?>