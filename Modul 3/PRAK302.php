<!DOCTYPE html>
<head>
    <title>PRAK 302</title>
    <style>
        .tab {
            width: 20px;
            height: 20px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        Tinggi :<input type="text" name="tinggi"> <br>
        Alamat Gambar : <input type="text" name="url"><!--  https://cdn0.iconfinder.com/data/icons/web-and-mobile-icons-volume-2/128/52-512.png  --><br>
        <input type="submit" value="cetak">
    </form>
    <?php
    error_reporting(0);
    $tinggi = $_POST['tinggi'];
    $url = $_POST['url'];
    $a = 1;
    while ($a <= $tinggi) {
        $b = 1;
        while ($b < $a) {
            echo "&nbsp;" . "&nbsp;" . "&nbsp;" . "&nbsp;" . "&nbsp;";
            $b++;
        }
        $c = $tinggi;
        while ($c >= $a) {
            echo "<img src='$url'class='tab'>";
            $c--;
        }
        echo '<br>';
        $a++;
    }
    ?>
</body>
</html>