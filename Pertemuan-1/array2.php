<?php 

    //Array Sort
    $ar_buah = ["A" => "Apel", "B" => "Banana", "C" => "Chery" ];
    echo $ar_buah[2];

    echo '<br>Jumlah Buah : ' . count($ar_buah);

    echo '<ol>';
    foreach($ar_buah as $buah) {
        echo '<li>' . $buah . '</li>';
    }
    echo '</ol>';
    $ar_buah[] = "Apel";
    unset($ar_buah[1]);
    $ar_buah[2] = "Banana";
    echo '<ul>';
    foreach($ar_buah as $k => $v} {
        echo '<li>' buah index - ' . $k . ' adalah ' . $v . ' '</li>';
    }


    $ar_buah = ["A" => "Apel", "B" => "Banana", "C" => "Chery" ];
    echo '<ol>';
    foreach ($ar_buah as $k => $v) {
        echo '<li>' . $k . '. ' . $v . '</li>';
    }
    echo '</ol>'

    // Array POP
    $tims = ["erwin", "heru", "ali", "zaki"];
    array_pop($tims);
    foreach ($tims as $person) {
        echo $person . "<br>";
    }

    // Array PUSH
    $tims = ["erwin", "heru", "ali", "zaki"];
    array_push($tims, "wati");
    foreach ($tims as $person) {
        echo $person . "<br>";
    }

    //
?>