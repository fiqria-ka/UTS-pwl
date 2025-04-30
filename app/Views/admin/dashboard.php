<?php include(APPPATH . 'Views/layout/header.php'); ?>

<h2>Dashboard Admin</h2>
<p>Selamat datang, <?= $username; ?>!</p>
<p>Data Laporan Penjualan:</p>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Produk</th>
            <th>Jumlah Terjual</th>
            <th>Total Pendapatan</th>
        </tr>
    </thead>
    <tbody>
        <tr><td>Produk A</td><td>100</td><td>Rp 1.000.000</td></tr>
        <tr><td>Produk B</td><td>50</td><td>Rp 500.000</td></tr>
    </tbody>
</table>

<?php include(APPPATH . 'Views/layout/footer.php'); ?>
