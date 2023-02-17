<?php include_once('../_header.php'); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <a href="#menu-toggle" class="btn btn-primary" id="menu-toggle">Toggle Menu</a>
            <h1>Data Obat</h1>
            <p>Selamat Datang <span style="font-weight: bold; text-transform: capitalize;"><?= $_SESSION['user']; ?></span> Pengguna Rekam Medis</p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-6">
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input type="text" name="pencarian" class="form-control" placeholder="Pencarian" aria-label="Pencarian" aria-describedby="button-addon1">
                    <button class="btn btn-outline-primary" type="submit" id="button-addon1"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </form>
        </div>
        <div class="col-6">
            <!-- button process start -->
            <div class="d-grid gap-3 d-md-flex justify-content-md-end mb-2">
                <a href="#" class="btn btn-sm btn-outline-warning" type="reset"><i class="fa-solid fa-arrows-rotate"></i>&nbsp;Refresh Data</a>
                <a href="#" class="btn btn-sm btn-outline-success"><i class="fa-regular fa-paper-plane"></i>&nbsp;Tambah Data Obat</a>
            </div>
            <!-- button process end -->
        </div>
    </div>
</div>
<div class="container">
    <div class="table-responsive-sm">
        <table class="table table-striped table-hover">
            <caption>List Obat</caption>
            <thead class="table-primary">
                <tr>
                    <th>No.</th>
                    <th>Nama Obat</th>
                    <th>Keterangan</th>
                    <th><i class="fa-solid fa-gears"></i></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $batas = 5;
                $hal = @$_GET['hal'];
                if (empty($hal)) {
                    $posisi = 0;
                    $hal = 1;
                } else {
                    $posisi = ($hal - 1) * $batas;
                };
                $no = 1;
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                    $pencarian = trim(mysqli_real_escape_string($con, $_POST['pencarian']));
                    if ($pencarian != '') {
                        $sql = "SELECT * FROM tb_obat WHERE nama_obat LIKE '%$pencarian%'";
                        $query = $sql;
                        $queryJml = $sql;
                    } else {
                        $query = "SELECT * FROM tb_obat LIMIT $posisi, $batas";
                        $queryJml = "SELECT * FROM tb_obat";
                        $no = $posisi + 1;
                    }
                } else {
                    $query = "SELECT * FROM tb_obat LIMIT $posisi, $batas";
                    $queryJml = "SELECT * FROM tb_obat";
                    $no = $posisi + 1;
                };
                $sql_obat = mysqli_query($con, $query) or die(mysqli_error($con));
                if (mysqli_num_rows($sql_obat) > 0) {
                    while ($data = mysqli_fetch_array($sql_obat)) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $data['nama_obat']; ?></td>
                            <td><?= $data['ket_obat']; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                        <?php }
                } else { ?>
                        <td colspan="4">
                            <div class="alert alert-danger d-flex align-items-center col-5" role="alert">
                                <i class="fa-solid fa-circle-exclamation"></i>&nbsp;
                                <div class="text-uppercase fs-6 fw-bold">Data tidak ditemukan</div>
                            </div>
                        </td>
                    <?php } ?>

                        </tr>

            </tbody>
        </table>
    </div>
</div>
<?php include_once('../_footer.php') ?>