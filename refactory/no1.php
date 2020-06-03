<?php
if (isset($_POST['submit'])) {
    // Menentukan Grade Nilai
    $nilai = $_POST['nilai'];
    if ($nilai >= 90) {
        echo "Grade A";
    } elseif (($nilai >= 80) && ($nilai <= 89)) {
        echo "Grade B";
    } elseif (($nilai >= 70) && ($nilai <= 79)) {
        echo "Grade C";
    } elseif (($nilai >= 60) && ($nilai <= 69)) {
        echo "Grade D";
    } else {
        echo "Grade E";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refactory</title>
</head>

<body>
    <h4>Soal No 1 Mencari Grade dari suatu Nilai</h4>
    <form action="" method="post">
        <label for="nilai">Nilai</label>
        <input type="text" id="nilai" name="nilai" class="form-control">

        <button type="submit" name="submit">Cek</button>
    </form>
</body>

</html>