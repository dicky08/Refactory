<?php
if (isset($_POST['submit'])) {
    $kalimat = $_POST['kalimat'];
    function string($kalimat)
    {
        $jumlah = strlen($kalimat);
        for ($i = $jumlah; $i >= 0; $i--) {
            $result = substr($kalimat, $i, 1);
            echo $result;
        }
    }
    echo string($kalimat);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>soal no 7</title>
</head>

<body>
    <h4>Soal no 7 Memuat program membalikan kalimat atau kata</h4>
    <form action="" method="post">
        <label for="kalimat">Masukan kata</label>
        <input type="text" id="kalimat" name="kalimat" class="form_control">
        <button type="submit" name="submit">Cek</button>
    </form>
</body>

</html>