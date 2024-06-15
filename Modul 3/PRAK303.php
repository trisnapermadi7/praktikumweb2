<!DOCTYPE html>
<html lang="en">
<head>
    <title>PRAK 303</title>
</head>
<body>
    <form action="" method="post">
        Batas Bawah <br> <input type="text" name="bawah"><br>
        Batas Atas <br> <input type="text" name="atas"><br>
        <input type="submit" value="cetak" name="hitung">
    </form>
    <?php
    if (isset($_POST['hitung'])) {
        $bawah = $_POST['bawah'];
        $atas = $_POST['atas'];
        do {
            if (($bawah + 7) % 5 == 0) {
                echo "<img src= star.png \" height=\"30\" width=\"30\">";
            } else {
                echo "$bawah ";
            }
            $bawah++;
        } while ($bawah <= $atas);
    }
    ?>
</body>
</html>