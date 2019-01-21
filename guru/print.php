<?php
    include "koneksi.php";
    $id_login = @$_GET['login'];
    $mapel = @$_GET['mapel'];
    $tanggal1 = @$_GET['tgl1'];
    $tanggal2 = @$_GET['tgl2'];
    $kode = @$_GET['kelas'];
    $qry=mysql_query("select nis, nama_siswa from tb_siswa where id_kelas=$kode order by nis asc") or die (mysql_error());
    $no=1;
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>SI Absensi -- Guru</title>

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

        body{
            margin-top:0px;
        }
    </style>

</head>
<body onLoad="window.print()">
    <div class="container">
        <?php
            date_default_timezone_set('Asia/Jakarta');
            $qry1=mysql_query("select kelas from tb_kelas where id_kelas=$kode") or die (mysql_error());
            $row1=mysql_fetch_array($qry1);

            $qry2=mysql_query("select mapel from tb_mapel where kode_mapel=$mapel") or die (mysql_error());
            $row2=mysql_fetch_array($qry2);
        ?>
    	<h3 style='text-align:center;'>
            Rekap Absensi<hr>
        </h3> 
        Kelas &nbsp: <?php echo ($row1['kelas']); ?>
        <br>
        Mapel &nbsp: <?php echo ucwords(strtolower($row2['mapel'])); ?>
        <br>
        Tanggal <?php echo date("d-m-Y", strtotime($tanggal1)); ?> &nbsps/d&nbsp tanggal &nbsp<?php echo date("d-m-Y", strtotime($tanggal2)); ?>
        <br><br>

    	<div class="row">
    		<div class="col-lg-12">
    			<div>
    				<table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIS</th>
                                <th>Nama Siswa</th>
                                <th>Hadir</th>
                                <th>Sakit</th>
                                <th>Izin</th>
                                <th>Alfa</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            while($row=mysql_fetch_array($qry)){
                        ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $row['nis']; ?></td>
                                <td style="text-align: left;"><?php echo $row['nama_siswa']; ?></td>
                                <td>
                                    <?php echo mysql_num_rows(mysql_query("SELECT 
                                                                                tb_pengguna.username, 
                                                                                tb_mengajar.id_mengajar, 
                                                                                tb_mengajar.kode_mapel, 
                                                                                tb_guru.kode_guru,
                                                                                tb_jadwal.id_jadwal,
                                                                                tb_absensi.nis,
                                                                                tb_absensi.ket,
                                                                                tb_absensi.tanggal
                                                                            from 
                                                                                tb_pengguna, 
                                                                                tb_mengajar, 
                                                                                tb_guru,
                                                                                tb_jadwal, 
                                                                                tb_absensi
                                                                            where 
                                                                                tb_pengguna.id_pengguna='$id_login' 
                                                                                AND tb_pengguna.username=tb_guru.nip 
                                                                                AND tb_guru.kode_guru=tb_mengajar.kode_guru
                                                                                AND tb_mengajar.kode_mapel='$mapel'
                                                                                AND tb_mengajar.id_mengajar=tb_jadwal.id_mengajar
                                                                                AND tb_jadwal.id_jadwal=tb_absensi.id_jadwal
                                                                                AND tb_absensi.nis='$row[nis]' 
                                                                                AND tb_absensi.ket='H' 
                                                                                AND tb_absensi.tanggal between '$tanggal1' and '$tanggal2'")); ?>
                                </td>  
                                <td>
                                    <?php echo mysql_num_rows(mysql_query("SELECT 
                                                                                tb_pengguna.username, 
                                                                                tb_mengajar.id_mengajar, 
                                                                                tb_mengajar.kode_mapel, 
                                                                                tb_guru.kode_guru,
                                                                                tb_jadwal.id_jadwal,
                                                                                tb_absensi.nis,
                                                                                tb_absensi.ket,
                                                                                tb_absensi.tanggal
                                                                            from 
                                                                                tb_pengguna, 
                                                                                tb_mengajar, 
                                                                                tb_guru,
                                                                                tb_jadwal, 
                                                                                tb_absensi
                                                                            where 
                                                                                tb_pengguna.id_pengguna='$id_login' 
                                                                                AND tb_pengguna.username=tb_guru.nip 
                                                                                AND tb_guru.kode_guru=tb_mengajar.kode_guru
                                                                                AND tb_mengajar.kode_mapel='$mapel'
                                                                                AND tb_mengajar.id_mengajar=tb_jadwal.id_mengajar
                                                                                AND tb_jadwal.id_jadwal=tb_absensi.id_jadwal
                                                                                AND tb_absensi.nis='$row[nis]' 
                                                                                AND tb_absensi.ket='S' 
                                                                                AND tb_absensi.tanggal between '$tanggal1' and '$tanggal2'")); ?>
                                </td>
                                <td>
                                    <?php echo mysql_num_rows(mysql_query("SELECT 
                                                                                tb_pengguna.username, 
                                                                                tb_mengajar.id_mengajar, 
                                                                                tb_mengajar.kode_mapel, 
                                                                                tb_guru.kode_guru,
                                                                                tb_jadwal.id_jadwal,
                                                                                tb_absensi.nis,
                                                                                tb_absensi.ket,
                                                                                tb_absensi.tanggal
                                                                            from 
                                                                                tb_pengguna, 
                                                                                tb_mengajar, 
                                                                                tb_guru,
                                                                                tb_jadwal, 
                                                                                tb_absensi
                                                                            where 
                                                                                tb_pengguna.id_pengguna='$id_login' 
                                                                                AND tb_pengguna.username=tb_guru.nip 
                                                                                AND tb_guru.kode_guru=tb_mengajar.kode_guru
                                                                                AND tb_mengajar.kode_mapel='$mapel'
                                                                                AND tb_mengajar.id_mengajar=tb_jadwal.id_mengajar
                                                                                AND tb_jadwal.id_jadwal=tb_absensi.id_jadwal
                                                                                AND tb_absensi.nis='$row[nis]' 
                                                                                AND tb_absensi.ket='I' 
                                                                                AND tb_absensi.tanggal between '$tanggal1' and '$tanggal2'")); ?>
                                </td>  
                                <td>
                                   <?php echo mysql_num_rows(mysql_query("SELECT 
                                                                                tb_pengguna.username, 
                                                                                tb_mengajar.id_mengajar, 
                                                                                tb_mengajar.kode_mapel, 
                                                                                tb_guru.kode_guru,
                                                                                tb_jadwal.id_jadwal,
                                                                                tb_absensi.nis,
                                                                                tb_absensi.ket,
                                                                                tb_absensi.tanggal
                                                                            from 
                                                                                tb_pengguna, 
                                                                                tb_mengajar, 
                                                                                tb_guru,
                                                                                tb_jadwal, 
                                                                                tb_absensi
                                                                            where 
                                                                                tb_pengguna.id_pengguna='$id_login' 
                                                                                AND tb_pengguna.username=tb_guru.nip 
                                                                                AND tb_guru.kode_guru=tb_mengajar.kode_guru
                                                                                AND tb_mengajar.kode_mapel='$mapel'
                                                                                AND tb_mengajar.id_mengajar=tb_jadwal.id_mengajar
                                                                                AND tb_jadwal.id_jadwal=tb_absensi.id_jadwal
                                                                                AND tb_absensi.nis='$row[nis]' 
                                                                                AND tb_absensi.ket='A' 
                                                                                AND tb_absensi.tanggal between '$tanggal1' and '$tanggal2'")); ?> 
                                </td>  
                            </tr>
                            <?php
                                $no++;
                                }
                            ?>
                        </tbody>
                    </table>
    			</div>
    		</div>
    	</div>
    </div>


	<script src="/som/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/som/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="/som/js/plugins/morris/raphael.min.js"></script>
    <script src="/som/js/plugins/morris/morris.min.js"></script>
    <script src="/som/js/plugins/morris/morris-data.js"></script>
    <script src="js/responsive-tabs.js"></script>
</body>
</html>