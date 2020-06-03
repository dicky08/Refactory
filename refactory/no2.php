<?php
if (isset($_POST['submit'])) {
    $nilai = $_POST['nilai'];
    if ($nilai % 2 === 0) {
        echo "<b>Bilangan Genap</b>";
    } else {
        echo "<b>Bilangan ganjil</b>";
    }
}
// function angka($nilai)
// {
//     if ($nilai % 2 === 0) {
//         echo "<b>Bilangan Genap</b>";
//     } else {
//         echo "<b>Bilangan ganjil</b>";
//     }
// }
// echo angka(6);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refactory</title>
</head>

<body>
    <h4>Soal No 2 Menentukan bilangan genap atau ganjil</h4>
    <form action="" method="post">
        <label for="nilai">Nilai</label>
        <input type="text" id="nilai" name="nilai" class="form-control">

        <button type="submit" name="submit">Cek</button>
    </form>
</body>

</html>