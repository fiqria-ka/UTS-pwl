<?php include(APPPATH . 'Views/layout/header.php'); ?>

<h2>Dashboard User</h2>
<p>Selamat datang, <?= $username; ?>!</p>
<p>Ringkasan Penjualan:</p>

<ul class="list-group">
    <li class="list-group-item">Produk A: 10 unit</li>
    <li class="list-group-item">Produk B: 5 unit</li>
</ul>

<?php include(APPPATH . 'Views/layout/footer.php'); ?>
