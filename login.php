<?php
    @session_start();
        include "koneksi.php";
        if (@$_SESSION['admin']){
            header("location:inde.php");
        } else  
        if (@$_SESSION['tatausaha']){
            header("location:tatausaha/index.php");
        } else 
        if (@$_SESSION['guru']){
            header("location:guru/index.php");
        } else {
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    <br>
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-lg-12 text-center">
        </div>
        <div class="col-lg-12 text-center">
        <div class="col-lg-12">
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="page-header">
                        <h1>Sistem Absensi Sekolah</h1>
                    </div>
                    
                        <div class="row">
                            <div class="col-lg-12 text-center">
                            </div>
                            <div class="col-lg-12 text-center">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                LOGIN
                            </h1>
                        </div>

                        <form method="post">
                            <div class="row">
                                <div class="col-lg-4 text-center">
                                </div>
                                <div class="col-lg-4 text-center">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input class="form-control" name="username" placeholder="Username">
                                    </div>
                                </div>
                                <div class="col-lg-4 text-center">
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-lg-4 text-center">
                                </div>
                                <div class="col-lg-4 text-center">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" name="pass" placeholder="Password">
                                    </div>
                                </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-8 text-right">
                                </div>
                                <div class="col-lg-8 text-right">
                            
                                <input type="submit" name="login" class="btn btn-primary" value="Log In">
                            </div>
                        </form>

                        <?php
                            if (@$_POST['login']){
                                $username = @$_POST['username'];
                                $pass = @$_POST ['pass'];
                                if ($username == '' || $pass == ''){
                                    ?>
                                    <script type="text/javascript">alert("Username / Password Tidak Boleh Kosong")</script>
                                    <?php
                                } else {
                                    $sql = mysql_query("select * from tb_pengguna where username = '$username' and pass = '$pass'") or die (mysql_error());
                                    $data = mysql_fetch_array($sql);
                                    $cek = mysql_num_rows($sql);
                                        if ($cek >= 1){
                                            if($data['status'] == "admin"){
                                                @$_SESSION ['admin'] = $data ['id_pengguna'];
                                                header("location:/som/inde.php");
                                            } else if($data['status'] == "tatausaha"){
                                                @$_SESSION ['tatausaha'] = $data ['id_pengguna'];
                                                header("location:tatausaha/index.php");
                                            } else if($data['status'] == "guru"){
                                                @$_SESSION ['guru'] = $data ['id_pengguna'];
                                                header("location:guru/index.php");
                                            }
                            
                                        } else  {
                                            ?>
                                            <script type="text/javascript">alert("Login Gagal")</script>
                                            <?php
                                        }
                                }
                            }
                        ?>

                
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <div class="col-lg-4 text-left">
                            </div>
                            <div class="col-lg-4 text-left">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="index.php">BACK</a>
                        </li>
                    </ul>
                
<?php
}
?>