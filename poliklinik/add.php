<?php include_once('../_header.php'); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="d-grid gap-2 d-md-block">
                <a href="#menu-toggle" class="btn btn-primary" id="menu-toggle"><i class="fa-solid fa-bars"></i>&nbsp;Toggle Menu</a>
                <a href="data.php" class="btn btn-outline-info"><i class="fa-solid fa-backward"></i>&nbsp;Kembali</a>
                <a href="generate.php" class="btn btn-outline-info"><i class="fa-solid fa-backward"></i>&nbsp;Tambah Data Lagi</a>
            </div>
            <h1>Tambah Data Poliklinik</h1>
            <p>Selamat Datang <span style="font-weight: bold; text-transform: capitalize;"><?= $_SESSION['user']; ?></span> Pengguna Rekam Medis</p>
        </div>
    </div>
</div>
<div class="container">
    <form action="proses.php" method="post">
        <input type="hidden" name="total" value="<?= @$_POST['count_add']; ?>">
        <div class="table-table-responsive-sm">
            <table class="table table-striped table-hover">
                <thead class="table-primary">
                    <tr>
                        <th>#</th>
                        <th>Nama Poliklinik</th>
                        <th>Area Gedung</th>
                    </tr>
                </thead>
                <?php for ($i = 1; $i <= $_POST['count_add']; $i++) { ?>
                    <tbody>
                        <tr>
                            <td><?= $i; ?></td>
                            <td>
                                <input class="form-control form-control-sm" type="text" name="nama-<?= $i; ?>" placeholder="input nama poliklinik" aria-label="form-control-sm" autofocus>
                            </td>
                            <td>
                                <input class="form-control form-control-sm" type="text" name="gedung-<?= $i; ?>" placeholder="input nama gedung" aria-label="form-control-sm">
                            </td>
                        </tr>
                    </tbody>
                <?php } ?>
            </table>
            <div class="d-grid d-md-flex justify-content-end">
                <button type="submit" name="add" class="btn btn-sm btn-outline-success"><i class="fa-regular fa-paper-plane"></i>&nbsp;Sending Data</button>
            </div>
        </div>
    </form>
</div>
<?php include_once('../_footer.php') ?>