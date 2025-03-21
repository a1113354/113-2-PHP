<?php
// 如果偵測到使用者先前曾登入成功 (存在 cookie["name"])，就顯示歡迎訊息
if (isset($_COOKIE["name"])) {
    $username = htmlspecialchars($_COOKIE["name"]); // 防止 XSS 攻擊
    echo "歡迎回來, " . $username . "！<br>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>用戶登入</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            text-align: center;
        }
        h1 {
            color: #333;
        }
        form {
            display: inline-block;
            text-align: left;
            margin-top: 20px;
        }
        label {
            display: block;
            margin: 10px 0;
        }
        input[type="text"], input[type="password"] {
            padding: 8px;
            width: 200px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .timestamp {
            margin-top: 20px;
            font-size: 14px;
            color: #555;
        }
    </style>
</head>
<body>
    <h1>登入您的帳號</h1>
    <form action="lc.php" method="post">
        <label>用戶名稱: 
            <input type="text" name="name" required>
        </label><br>

        <label>密碼: 
            <input type="password" name="pwd" required>
        </label><br>
        
        <input type="submit" value="登入"><br>
        
        <div class="timestamp">
            <?php
            // 顯示系統當前時間
            date_default_timezone_set("Asia/Taipei");
            echo "當前時間戳: " . time() . "<br>";
            echo "當前時間: " . date("Y-m-d H:i:s");
            ?>
        </div>
    </form>
</body>
</html>