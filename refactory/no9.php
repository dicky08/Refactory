<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal no 9</title>
</head>

<body>
    <h4>Soal no 9. Menghilangkan data Ganda</h4>
    <h4>Nama Kota</h4>
    <?php
    $data = file_get_contents('dataNo9.json');
    $result = json_decode($data, true);
    $kota = array_unique($result);
    foreach ($kota as $k) : ?>
        <ul>
            <li><?= $k; ?></li>
        </ul>
    <?php endforeach; ?>


</body>

</html>