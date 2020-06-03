<?php

if (isset($_POST['submit'])) {
    # code...
    $kata = $_POST['kata'];
    $panjangKata = strlen($kata);
    $maksKata = floor($panjangKata / 2);
    $hasil = "Palindrom";
    $kata = strtolower($kata);
    for ($i = 0; $i < $maksKata; $i++) {
        if ($kata[$i] !== $kata[$panjangKata - 1 - $i]) {
            $hasil = "Bukan Palindrom";

            break;
        }
    }
    echo $hasil;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>soal No 4</title>
</head>

<body>
    <h4>Soal no 4 Mengecek apakah kalimat atau kata merupakan palindrom atau bukan </h4>
    <form action="" method="POST">
        <label for="kata">Kata</label>
        <input type="text" id="kata" name="kata" class="form-control">
        <button type="submit" name="submit">cek</button>
    </form>
</body>

</html>