<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>登入驗證</title>
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
    </style>
</head>
<body>
    <h1>登入檢查</h1>

    <?php
    // 預設的學生與管理員帳密
    $studentAccount = "student";
    $studentPass    = "12345";

    $adminAccount   = "nuk";
    $adminPass      = "123456";

    // 接收使用者輸入
    $inputName = htmlspecialchars($_POST["name"]); // 防止 XSS 攻擊
    $inputPwd  = htmlspecialchars($_POST["pwd"]);  // 防止 XSS 攻擊

    // 檢查是否為學生帳號
    if ($inputName === $studentAccount && $inputPwd === $studentPass) {
        echo "<p>學生登入成功！</p>";
        $_SESSION["userLogin"] = true;
        $cookieExpire = time() + 10; // Cookie 10 秒後過期
        setcookie("name", $inputName, $cookieExpire, "/", "", false, true); // 增加安全性
        header("Location: uf.php");
        exit();
    }
    // 檢查是否為管理員帳號
    elseif ($inputName === $adminAccount && $inputPwd === $adminPass) {
        echo "<p>管理員登入成功！</p>";
        $_SESSION["adminLogin"] = true;
        $cookieExpire = time() + 10; // Cookie 10 秒後過期
        setcookie("name", $inputName, $cookieExpire, "/", "", false, true); // 增加安全性
        header("Location: main.php");
        exit();
    }
    // 登入失敗
    else {
        echo "<p>登入失敗，將在 3 秒後跳轉回登入頁面...</p>";
        header("Refresh:3;url='login.php'");
    }
    ?>
</body>
</html>