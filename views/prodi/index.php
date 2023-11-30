<?php
require_once("../../controllers/prodi/prodiController.php");



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<table border="1" cellpadding="20" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Prodi</th>
            <th>Jenjang Prodi</th>
            <th>Action</th>
        </tr>
        <?php $i = 1;
        foreach ($prodi as $pmb) : ?>
            <tr>
                <td> <?= $i++; ?> </td>
                <td> <?= $pmb["nama_prodi"] ?> </td>
                <td> <?= $pmb["jenjang_prodi"] ?> </td>

                <td>
                    <a href="">Update</a> |
                    <a href="">Delete</a>
                </td>
            </tr>


        <?php endforeach; ?>
    </table>
</body>

</html>