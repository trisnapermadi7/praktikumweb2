<?php
$panjang = "";
$lebar = "";
$nilai = "";

if (isset($_POST["cetak"])) {
    $panjang = $_POST["panjang"];
    $lebar = $_POST["lebar"];
    $nilai = $_POST["nilai"];
}
?>
<!DOCTYPE html>
<head>
    <title>PRAK401</title>
    <style>
        table, tr, td {
            border: solid 1px black;
            border-collapse: collapse;
            padding: 5px;
            text-align: center;}
    </style>
</head>
<body>
    <form action="" method="post">
        Panjang: <input type="text" name="panjang" value="<?=$panjang?>" ><br>
        Lebar: <input type="text" name="lebar" value="<?=$lebar?>" ><br>
        Nilai: <input type="text" name="nilai" value="<?=$nilai?>" ><br>
        <input type="submit" name="cetak" value="Cetak">
    </form>
    <?php
    if (isset($_POST["cetak"])) {
        $isi = explode(" ", $nilai);
        $panjangNilai = count($isi);
        if ($panjang * $lebar == $panjangNilai) {
            $count = 0;
            $tampil = array();
            for ($i = 0; $i < $panjang; $i++) {
                for ($j = 0; $j < $lebar; $j++) {
                    $tampil[$i][$j] = $isi[$count];
                    $count++;
                }
            }
            echo "<table>";
            for ($i = 0; $i < $panjang; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $lebar; $j++) {
                    echo "<td>".$tampil[$i][$j]."</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "Panjang nilai tidak sesuai dengan ukuran matriks";
        }
    }
    ?>
</body>
</html>