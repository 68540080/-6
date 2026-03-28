<html>
<head>
    <title>ตารางสูตรคูณ</title>
</head>
<body>

<form method="post">
    ใส่ตัวเลข: <input type="234" name="num" required>
    <button type="submit">คำนวณ</button>
</form>

<?php
if (isset($_POST['num'])) {
    $num = $_POST['num'];

    echo "<h3>ตารางสูตรคูณของ $num (แม่ 5-18)</h3>";

    for ($i = 5; $i <= 18; $i++) {
        $result = $num * $i;
        echo "$num x $i = $result <br>";
    }
}
?>

</body>
</html>