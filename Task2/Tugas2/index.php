<?php include 'data.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Assets/Style/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="jumbotron">
            <a href="index.html"><img src="Assets/Images/mymart_logo.png" alt="mymart_logo"></a>
        </div>
    </header>
    <main>
        <article>
            <h2>Best seller tahun ini</h2>
            <div class="list-produk">
                <?php foreach($data as $n): ?>
                    <div class="produk">
                        <form action="action.php" method="get">
                            <img src="Assets/Images/<?= ($n["img"]) ?>" alt="p1">
                            <p class="judul-produk"><?= $n["judul"] ?></p>
                            <table>
                                <tr>
                                    <th>Harga</th>
                                    <td>: Rp.<?= $n["harga"]?>.000,00</td>
                                </tr>
                                <tr>
                                    <th>Jumlah Halaman</th>
                                    <td>: <?= $n["halaman"]?></td>
                                </tr>
                                <tr>
                                    <th>Tanggal rilis</th>
                                    <td>: <?= $n["tgl"] ?></td>
                                </tr>
                            </table>
                            <div class="button">
                                <input type="hidden" name="judul" value="<?= $n["judul"]?>">
                                <input type="submit" id="button" value="Beli">
                            </div>
                        </form>
                    </div>
                <?php endforeach; ?>
            </div>
        </article>
    </main>
    <footer>
        <p><a href="https://github.com/henhen02">Hendri Aldi Zulfan</a></p>
    </footer>
</body>
</html>