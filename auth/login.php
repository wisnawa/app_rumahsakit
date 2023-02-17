<?php
require_once "../_config/config.php";
if (isset($_SESSION['user'])) {
    echo "<script>window.location='" . base_url() . "'</script>";
} else { ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" /> -->
        <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url(); ?>/assets/fontawesome-6.2.1/css/all.min.css">
        <!-- <link rel="stylesheet" href="../assets/css/style.css" /> -->
        <title>Login - Rumah Sakit</title>
    </head>

    <body>
        <div class="container" style="margin-top: 150px;">
            <?php if (isset($_POST['login'])) {
                $user = trim(mysqli_real_escape_string($con, $_POST['user']));
                $pass = sha1(trim(mysqli_real_escape_string($con, $_POST['pass'])));
                $sql_login = mysqli_query($con, "SELECT * FROM tb_user WHERE username = '$user' AND `password` = '$pass'") or die(mysqli_error($con));
                if (mysqli_num_rows($sql_login) > 0) {
                    $_SESSION['user'] = $user;
                    echo "<script>window.location='" . base_url() . "'</script>";
                } else { ?>
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <i class="fa-solid fa-triangle-exclamation"></i>
                                <strong>Login Fail</strong> <span style="color: red;">Wrong Username or Password</span>.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </div>
                    </div>
            <?php }
            } ?>
            <form action="" method="post">
                <div class="row justify-content-center">
                    <div class="col-5">
                        <div class="input-group flex-nowrap input-group-sm">
                            <span class="input-group-text" id="user_name"><i class="fa-solid fa-user"></i></span>
                            <input type="text" name="user" class="form-control" placeholder="user name" aria-label="Username" aria-describedby="user_name" autocomplete="off" required autofocus>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-5">
                        <div class="input-group flex-nowrap input-group-sm mt-3">
                            <span class="input-group-text" id="password"><i class="fa-solid fa-unlock"></i></span>
                            <input type="password" name="pass" class="form-control" placeholder="input password" aria-label="Username" aria-describedby="password" required>
                        </div>
                    </div>
                </div>
                <!-- button process start -->
                <div class="row justify-content-center mt-2">
                    <div class="col-5 d-grid">
                        <input type="submit" value="Login" name="login" class="btn btn-outline-success btn-sm">
                    </div>
                </div>
            </form>
        </div>
        <!-- script js -->
        <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
        <script src="../assets/js/bootstrap.bundle.min.js"></script>
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script> -->
        <!-- <script src="../assets/js/script.js"></script> -->
    </body>

    </html>
<?php }; ?>