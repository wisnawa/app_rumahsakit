<?php include_once('../_header.php'); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <a href="#menu-toggle" class="btn btn-primary" id="menu-toggle">Toggle Menu</a>
            <h1>Dashboard</h1>
            <p>Selamat Datang <span style="font-weight: bold; text-transform: capitalize;"><?= $_SESSION['user']; ?></span> Pengguna Rekam Medis</p>
        </div>
    </div>
</div>
<form action="prosesform.php" method="get">
    <div class="container">
        <div class="row mt-3">
            <label for="inputEmail" class="col-sm-1 col-form-label">Email:</label>
            <div class="col-sm-5">
                <input type="email" name="email_user" class="form-control" id="inputEmail" autofocus>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col ms-3">
                <input type="submit" class="btn btn-success" value="Sending Data">
            </div>
        </div>
    </div>
</form>
<?php include_once('../_footer.php'); ?>