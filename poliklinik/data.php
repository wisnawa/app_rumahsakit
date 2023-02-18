<?php include_once('../_header.php'); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <a href="#menu-toggle" class="btn btn-primary" id="menu-toggle">Toggle Menu</a>
            <h1>Data Poliklinik</h1>
            <p>Selamat Datang <span style="font-weight: bold; text-transform: capitalize;"><?= $_SESSION['user']; ?></span> Pengguna Rekam Medis</p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-6">
            <!-- <form action="" method="post">
                <div class="input-group mb-3">
                    <input type="text" name="pencarian" class="form-control" placeholder="Pencarian" aria-label="Pencarian" aria-describedby="button-addon1">
                    <button class="btn btn-outline-primary" type="submit" id="button-addon1"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </form> -->
        </div>
        <div class="col-6">
            <!-- button process start -->
            <div class="d-grid gap-3 d-md-flex justify-content-md-end mb-2">
                <a href="#" class="btn btn-sm btn-outline-warning" type="reset"><i class="fa-solid fa-arrows-rotate"></i>&nbsp;Refresh Data</a>
                <a href="add.php" class="btn btn-sm btn-outline-success"><i class="fa-regular fa-paper-plane"></i>&nbsp;Tambah Data Poliklinik</a>
            </div>
            <!-- button process end -->
        </div>
    </div>
</div>
<div class="container">
    <div class="table-responsive-sm">
        <table class="table table-striped table-hover">
            <caption>List Poliklinik</caption>
            <thead class="table-primary">
                <tr>
                    <th>No.</th>
                    <th>Nama Poliklinik</th>
                    <th>Area Gedung</th>
                    <th colspan="2" class="">
                        <!-- <div class="container"> -->
                        <!-- <div class="row align-items-center"> -->
                        <!-- <div class="col"> -->
                        <div class="form-check">
                            <input name="select_all" class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault"></label>
                        </div>
                        <!-- </div> -->
                        <!-- </div> -->
                        <!-- </div> -->
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $sql_poli = mysqli_query($con, "SELECT * FROM `tb_poliklinik`") or die(mysqli_error($con));
                if (mysqli_num_rows($sql_poli) > 0) {
                    while ($data = mysqli_fetch_array($sql_poli)) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $data['nama_poli']; ?></td>
                            <td><?= $data['gedung']; ?></td>
                            <td style="text-align: center; width: 100px;">
                                <a href="edit.php?id=<?= $data['id_poli']; ?>" class="btn btn-sm btn-outline-warning"><i class="fa-regular fa-pen-to-square"></i>&nbsp;Edit</a>
                            </td>
                            <td style="text-align: center; width: 100px;">
                                <a href="del.php?id=<?= $data['id_poli']; ?>" class="btn btn-sm btn-outline-danger" onclick="confirm('Yakin dihapus?')"><i class="fa-regular fa-trash-can"></i>&nbsp;Delete</a>
                            </td>
                        </tr>
                    <?php }
                } else { ?>
                    <tr>
                        <td colspan="4">
                            <div class="alert alert-danger d-flex align-items-center" role="alert">
                                <i class="fa-solid fa-circle-exclamation"></i>&nbsp;
                                <div class="text-uppercase fs-6 fw-bold">Data tidak ditemukan</div>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php include_once('../_footer.php') ?>