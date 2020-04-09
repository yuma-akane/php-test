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
$vip = [
    'go' => [
        'name' => 'GO',
        'pw' => '0000'
    ],
    'test' => [
        'name' => 'TEST',
        'pw' => '0000'
    ],
    'akane' => [
        'name' => 'AKANE',
        'pw' => '0000'
    ]
];
if (isset($_POST['id']) and isset($_POST['pass'])) {
    if (
        !empty($_POST['id'] == $vip[$_POST['id']])
        and $_POST['pass'] === $vip[$_POST['id']]['pw']
    ) {
        $_SESSION['login'] = [
            'id' => $_POST['id'],
            'name' => $vip[$_POST['id']]['name']
        ];
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
        <td><?= strip_tags($r['address']) ?></td>
    <?php endif;
    //記得加
    /*<td><?= strip_tags($r['address']) ?></td>
    strip_tags刪除HTML標籤
    <td><?= htmlentities($r['address']) ?></td>
    htmlentities可以直接顯示特殊字符
    */
    ?>
</body>
<!-- SQL
第一欄為主建
用來產生流水號
-->

</html>