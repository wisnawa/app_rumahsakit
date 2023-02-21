<?php include_once('../_header.php'); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <a href="#menu-toggle" class="btn btn-primary" id="menu-toggle"><i class="fa-solid fa-bars"></i>&nbsp;Toggle Menu</a>
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
                <button id="btnRefresh" class="btn btn-sm btn-outline-warning"><i class="fa-solid fa-arrows-rotate"></i>&nbsp;Refresh</button>
                <a href="generate.php" class="btn btn-sm btn-outline-success"><i class="fa-solid fa-circle-plus"></i>&nbsp;Tambah Data Poliklinik</a>
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
                        <th class="align-middle">Nama Poliklinik</th>
                        <th class="align-middle">Area Gedung</th>
                        <th colspan="2">
                            <!-- <div class="form-check">
                            <input style="float: left; margin-left: 40%" class="form-check-input" type="checkbox" id="select_all">
                            <label class="form-check-label" for="select_all"></label>
                        </div> -->
                            <div style="float: left; margin-left: 50%">
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
                                <td>
                                    <div class="form-check">
                                        <input style="float: left; margin-left: 70%" name="checked[]" class="form-check-input" type="checkbox" value="<?= $data['id_poli']; ?>" id="cityCheck">
                                    </div>
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
    </form>
    <div class="d-grid d-md-flex gap-3 justify-content-md-end">
        <button class="btn btn-sm btn-outline-warning" id="btnEdit"><i class="fa-regular fa-pen-to-square"></i>&nbsp;Edit</button>
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
    var btnEdit = document.getElementById("btnEdit");

    function prosesEdit() {
        document.proses.action = "edit.php";
        document.proses.submit();
    }
    btnEdit.addEventListener("click", prosesEdit)

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