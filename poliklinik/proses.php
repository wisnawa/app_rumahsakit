<?php
require_once "../_config/config.php";
// load UUID files
require "../assets/libs/vendor/autoload.php";
// kita menggunakan UUID version 4
use Ramsey\Uuid\Uuid;

// $uuid = Uuid::uuid4();
// echo $uuid->toString();
// echo "<br>";
// jagan pergunakan code dibawah ini tidak diperlukan lagi
// printf(
//     "UUID: %s\nVersion: %d\n",
//     $uuid->toString(),
//     $uuid->getFields()->getVersion()
// );
if (isset($_POST['add'])) {
    $total = $_POST['total'];
    for ($i = 1; $i <= $total; $i++) {
        $uuid = Uuid::uuid4()->toString();
        $nama = trim(mysqli_real_escape_string($con, $_POST['nama-' . $i]));
        $gedung = trim(mysqli_real_escape_string($con, $_POST['gedung-' . $i]));
        $sql = mysqli_query($con, "INSERT INTO tb_poliklinik (`id_poli`, `nama_poli`, `gedung`) VALUES ('$uuid', '$nama', '$gedung')") or die(mysqli_error($con));
    }
    if ($sql) {
        echo "<script>alert('" . $total . " data berhasil ditambahkan'); window.location='data.php';</script>";
    } else {
        echo "<script>alert('Gagal tambah data, coba lagi!'); window.location='generate.php';</script>";
    }
} elseif (isset($_POST['edit'])) {
    for ($i = 0; $i < count($_POST['id']); $i++) {
        $id = $_POST['id'][$i];
        $nama = $_POST['nama'][$i];
        $gedung = $_POST['gedung'][$i];
        mysqli_query($con, "UPDATE `tb_poliklinik` SET `nama_poli` = '$nama', `gedung` = '$gedung' WHERE `id_poli` = '$id'") or die(mysqli_error($con));
    }
    echo "<script>alert('Data Berhasil Di Tambahkan!'); window.location='data.php';</script>";
}
