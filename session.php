<?php
if (!isset($_SESSION)) {
    session_start(); //一定要啟動才能使用
    //session會給沒有cookie的使用者一組ID,用來確認使用者的等入次數與紀錄
}
/*if (isset($_SESSION["val"])) {
    $_SESSION["val"]++;
} else {
    $_SESSION["val"] = 1;
}
echo $_SESSION["val"];*/
if (isset($_POST['id']) and isset($_POST['pass'])) {
    if ($_POST['id'] == 'go' and $_POST['pass'] == '0000') {
        $_SESSION['login'] = 'Akane';
    };
};
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log in/out</title>
</head>

<body>
    <?php
    if (isset($_SESSION['login'])) : ?>
        <div>
            hi,<?= $_SESSION['login'] ?>
        </div>
        <a href="logout.php">log out</a>
    <?php else : ?>
        <form action="" method="post">
            <input type="text" name="id" placeholder="ID"><br>
            <input type="password" name="pass" placeholder="pass"><br>
            <input type="submit">
        </form>
    <?php endif;
    //記得加
    ?>
</body>
<!-- SQL
第一欄為主建
用來產生流水號
-->

</html>