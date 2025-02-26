<?php 

// Array Sort
$ar_buah = ["A" => "Apel", "B" => "Banana", "C" => "Chery"];

// Mengakses indeks yang tidak ada akan menyebabkan error, jadi dihapus
// echo $ar_buah[2];

echo '<br>Jumlah Buah : ' . count($ar_buah);

echo '<ol>';
foreach($ar_buah as $buah) {
    echo '<li>' . $buah . '</li>';
}
echo '</ol>';

$ar_buah[] = "Apel";
unset($ar_buah[1]); // Tidak ada indeks 1, jadi ini tidak berpengaruh
$ar_buah["C"] = "Banana"; // Menggunakan key yang benar

echo '<ul>';
foreach($ar_buah as $k => $v) {
    echo '<li>Buah index - ' . $k . ' adalah ' . $v . '</li>';
}
echo '</ul>';

$ar_buah = ["A" => "Apel", "B" => "Banana", "C" => "Chery"];
echo '<ol>';
foreach ($ar_buah as $k => $v) {
    echo '<li>' . $k . '. ' . $v . '</li>';
}
echo '</ol>';

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

?>
