<html>
    <head>
        <title>Latihan Praktikum Soal No 5</title>
        <style>
            th{
                padding: 20px 0px 20px 0px;
                background-color: red;
                font-size: 24px;
            }
        </style>
    </head>
    <body>
        <table border="1" cellpadding="0" cellspacing="1">
            <?php 
                $hp = array("hp1"=>"Samsung Galaxy S22", "hp2"=>"Samsung Galaxy S22+", "hp3"=>"Samsung Galaxy A03", "hp4"=>"Samsung Galaxy Xcover 5");
            ?>
            <tr>
                <th><b>Daftar Smartphone Samsung</b></th>
            </tr>
            <tr>
                <td><?= $hp["hp1"] ?></td>
            </tr>
            <tr>
                <td><?= $hp["hp2"] ?></td>
            </tr>
            <tr>
                <td><?php echo $hp["hp3"] ?></td>
            </tr>
            <tr>
                <td><?php echo $hp["hp4"] ?></td>
            </tr>
       </table>
    </body>
</html>