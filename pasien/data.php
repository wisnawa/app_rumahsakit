<?php include_once('../_header.php'); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <a href="#menu-toggle" class="btn btn-primary" id="menu-toggle"><i class="fa-solid fa-bars"></i>&nbsp;Toggle Menu</a>
            <h1>Data Pasien</h1>
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
                <button id="btnRefresh" class="btn btn-sm btn-outline-warning"><i class="fa-solid fa-arrows-rotate"></i>&nbsp;Refresh</button>
                <a href="add.php" class="btn btn-sm btn-outline-success"><i class="fa-solid fa-circle-plus"></i>&nbsp;Tambah Data Dokter</a>
            </div>
            <!-- button process end -->
        </div>
    </div>
</div>
<div class="container">
    <form action="" method="post" name="proses">
        <div class="table-responsive-sm">
            <table class="table table-striped table-hover">
                <thead class="table-primary">
                    <tr>
                        <th class="align-middle">No.</th>
                        <th class="align-middle">No Identitas</th>
                        <th class="align-middle">Nama Pasien</th>
                        <th class="align-middle">Jenis Kelamin</th>
                        <th class="align-middle">Alamat Pasien</th>
                        <th class="align-middle">Nomor Telphon</th>
                        <th>
                            <!-- <div class="form-check">
                            <input style="float: left; margin-left: 40%" class="form-check-input" type="checkbox" id="select_all">
                            <label class="form-check-label" for="select_all"></label>
                        </div> -->
                            <div style="float: none; padding-left: 20%;">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" onclick="selectAll()" type="radio" name="radio_check" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Select All
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" onclick="deselectAll()" type="radio" name="radio_check" id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Clear
                                    </label>
                                </div>
                            </div>
                        </th>
                        <th class="text-center align-middle"><i class="fa-solid fa-gears"></i></th>
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
                    if ($_SERVER['REQUEST_METHOD'] == "POST") {
                        $pencarian = trim(mysqli_real_escape_string($con, $_POST['pencarian']));
                        if ($pencarian != '') {
                            $sql = "SELECT * FROM tb_pasien WHERE nama_pasien LIKE '%$pencarian%'";
                            $query = $sql;
                            $queryJml = $sql;
                        } else {
                            $query = "SELECT * FROM tb_pasien LIMIT $posisi, $batas";
                            $queryJml = "SELECT * FROM tb_pasien";
                            $no = $posisi + 1;
                        }
                    } else {
                        $query = "SELECT * FROM `tb_pasien` ORDER BY `nama_pasien` ASC LIMIT $posisi, $batas";
                        $queryJml = "SELECT * FROM tb_pasien";
                        $no = $posisi + 1;
                    };
                    $no = 1;
                    $sql_pasien = mysqli_query($con, $query) or die(mysqli_error($con));
                    if (mysqli_num_rows($sql_pasien) > 0) {
                        while ($data = mysqli_fetch_array($sql_pasien)) { ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $data['nomor_identitas']; ?></td>
                                <td><?= $data['nama_pasien']; ?></td>
                                <?php if ($data['jenis_kelamin'] == "L") {
                                    $jenis = "Laki-laki";
                                } elseif ($data['jenis_kelamin'] == "P") {
                                    $jenis = "Perempuan";
                                } ?>
                                <td><?= $jenis; ?></td>
                                <td><?= $data['alamat']; ?></td>
                                <td><?= $data['no_telp']; ?></td>
                                <td>
                                    <div class="form-check">
                                        <input style="float: none; margin-left: 30%;" name="checked[]" class="form-check-input" type="checkbox" value="<?= $data['id_pasien']; ?>" id="cityCheck">
                                    </div>
                                </td>
                                <td style="text-align: center; width: 100px;">
                                    <a href="edit.php?id=<?= $data['id_pasien']; ?>" class="btn btn-sm btn-outline-warning"><i class="fa-regular fa-pen-to-square"></i>&nbsp;Edit</a>
                                </td>
                            </tr>
                        <?php }
                    } else { ?>
                        <tr>
                            <td colspan="7">
                                <div class="alert alert-danger d-flex align-items-center col-5" role="alert">
                                    <i class="fa-solid fa-circle-exclamation"></i>&nbsp;
                                    <div class="text-uppercase fs-6 fw-bold">Data belum di tambahkan!</div>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </form>
    <?php
    if (isset($_POST['pencarian']) == null) { ?>
        <div style="float: left;">
            <?php
            $jml = mysqli_num_rows(mysqli_query($con, $queryJml));
            echo "Jumlah Data: <b>$jml</b>";
            ?>
        </div>
        <div style="float: right;">
            <ul class="pagination pagination-sm" style="margin: 0;">
                <?php
                $jml_hal = ceil($jml / $batas);
                for ($i = 1; $i <= $jml_hal; $i++) {
                    if ($i != $hal) {
                        echo "<li class=\"page-item\" ><a class=\"page-link\" href=\"?hal=$i\">$i</a></li>";
                    } else { ?>
                        <li class="page-item active">
                            <span class="page-link"><?= $i; ?></span>
                        </li>
                <?php };
                };
                ?>
            </ul>
        </div>
    <?php

    } else {
        echo "<div style=\"float: left;\">";
        $jml = mysqli_num_rows(mysqli_query($con, $queryJml));
        echo "Data Hasil Pencarian: <b>$jml</b>";
        echo "</div>";
    } ?>
    <br>
    <br>
    <div class="d-grid d-md-flex gap-3 justify-content-md-end">
        <!-- <button class="btn btn-sm btn-outline-warning" id="btnEdit"><i class="fa-regular fa-pen-to-square"></i>&nbsp;Edit</button> -->
        <button class="btn btn-sm btn-outline-danger" id="btnDelete"><i class=" fa-regular fa-trash-can"></i>&nbsp;Hapus Data</button>
    </div>
</div>
<script>
    // function for event onclick in button
    function selectAll() {
        let poliCheck = document.getElementsByName("checked[]");
        let poliCheckLen = poliCheck.length;
        for (var x = 0; x < poliCheckLen; x++) {
            poliCheck[x].checked = true;
        }
    }

    function deselectAll() {
        let poliCheck = document.getElementsByName("checked[]");
        let poliCheckLen = poliCheck.length;
        for (var x = 0; x < poliCheckLen; x++) {
            poliCheck[x].checked = false;
        }
    }
    // function for buttom edit
    // var btnEdit = document.getElementById("btnEdit");

    // function prosesEdit() {
    //     document.proses.action = "edit.php";
    //     document.proses.submit();
    // }
    // btnEdit.addEventListener("click", prosesEdit)

    // function for button delete
    var btnDelete = document.getElementById("btnDelete");

    function prosesDel() {
        var conf = confirm("Apakah hapus data?");
        if (conf) {
            document.proses.action = "del.php";
            document.proses.submit();
        }
    }
    btnDelete.addEventListener("click", prosesDel);
    // function button refresh for event click
    var btnRefresh = document.getElementById("btnRefresh");

    function jalankan() {
        window.location = "data.php";
    }
    btnRefresh.addEventListener("click", jalankan);
</script>
<?php include_once('../_footer.php') ?>