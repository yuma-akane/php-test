<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= isset($title) ? $title . '-' : 'none'; ?> </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="container">
    <pre>
<?php
// print_r($_GET)
//$_GET所取值會傳給網址列
// print_r($_POST);
?>
</pre>
    <form action="" name="form1" class="row" onsubmit="return cont()">
        <input id="a" class="form-control col-3" type="number">+<input id="b" class="form-control col-3" type="number">
        <button class="btn btn-primary mx-2">=</button> <!-- button的預設值是submit -->
        <input id="c" class="form-control col-3" type="text">
    </form>
    <!-- form的屬性novalidate不檢查輸入值是否府和表單格式 -->
    <!-- <form novalidate method="post">
        <div class="form-group">
            label點選名稱能使表單連動
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form> -->
</body>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script>
    // JSON.pars轉為物件
    // JSON.stringify轉為字串
    function cont() {
        $.post('json.php', {
            a: document.querySelector('#a').value,
            b: $('#b').val()
        }, function(data) {
            console.log(data);
            $('#c').val(data.c);
        }, 'json');

        return false;
    };
</script>