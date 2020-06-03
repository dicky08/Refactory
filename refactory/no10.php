<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal No 10</title>
</head>

<body>
    <h4>Soal no 10. Mencari orang yang berusia dibawah 21 tahun</h4>
    <?php
    $data = file_get_contents('dataNo10.json');
    $peoples = json_decode($data, true); ?>
    <h4>Data dengan umur dibawah 21 Tahun</h4>
    <table border="1" width="50%">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Age</th>
            </tr>
        </thead>
        <?php
        $no = 1;
        foreach ($peoples as $people) : ?>
            <?php
            $name = $people['name'];
            $age = $people['age']; ?>
            <?php if ($age < 21) : ?>
                <tbody>
                    <tr style="text-align: center;">
                        <td><?= $no++ ?></td>
                        <td><?= $name ?></td>
                        <td><?= $age ?></td>
                    </tr>
                </tbody>
            <?php endif; ?>
        <?php endforeach; ?>
    </table>
</body>

</html>