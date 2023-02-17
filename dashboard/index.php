<?php include_once('../_header.php'); ?>
<div class="row">
    <div class="col-lg-12">
        <h1>Dashboard</h1>
        <p>Selamat Datang <span style="font-weight: bold; text-transform: capitalize;"><?= $_SESSION['user']; ?></span> Pengguna Rekam Medis</p>
        <a href="#menu-toggle" class="btn btn-primary" id="menu-toggle">Toggle Menu</a>
    </div>
</div>
<?php include_once('../_footer.php'); ?>