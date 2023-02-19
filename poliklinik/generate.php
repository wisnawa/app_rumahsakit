<?php include_once('../_header.php'); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="d-grid gap-2 d-md-block">
                <a href="#menu-toggle" class="btn btn-primary" id="menu-toggle"><i class="fa-solid fa-bars"></i>&nbsp;Toggle Menu</a>
                <a href="data.php" class="btn btn-outline-info"><i class="fa-solid fa-backward"></i>&nbsp;Kembali</a>
            </div>
            <h1>Generate Data Poliklinik</h1>
            <p>Selamat Datang <span style="font-weight: bold; text-transform: capitalize;"><?= $_SESSION['user']; ?></span> Pengguna Rekam Medis</p>
        </div>
    </div>
</div>
<div class="container">
    <form action="add.php" method="post">
        <div class="row">
            <div class="col-3">
                <label for="count_add" class="form-label fw-semibold">Banyak recod yang akan ditambahkan:</label>
                <div class="input-group">
                    <input type="text" name="count_add" class="form-control" placeholder="Generate" aria-label="Generate" aria-describedby="button-addon1" id="count_add" autofocus autocomplete="off" pattern="[0-9]+" required maxlength="3">
                    <button class="btn btn-outline-primary" type="submit" name="generate" id="button-addon1"><i class="fa-solid fa-list-ol"></i>&nbsp;Generate</button>
                </div>
            </div>
        </div>
    </form>
</div>
<?php include_once('../_footer.php') ?>