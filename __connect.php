<?php
require __DIR__ . '/__mySQL.php';



$stmt = $pdo->query("SELECT * FROM somewhere");
$stmt = $pdo->query("SELECT * FROM somewhere LIMIT 6,5");
// LIMIT 6,5從第6筆開始,拿5筆資料
$row = $stmt->fetch();
print_r($row);
// exit;/die('');結束程式
$totalRows = $pdo->query("SELECT COUNT(1) FROM `somewhere`")
    ->fetch(PDO::FETCH_NUM)[0];
//COUNT(0)將每筆資料編為0計算個數
// ===========總頁數/提取每頁資料===============
$perPage = 5;
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;

$totalpage = ceil($totalRows / $perPage);
//ceil無條件進位/foolr
$getpage = sprintf("SELECT * FROM `somewhere`LIMIT %s %s", ($page - 1) * $perPage, $perPage);
$stmt = $pdo->query($sql);
