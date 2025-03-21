<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>管理員頁面</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            text-align: center;
        }
        h1 {
            color: #333;
        }
        p {
            font-size: 18px;
            color: #555;
        }
        a {
            color: #4CAF50;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <?php
    // 若有 adminLogin 這個 Session，表示管理者已登入
    if (isset($_SESSION["adminLogin"])) {
        echo "<h1>歡迎，管理員！</h1>";
        echo "<p>您已成功登入管理員頁面。</p>";
        echo "<p><a href='logout.php'>登出</a></p>";
    } else {
        // 若未登入，顯示錯誤訊息並重定向到登入頁面
        echo "<p>您無權訪問此頁面，將在 3 秒後跳轉至登入頁面...</p>";
        header("Refresh:3;url='login.php'");
        exit();
    }
    ?>
</body>
</html>