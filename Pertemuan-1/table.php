<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <<table class="table">
  <thead>
    <tr>
      <th scope="col">No </th>
      <th scope="col">NIM</th>
      <th scope="col">NAMA</th>
      <th scope="col">TUGAS</th>
      <th scope="col">UTS</th>
      <th scope="col">UAS</th>
      <th scope="col">TOTAL</th>
      <th scope="col">PREDIKAT</th>
    </tr>
  </thead>
  <?php 
    $nilai1 = ["nim" => 0110224000, "nama" => "Haydar", "tugas" => 85, "uts" => 88, "uas" => 80];
    $nilai2 = ["nim" => 0110224001, "nama" => "Agus", "tugas" => 67, "uts" => 77, "uas" => 87];
    $nilai3 = ["nim" => 0110224001, "nama" => "Yatno", "tugas" => 97, "uts" => 97, "uas" => 97];


    $mhs = [$nilai1, $nilai2, $nilai3];
  ?>
  <tbody>
    <?php 
    foreach ($mhs as $item) { ?>
    <tr>
      <td scope="col">No </td>
      <td scope="col"><?= $item ['nim'] ?></td>
      <td scope="col"><?= $item ['nama'] ?></td>
      <td scope="col"><?= $item ['tugas'] ?></td>
      <td scope="col"><?= $item ['uts'] ?></td>
      <td scope="col"><?= $item ['uas'] ?></td>
      <td scope="col">TOTAL</td>
      <td scope="col">PREDIKAT</td>     
    </tr>
    <?php } ?>
    ?>
  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>