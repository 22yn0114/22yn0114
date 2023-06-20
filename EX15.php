<?php
// 入力された値を受け取り、計算結果を表示する
$mag = "";

if (isset($_GET["number1"]) && $name = $_GET["number1"] && isset($_GET["number2"]) && $name = $_GET["number2"] && isset($radio)){
    $number1 = $_GET["number1"];
$number2 = $_GET["number2"];
$arithmetic = $_GET["arithmetic"];
switch ($arithmetic) {
    case 'add':
        $msg = $number1 + $number2;
        break;
    case 'sub':
        $msg = $number1 - $number2;
        break;
        $msg = $number1 * $number2;
        break;
        $msg = $number1 / $number2;
        break;
        $msg = $number1 % $number2;
        break;
    }
}else{
    $msg = "入力内容が間違っています!!";
}


?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>EX15　yyJNccnn　四則演算の入力フォーム(受信)</title>
</head>

<body>
<p><?php echo $msg?></p>
<a href="./EX15.php">入力フォームへ</a>
</body>

</html>