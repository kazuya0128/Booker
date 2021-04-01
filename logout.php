<?php

// sessionの読み込み
session_start();
// SESSIONを初期化処理
$SESSION =array();

// Cookieの保存期間を過去にして破棄
if(isset($_COOKIE[session_name()])){
    setcookie(session_name(),'',time()-42000,'/');
}

// サーバー側のsession破壊
session_destroy();
// その後、login画面に戻して終了
header("Location: login.php");
exit();

?>