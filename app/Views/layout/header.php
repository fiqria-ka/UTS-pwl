<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Penjualan</a>
    <div class="d-flex">
      <span class="navbar-text me-3"><?= session('username'); ?></span>
      <a href="<?= site_url('logout') ?>" onclick="return confirm('Yakin ingin logout?')"class="btn btn-danger">Logout</a>
    </div>
  </div>
</nav>
<div class="container mt-4">
