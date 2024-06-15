<?php 
    // NIM akhir = 1 = Tabung
    @$jari_jari = $_REQUEST['jari-jari'];
    @$tinggi = $_REQUEST['tinggi'];
    if(isset($jari_jari) && isset($tinggi)) {
        $luas_alas = round(pi() * $jari_jari * $jari_jari, 3);
        $luas_selimut = round(2 * pi() * $jari_jari * $tinggi, 3);
        $volume = round(pi() * $jari_jari * $jari_jari * $tinggi, 3);
    }
?>
<form method="POST">
    <table>
        <tr>
            <td>Jari-jari</td>
            <td>=</td>
            <td><input type="text" name="jari-jari" value="<?php echo isset($jari_jari) ? $jari_jari : ''; ?>"/> m<br/></td>
        </tr>
        <tr>
            <td>Tinggi</td>
            <td>=</td>
            <td><input type="text" name="tinggi" value="<?php echo isset($tinggi) ? $tinggi : ''; ?>"/> m<br/></td>
        </tr>
    </table>
    <input type="submit" name="submit" value="SUBMIT"/><br/><br/>
</form>
<?php
    // Menampilkan hasil perhitungan jika nilai jari-jari dan tinggi telah diisi
    if(isset($jari_jari) && isset($tinggi)) {
        echo "Luas Alas = ".$luas_alas." m^3<br/>";
        echo "Luas Selimut = ".$luas_selimut." m^3<br/>";
        echo "Volume Tabung = ".$volume." m^3<br/>";
    }
?>
