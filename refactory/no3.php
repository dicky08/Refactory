<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refactory</title>
</head>

<body>
    <h4>Soal No 3 Menentukan nilai maksimum,minimum dan rata-rata</h4>
    <?php
    $nilai = [2, 4, 6, 8, 10];
    echo "Nilai = " . join(",", $nilai);
    echo "<br>";
    echo "<br>";
    echo "Nilai Maksimum = " . max($nilai);
    echo "<br>";
    echo "Nilai Minimum = " . min($nilai);
    echo "<br>";
    $sum   = array_sum($nilai);
    $count = count($nilai);
    echo "Nilai Rata-rata = " . $sum / $count;
    ?>
</body>

</html>