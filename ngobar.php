<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tipe data</title>
</head>
<body>
    <h1>belajar tipe data</h1>

    <?php
    echo "<br><h2>1. tipe data integer </h2>";
    // inisiasi dan inisiasi variable 
    $a = 10;
    $b = 5;
    $c = $a + 5;
    $d = $b + (10 * 5);
    $e = $d - $c;

    //tampilkan data dengan perintah echo
    echo "variabel a: $a  <br>";
    echo "variabel b: ($b) <br>";
    echo "variabel c: ($c) <br>";
    echo "variabel d: ($d) <br>";
    echo "variabel e: ($e) <br>";

    //mengetahui tipe data dari variabel 
    var_dump(value: $e);
    ?>

</body>
</html>