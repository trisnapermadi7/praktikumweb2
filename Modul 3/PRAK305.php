<!DOCTYPE html>
<head>
    <title>PRAK305</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="teks" required>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
        $teks=$_POST['teks'];
        $panjang = strlen($teks);
        $input = str_split($teks);
        $a=0;
        $b=0;
        while($b<$panjang){
            echo strtoupper($input[$a]);
            for($i=1; $i<$panjang; $i++){
                echo strtolower($input[$a]);
            }
            $b++;
            $a++;
        }
    }
?>