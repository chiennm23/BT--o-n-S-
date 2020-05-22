<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input type="text" name="number_test">
    <button type="submit">Test</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'function.php';
    $numberTest = $_POST['number_test'];
    $numberFixed = 38;
    $numbers = range(1, 100, 1);
    if (binarySearch($numbers, $numberTest) == true) {
        if ($numberTest == $numberFixed) {
            echo "Tro Choi Ket Thuc!!! Xin Chuc Mung!!!";
        } else if ($numberTest < $numberFixed) {
            echo "Ban can doan so khac lon hon";
        } else {
            echo "Ban can doan so khac nho hon";
        }
    } else {
        echo "Ban can nhap so tu khoang 1-100!!!";
    }
}
?>
</body>
</html>
