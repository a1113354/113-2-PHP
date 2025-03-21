<?php
session_start();


if (!isset($_SESSION["userLogin"])) {
    echo "非法用戶！";
    header("Refresh:2;url='login.php'");
    exit();
}

$userName   = htmlspecialchars($_POST["uName"]);
$userPwd    = htmlspecialchars($_POST["uPwd"]);
$userEmail  = htmlspecialchars($_POST["uEmail"]);
$userColor  = htmlspecialchars($_POST["uColor"]);
$userAge    = intval($_POST["uAge"]); // 將年齡轉為整數
$userBirth  = htmlspecialchars($_POST["uBirth"]);
$userLike   = htmlspecialchars($_POST["uLike"]);
$userSecret = htmlspecialchars($_POST["uSecret"]);
$userCity   = htmlspecialchars($_POST["uCity"]);
$userMsg    = htmlspecialchars($_POST["uComment"]);


echo "您的名字是: " . $userName . "<br>";
echo "您的密碼是: " . $userPwd . "<br>";
echo "您的電子郵件是: " . $userEmail . "<br>";
echo "您喜歡的顏色是: " . $userColor . "<br>";
echo "您的生日是: " . $userBirth . "<br>";
echo "您的年齡是: " . $userAge . "<br>";
echo "您的興趣是: " . $userLike . "<br>";
echo "您的秘密是: " . $userSecret . "<br>";
echo "您所在的城市是: " . $userCity . "<br>";

echo "您的留言: " . nl2br($userMsg);
echo "<br><br><a href='logout.php'>登出</a>";
?>