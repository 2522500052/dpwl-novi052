<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
<table>
    <tr>
        <th>NO.</th>
        <th>NIM</th>
        <th>NAMA MAHASISWA</th>
        <th>ALAMAT</th>
        <th>NO.TELP</th>
    </tr>

    <?php
    $i = 1;

    foreach ($data as $mhs) {
    ?>
        <tr>
            <td><?= $i++; ?>.</td>
            <td><?= $mhs['nim']; ?></td>
            <td><?= $mhs['nama']; ?></td>
            <td><?= $mhs['alamat']; ?></td>
            <td><?= $mhs['no_hp']; ?></td>
        </tr>
    <?php
    }
    ?>
</table>

</body>
</html>
