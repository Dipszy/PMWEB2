<?php 
    $temansaya = ["Jamet", "Alam", "Nobel"];
    print_r($temansaya);

    echo $temansaya[2];
    echo "<ol>";
    foreach ($temansaya as $key => $value) {
        echo "<li>$key. $value</li>";
    }
    echo "</ol>";
    $temansaya[1] = "budi";
    unset($temansaya[0]);
    print_r($temansaya);



    echo "<br><br><br>";
    $buah = ["M" => "Markisa","D" => "Durian"];
    print_r($buah);

?>
