<!DOCTYPE html>
<head>
    <style>
        table, tr, td, th {
            border: solid 1px black;
            border-collapse: collapse;
            padding: 5px;}
    </style>
    <title>PRAK402</title>
</head>
<body>
    <?php
        $nilai = [
            ["nama" => "Andi", "nim" => "2101001", "uts" => 87, "uas" => 65],
            ["nama" => "Budi", "nim" => "2101002", "uts" => 76, "uas" => 79],
            ["nama" => "Tono", "nim" => "2101003", "uts" => 50, "uas" => 41],
            ["nama" => "Jessica", "nim" => "2101004", "uts" => 60, "uas" => 75],
        ];
        for ($i=0; $i<count($nilai); $i++) { 
            $nilai[$i]["akhir"] = $nilai[$i]["uts"] * 0.4 + $nilai[$i]["uas"] * 0.6;
            if($nilai[$i]["akhir"] >= 80){
                $nilai[$i]["huruf"] = "A";
            }elseif($nilai[$i]["akhir"] > 70){
                $nilai[$i]["huruf"] = "B";
            }elseif($nilai[$i]["akhir"] > 60){
                $nilai[$i]["huruf"] = "C";
            }elseif($nilai[$i]["akhir"] > 50){
                $nilai[$i]["huruf"] = "D";
            }else{
                $nilai[$i]["huruf"] = "E";
            }
        }
        echo "<table style='width:700px'>";
        echo "<tr style='text-align:left; background-color:lightgrey;'>";
        echo "<th>Nama</th>";
        echo "<th>NIM</th>";
        echo "<th>Nilai UTS</th>";
        echo "<th>Nilai UAS</th>";
        echo "<th>Nilai Akhir</th>";
        echo "<th>Huruf</th>";
        echo "</tr>";
        for ($i=0; $i<count($nilai); $i++) { 
            echo "<tr>";
            echo "<td>".$nilai[$i]["nama"]."</td>";
            echo "<td>".$nilai[$i]["nim"]."</td>";
            echo "<td>".$nilai[$i]["uts"]."</td>";
            echo "<td>".$nilai[$i]["uas"]."</td>";
            echo "<td>".$nilai[$i]["akhir"]."</td>";
            echo "<td>".$nilai[$i]["huruf"]."</td>";
            echo "</tr>";
        }  
        echo "</table>"
        ?>
</body>
</html>