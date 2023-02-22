<?php
require_once "_config/config.php";
// load UUID files
require "assets/libs/vendor/autoload.php";
// 
if (!isset($_SESSION['user'])) {
    echo "<script>window.location='" . base_url('auth/login') . "'</script>";
}; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/fontawesome-6.2.1/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css" />

    <title>Application Web Rumah Sakit</title>
</head>

<body>
    <!-- https://codepen.io/bhujangga/pen/BaOyYJp link for code simple bootstrap templete -->
    <!-- partial:index.partial.html -->
    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#"><span class="text-success" style="font-size: 30px; font-weight: bold;">Rumah Sakit</span></a>
                </li>
                <li>
                    <a href="<?= base_url('dashboard'); ?>">Dashboard</a>
                </li>
                <li>
                    <a href="#">Data Pasien</a>
                </li>
                <li>
                    <a href="<?= base_url('dokter'); ?>">Data Dokter</a>
                </li>
                <li>
                    <a href="<?= base_url('poliklinik'); ?>">Data Poliklinik</a>
                </li>
                <li>
                    <a href="<?= base_url('obat'); ?>">Data Obat</a>
                </li>
                <li>
                    <a href="#">Rekam Medis</a>
                </li>
                <li>
                    <a class="my-style" href="<?= base_url('auth/logout.php'); ?>">Logout</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">