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
    <div class="table-responsive-sm">
        <table class="table table-striped table-hover caption-top">
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
                $no = 1;
                $sql_obat = mysqli_query($con, "SELECT * FROM tb_obat") or die(mysqli_error($con));
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