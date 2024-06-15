<!DOCTYPE html>
<html lang="en">
<head>
    <title>PRAK301</title>
</head>
<body>
    <form action="" method="post">
        Jumlah Peserta: <input type="text" name="nilai">
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
    $nilai = $_POST["nilai"];
    $i = 1;
    while ($i <= $nilai) {
        if ($i % 2 == 0) {
            echo "<h2><font color='green'>peserta ke-$i</font></h2>";
        } else {
            echo "<h2><font color='red'>peserta ke-$i</font></h2>";
        }
        $i++;
    }
}
?>