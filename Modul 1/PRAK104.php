<html>
    <head>
        <style>
            table, th, td{
                border : 1px solid black;
                cellspacing : 1px solid black;
            }
        </style>
        <title>Latihan Praktikum Soal No 4</title>
    </head>
    <body>
        <table>
            <?php 
                $hp = array("Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover 5")
            ?>
            <tr>
                <th><b>Daftar Smartphone Samsung</b></th>
            </tr>
            <tr>
                <td><?php echo $hp[0]?></td>
            </tr>
            <tr>
                <td><?php echo $hp[1]?></td>
            </tr>
            <tr>
                <td><?php echo $hp[2]?></td>
            </tr>
            <tr>
                <td><?php echo $hp[3]?></td>
            </tr>
       </table>
    </body>
</html>