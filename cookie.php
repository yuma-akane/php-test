<?php
date_default_timezone_set('asia/taipei');
// 改變計算時區
setcookie('cook', 'my cookie');
//cookie有大小限制4096bytes,有時效期限(預設為視窗關閉時間)
//setcookie盡量設在HTML之前,time()+10/網路標準時間加秒數,路徑不同對系統來說cookie也不同
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>
    <?php
    echo $_COOKIE['cook'] . '<br>';
    echo date("Y-m-d(w) H:i:s") . '<br>';
    echo date("Y-m-d H:i:s", strtotime("+1 week")) . '<br>';
    echo date("Y-m-d H:i:s", strtotime('07/12/2011')) . '<br>';
    echo date("Y-m-d H:i:s") . '<br>';
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</body>

</html>