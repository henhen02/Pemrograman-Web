<?php
include 'data.php';
$input = $_GET['judul'];
foreach ($data as $hasil) {
    if ($input == $hasil['judul']) {
        $judul = $input;
        $harga = $hasil['harga'];
        $img = $hasil['img'];
    };
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sukses</title>
</head>
<body>
    <header>
        <h2>Informasi Pembelian</h2>
    </header>
    <main>
        <article>
            <img src="Assets/Images/<?= $img?>" alt="produk">
            <table>
                <tr>
                    <th>Judul</th>
                    <td>: <?= ($_GET["judul"])?></td>
                </tr>
                <tr>
                    <th>Harga</th>
                    <td>: <?= $harga?></td>
                </tr>
            </table>
            <h2>Terimakasih</h2>
        </article>
    </main>
</body>
</html>