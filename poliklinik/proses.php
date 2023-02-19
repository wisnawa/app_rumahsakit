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
    $uuid = Uuid::uuid4()->toString();
    $nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
    $ket = trim(mysqli_real_escape_string($con, $_POST['ket']));
    mysqli_query($con, "INSERT INTO tb_obat (`id_obat`, `nama_obat`, `ket_obat`) VALUES ('$uuid', '$nama', '$ket')") or die(mysqli_error($con));
    echo "<script>window.location='data.php';</script>";
} elseif (isset($_POST['edit'])) {
}
