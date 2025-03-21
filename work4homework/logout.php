<?php
// 啟動 Session
session_start();

// 銷毀當前 Session 中的所有數據
$_SESSION = array(); // 清空 Session 變量

// 如果存在 Session Cookie，則將其刪除
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}

// 銷毀 Session
session_destroy();

// 重定向到登入頁面
header("Location: login.php");
exit();
?>