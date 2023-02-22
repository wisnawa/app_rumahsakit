<?php
include_once('../_header.php');
// kita menggunakan UUID version 4
// use Ramsey\Uuid\Uuid;

// $uuid = Uuid::uuid4();
// echo $uuid->toString();
// echo "<br>";
// jagan pergunakan code dibawah ini tidak diperlukan lagi
// printf(
//     "UUID: %s\nVersion: %d\n",
//     $uuid->toString(),
//     $uuid->getFields()->getVersion()
// );
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <a href="#menu-toggle" class="btn btn-primary" id="menu-toggle"><i class="fa-solid fa-bars"></i>&nbsp;Toggle Menu</a>
            <h1>Penambahan Data Dokter</h1>
            <p>Selamat Datang <span style="font-weight: bold; text-transform: capitalize;"><?= $_SESSION['user']; ?></span> Pengguna Rekam Medis</p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <span data-bs-toggle="tooltip" data-bs-placement="bottom" title="Kembali ke data obat">
                    <a href="data.php" class="btn btn-outline-info"><i class="fa-solid fa-backward"></i>&nbsp;Kembali</a>
                </span>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <form action="proses.php" method="post">
                <div class="mb-3">
                    <label for="nama_dokter" class="form-label fw-bold">Nama Dokter:</label>
                    <input type="text" name="nama" class="form-control" id="nama_dokter" aria-describedby="nameHelp" placeholder="Isi nama dokter" required autofocus>
                    <div id="nameHelp" class="form-text text-danger">* Harus diisi</div>
                </div>
                <div class="mb-3">
                    <label for="spes_dokter" class="form-label fw-bold">Spesialis Dokter:</label>
                    <input type="text" name="spesialis" class="form-control" id="spes_dokter" aria-describedby="nameHelp" placeholder="Isi spesialisasi dokter" required>
                    <div id="nameHelp" class="form-text text-danger">* Harus diisi</div>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label fw-bold">Alamat Dokter:</label>
                    <textarea name="alamat" id="alamat" class="form-control" rows="3" required></textarea>
                    <div id="nameHelp" class="form-text text-danger">* Harus diisi</div>
                </div>
                <div class="mb-3">
                    <label for="no_telp" class="form-label fw-bold">Nomor Telphon:</label>
                    <input type="number" name="telp" id="no_telp" class="form-control" aria-describedby="nameHelp" required>
                    <div id="nameHelp" class="form-text text-danger">* Harus diisi</div>
                </div>
                <div class="d-grid justify-content-end">
                    <button type="submit" name="add" class="btn btn-sm btn-outline-success"><i class="fa-regular fa-paper-plane"></i>&nbsp;Kirim Data</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    tooltipTriggerList.forEach(t => {
        new bootstrap.Tooltip(t);
    })
</script>
<?php include_once('../_footer.php') ?>