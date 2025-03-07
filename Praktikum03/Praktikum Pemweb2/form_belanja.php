<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja Online</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 50%;
            margin: auto;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 5px;
        }
        .harga {
            background-color: #f8f8f8;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Belanja Online</h2>
    <form method="POST" action="">
        <label>Customer:</label>
        <input type="text" name="customer" required><br><br>

        <label>Pilih Produk:</label><br>
        <input type="radio" name="produk" value="TV"> TV - Rp 4.200.000<br>
        <input type="radio" name="produk" value="Kulkas"> Kulkas - Rp 3.100.000<br>
        <input type="radio" name="produk" value="MESIN CUCI"> MESIN CUCI - Rp 3.800.000<br><br>

        <label>Jumlah:</label>
        <input type="number" name="jumlah" required><br><br>

        <button type="submit" name="proses">Kirim</button>
    </form>

    <?php
    if (isset($_POST['proses'])) {
        $customer = $_POST['customer'];
        $produk = $_POST['produk'];
        $jumlah = $_POST['jumlah'];

        // Harga produk
        $harga_produk = [
            "TV" => 4200000,
            "Kulkas" => 3100000,
            "MESIN CUCI" => 3800000
        ];

        $total_belanja = $harga_produk[$produk] * $jumlah;

        echo "<hr>";
        echo "<h3>Hasil Belanja</h3>";
        echo "Nama Customer: <b>$customer</b><br>";
        echo "Produk Pilihan: <b>$produk</b><br>";
        echo "Jumlah Beli: <b>$jumlah</b><br>";
        echo "Total Belanja: <b>Rp " . number_format($total_belanja, 0, ',', '.') . "</b>";
    }
    ?>
</div>

</body>
</html>
