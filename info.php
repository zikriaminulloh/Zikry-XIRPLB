<html>
    <head>
        <title>Tugas 1</title>
    </head>
    <body>
        <h1>Discount Checker / Pengecekan Diskon</h1>
        <p>Masukkan total harga belanjaan anda disini</p>
        <form method="post">
            <input type="text" name="harga" placeholder="Input Total Disini">
            <input type="submit" value="submit" nama="submit">
        </form>
    </body>
</html>

<?php 

$total = @$_POST['harga'];

if ($total >= 500000) {
    $diskon = $total * 50 / 100;
    echo "Harga Akhir = $diskon - Anda Mendapatkan Diskon Sebesar 50%";
}
elseif ($total >= 100000) {
    $diskon = $total * 90 / 100;
    echo "Harga Akhir = $diskon - Anda Mendapatkan Diskon Sebesar 10%";
}
elseif ($total >= 50000) {
    $diskon = $total * 95 / 100;
    echo "Harga Akhir = $diskon - Anda Mendapatkan Diskon Sebesar 5%";
}
else {
    echo "Diskon Tidak Dapat Diterapkan Karena Tidak Termasuk Kriteria";
}

?>
