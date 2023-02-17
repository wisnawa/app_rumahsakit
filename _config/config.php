<?php
// setting default timezone area ('Asia/Jakarta'), ('Asia/Jayapura')
date_default_timezone_set('Asia/Makassar');
session_start();
// connection to database mysql
$con = mysqli_connect('localhost', 'root', '', 'rumahsakit');
if (mysqli_connect_error()) {
    echo mysqli_connect_error();
}
// function base_url
function base_url($url = null)
{
    $base_url = "http://localhost/app_rumahsakit";
    if ($url != null) {
        return $base_url . "/" . $url;
    } else {
        return $base_url;
    }
}
