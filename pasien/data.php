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
                <a href="add.php" class="btn btn-sm btn-outline-success"><i class="fa-solid fa-circle-plus"></i>&nbsp;Tambah Data Pasien</a>
            </div>
            <!-- button process end -->
        </div>
    </div>
</div>
<div class="container">
    <div class="table-responsive-sm">
        <table class="table table-striped table-hover">
            <thead class="table-primary">
                <tr>
                    <th class="align-middle">No.</th>
                    <th class="align-middle">Nomor Identitas</th>
                    <th class="align-middle">Nama Pasien</th>
                    <th class="align-middle">Jenis Kelamin</th>
                    <th class="align-middle">Alamat Pasien</th>
                    <th class="align-middle">Nomor Telphon</th>
                    <th class="text-center"><i class="fa-solid fa-gears"></i></th>
                </tr>
            </thead>
        </table>
    </div>
</div>
<script>
    // function for buttom edit
    // var btnEdit = document.getElementById("btnEdit");

    // function prosesEdit() {
    //     document.proses.action = "edit.php";
    //     document.proses.submit();
    // }
    // btnEdit.addEventListener("click", prosesEdit)

    // function for button delete
    // var btnDelete = document.getElementById("btnDelete");

    // function prosesDel() {
    //     var conf = confirm("Apakah hapus data?");
    //     if (conf) {
    //         document.proses.action = "del.php";
    //         document.proses.submit();
    //     }
    // }
    // btnDelete.addEventListener("click", prosesDel);

    // function button refresh for event click
    var btnRefresh = document.getElementById("btnRefresh");

    function jalankan() {
        window.location = "data.php";
    }
    btnRefresh.addEventListener("click", jalankan);
</script>
<?php include_once('../_footer.php') ?>