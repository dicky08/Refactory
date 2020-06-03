<?php
// Menghitung Faktorial

if (isset($_POST['submit'])) {
    $n = $_POST['angka'];
    function faktorial($n)
    {
        if ($n === 0) return 1;
        return $n * faktorial($n - 1);
    }
    echo faktorial($n);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>soal no 6</title>
</head>

<body>
    <h4>Soal no 6 Membuat program rekursif</h4>
    <form action="" method="post">
        <label for="angka">Masukan angka</label>
        <input type="text" id="angka" name="angka" class="form-control">
        <button type="submit" name="submit">Cek</button>
    </form>

    <script>
        function input(n) {
            if (n === 0) return;
            console.log(n);
            input(n - 1);
        }
        input(5);
    </script>
</body>

</html>