<?php
require __DIR__ . '/__mySQL.php';
if (isset($_POST['name']) and isset($_POST['mobile'])) {
    $sql = "INSERT INTO`somewhere`(
`name`,`email`,`mobile`,`birthday`,`address`
    )VALUES(?,?,?,?,?,NOW())";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        $_POST['name'],
        $_POST['email'],
        $_POST['mobile'],
        $_POST['birthday'],
        $_POST['address']
    ]);
    echo $stmt->rowCount();
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= isset($title) ? $title . '-' : 'none'; ?> </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <form method="POST">
                    <div class="form-group">
                        <label for="name">name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                        <!-- required 必填 -->
                        <small id="nameHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="email" class="form-control" id="email" name="email">
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="mobile">mobile</label>
                        <input type="text" class="form-control" id="mobile" name="mobile" pattern="^09\d{2}-?\d{3}-?\d{3}$" required>
                        <small id="mobileHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="birthday">birthday</label>
                        <input type="date" class="form-control" id="birthday" name="birthday">
                        <small id="birthdayHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="address">address</label>
                        <textarea class="form-control" name="address" id="address" cols="30" rows="3"></textarea>
                        <small id="addressHelp" class="form-text text-muted"></small>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </div>

</body>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
</script>