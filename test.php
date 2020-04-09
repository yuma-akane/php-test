<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>



<body>
    <!-- php的字元條件(手機號碼)^09\d{2}-?\d{3}-?\d{3}$ \n為換行-->

    <?php include __DIR__ . '';  ?>
    <?php
    // phpinfo();查看PHP資料的呼叫函式(平時不會用)
    // php的結尾式會被VScode簡化
    echo 4 + 9; //echo輸出、顯示
    // +只做數值的相加
    echo PHP_VERSION . '<br>';
    echo __DIR__ . '<br>';  // 由硬碟到此資料夾路徑
    echo __FILE__ . '<br>'; // 由硬碟到此檔案路徑
    echo __LINE__ . '<br>'; //程式碼的行數(除錯用)
    define('x', 1000); // 常數(和js的cost一樣)
    echo x . '<br>';
    echo false . '布林false是空值<br>'; //會顯示空值
    echo true . '<br>';
    $y = "get";
    $$y = "new"; //可以取變數值為變數名稱
    echo $y . '<br>';
    echo $get . '<br>';
    echo $y . '<br>';
    echo $y . '<br>';
    echo 'ghhgfhjh$yrgh<br>';
    echo "ghhgfhjh${y}gbnh<br>";
    $a = isset($_GET['a']) ? intval($_GET['a']) : 0;
    $b = isset($_GET['b']) ? $_GET['b'] : 0;
    echo $_GET['a'] + $_GET['b'] . '<br>';
    echo $a + $b;
    echo '<table>';
    for ($i = 0; $i <= $a; $i++) {
        echo "<tr><td>$i</td><td>$a</td></tr>";
    };
    echo '</table>';
    $b = [
        'one' => 'like',
        'age' => 20,
    ];
    foreach ($b as $key => $val) {
        echo "$key =&gt; $val<br>";
    }
    ?>
    <?php if ($i > 0) { ?>
        <h2>html</h2>
    <?php } else { ?>
        <div></div>
    <?php } ?>
    <pre> <!-- 顯示程式碼 -->
    <?php
    $a = [7, 6, [8, 3]];
    $a[] = 'eve';
    // $r=&$a加&為參照
    // $f=$a不加&為複製
    print_r($a);
    var_dump($a); //顯示物件屬性

    ?>
    </pre>
</body>

</html>