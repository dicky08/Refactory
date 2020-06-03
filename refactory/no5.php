<?php

if (isset($_POST['submit'])) {

    $tahunSatu = $_POST['tahun1'];
    $tahunDua = $_POST['tahun2'];
    // Tahun ke satu

    if ($tahunSatu % 4 === 0) {
        echo "Tahun $tahunSatu adalah tahun kabisat";
        echo "<br>";
    } else {
        echo "Tahun $tahunSatu bukan tahun kabisat";
        echo "<br>";
    }
    // Tahun ke dua

    if ($tahunDua % 4 === 0) {
        echo "Tahun $tahunDua adalah tahun kabisat";
    } else {
        echo "Tahun $tahunDua bukan tahun kabisat";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>soal No 5</title>
</head>

<body>
    <h4>Soal no 5 Mengecek tahun kabisat </h4>

    <form action="" method="POST">
        <table>
            <thead>
                <tr>
                    <td><label for="tahun1">Tahun pertama</label></td>
                    <td> <input type="text" id="tahun1" name="tahun1" class="form-control">
                </tr>
                <tr>
                    <td><label for="tahun2">Tahun kedua</label></td>
                    <td>
                        <input type="text" id="tahun2" name="tahun2" class="form-control">
                    </td>
                </tr>
            </thead>
        </table>
        <button type="submit" name="submit">cek</button>
    </form>
</body>

</html>