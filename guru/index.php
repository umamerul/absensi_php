<?php
    @session_start();
    include "koneksi.php";

    if(@$_SESSION['guru']){
        $id_login=@$_SESSION['guru'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SI Absensi -- Guru</title>

    <link rel="stylesheet" type="text/css"  href="/som/css/smart-forms.css">

    <!-- Bootstrap Core CSS -->
    <link href="/som/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/som/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="/som/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/som/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <style>
        .table th {
           text-align: center;   
        }

        .table td {
           text-align: center;   
        }
    </style>

</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/som/guru/index.php">SB GURU</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li>
                    <a href = "">Hari ini :  
                        <?php
                            function tanggal($format,$nilai="now"){
                                $en=array("Sun","Mon","Tue","Wed","Thu","Fri","Sat","Jan","Feb",
                                "Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
                                $id=array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu",
                                "Jan","Feb","Maret","April","Mei","Juni","Juli","Agustus","September",
                                "Oktober","November","Desember");
                                return str_replace($en,$id,date($format,strtotime($nilai)));
                            }
                            
                            date_default_timezone_set('Asia/Jakarta');
                            $tanggal=date('d-m-Y');
                            echo tanggal("D, j M Y");
     
                        ?>
                    </a>
                </li>
                <li>
                    <a> 
                    Pukul <span id="jam"></span>
                    </a>

                </li>
               
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> &nbsp; Guru <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="/som/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="/som/guru/index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="?page=absensi"><i class="fa fa-fw fa-send"></i> Absensi</a>
                    </li>
                    <li>
                        <a href="?page=lihatjadwal"><i class="fa fa-fw fa-bell"></i> Lihat Jadwal</a>
                    </li>
                    <li>
                        <a href="?page=rekap"><i class="fa fa-fw fa-calendar"></i> Rekap Kehadiran</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <?php
                if(@$_GET['page']==''){
                include "home.php";
                } else if(@$_GET['page']=='absensi'){
                include"absensi.php";     
                } else if(@$_GET['page']=='absensi2'){
                include"absensi2.php";     
                } else if(@$_GET['page']=='lihatjadwal'){
                include"lihatjadwal.php";     
                } else if(@$_GET['page']=='rekap'){
                include"rekap.php";     
                } 
                ?>

            </div>

        </div>

    </div>
    <script src="/som/js/jquery.js"></script>

    <script type="text/javascript" src="/som/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="/som/js/jquery-ui-custom.min.js"></script>

    <script src="/som/js/jfunc.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/som/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="/som/js/plugins/morris/raphael.min.js"></script>
    <script src="/som/js/plugins/morris/morris.min.js"></script>
    <script src="/som/js/plugins/morris/morris-data.js"></script>
    <script src="js/responsive-tabs.js"></script>
    <script type="text/javascript">

      $( 'ul.nav.nav-tabs  a' ).click( function ( e ) {
        e.preventDefault();
        $( this ).tab( 'show' );
      } );

      ( function( $ ) {
          // Test for making sure event are maintained
          $( '.js-alert-test' ).click( function () {
            alert( 'Button Clicked: Event was maintained' );
          } );
          fakewaffle.responsiveTabs( [ 'xs', 'sm' ] );
      } )( jQuery );

    </script>
</body>
</html>

<?php
    } else {
        header("location: /som/login.php");
    }
?>