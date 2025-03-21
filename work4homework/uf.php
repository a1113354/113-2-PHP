<?php
session_start();

// 若沒有偵測到 userLogin，代表非合法使用者，強制跳回登入頁
if (!isset($_SESSION["userLogin"])) {
    echo "非法用戶！";
    header("Refresh:2;url='login.php'");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>用戶表單</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
        input, select, textarea {
            width: 100%;
            padding: 8px;
            margin: 5px 0 15px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"], input[type="reset"] {
            width: auto;
            padding: 10px 20px;
            margin: 10px 5px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover, input[type="reset"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <?php
        // 已確認是學生身份
        echo "歡迎，學生！<br>";
        echo "<a href='logout.php'>登出</a>";
    ?>
    <form action="ui.php" method="POST">
        <p>
            請輸入您的名字: 
            <input type="text" name="uName" required>
        </p>
        <p>
            請輸入您的密碼: 
            <input type="password" name="uPwd" required>
        </p>
        <p>
            請輸入您的電子郵件: 
            <input type="email" name="uEmail" required>
        </p>
        <p>
            請選擇您喜歡的顏色: 
            <input type="color" name="uColor">
        </p>
        <p>
            請選擇您的年齡: 
            <input type="number" name="uAge" min="25" max="60" required>
        </p>
        <p>
            請選擇您的生日: 
            <input type="date