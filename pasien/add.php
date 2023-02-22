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
            <h1>Penambahan Data Pasien</h1>
            <p>Selamat Datang <span style="font-weight: bold; text-transform: capitalize;"><?= $_SESSION['user']; ?></span> Pengguna Rekam Medis</p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <span data-bs-toggle="tooltip" data-bs-placement="bottom" title="Kembali ke data pasien">
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
                    <label for="identitas" class="form-label fw-bold">Nomor Identitas:</label>
                    <input type="number" name="identitas" class="form-control" id="identitas" aria-describedby="nameHelp" placeholder="Isi nomor identitas" required autofocus>
                    <div id="nameHelp" class="form-text text-danger">* Harus diisi</div>
                </div>
                <div class="mb-3">
                    <label for="nama_pasien" class="form-label fw-bold">Nama Pasien:</label>
                    <input type="text" name="nama" class="form-control" id="nama_pasien" aria-describedby="nameHelp" placeholder="Isi nama pasien" required>
                    <div id="nameHelp" class="form-text text-danger">* Harus diisi</div>
                </div>
                <div class="mb-3">
                    <label for="flexRadioDefault1" class="form-label fw-bold">Jenis Kelamin:</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jk" value="L" id="flexRadioDefault1" required>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Laki - laki
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jk" value="P" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Perempuan
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label fw-bold">Alamat Pasien:</label>
                    <textarea name="alamat" id="alamat" class="form-control" rows="3" placeholder="Alamat dokter" required></textarea>
                    <div id="nameHelp" class="form-text text-danger">* Harus diisi</div>
                </div>
                <div class="mb-3">
                    <label for="no_telp" class="form-label fw-bold">Nomor Telphon:</label>
                    <input type="number" name="telp" id="no_telp" class="form-control" aria-describedby="nameHelp" placeholder="Nomor telp / hp" required>
                    <div id="nameHelp" class="form-text text-danger">* Harus diisi dengan angka</div>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="reset" class="btn btn-sm btn-outline-warning"><i class="fa-solid fa-arrows-rotate"></i>&nbsp;Reset</button>
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