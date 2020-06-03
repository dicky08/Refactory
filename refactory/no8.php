<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal No 8</title>
</head>

<body>
    <h4>Soal no 8. Membuat input angka tanpa batas</h4>

    <form action="" method="post">
        <label>
            Username
            <input type="text" id="user" name="angka">
        </label>
        <button type="submit" name="submit" id="btn">cek</button>
    </form>

    <script>
        let input = prompt("Enter a number");
        let total = 0;
        while (input !== "=") {
            input = Number(input);
            if (input) {
                total += input;
            }
            input = prompt("Enter a number");
        }
        document.write(total);
    </script>
</body>

</html>