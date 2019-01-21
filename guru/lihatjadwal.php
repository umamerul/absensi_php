<?php
    @session_start();
    include "koneksi.php";

    if(@$_SESSION['guru']){
        $id_login=@$_SESSION['guru'];
?>

<div class="row">
    <div class="col-lg-12" style="margin-top:-10px;">
        <h1 class="page-header">
            Halaman
            <small>Lihat Jadwal</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="/som/guru/index.php">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-bell"></i> Lihat Jadwal
            </li>
        </ol>
    </div>
</div>

<!-- ISI -->
<div class="row" style="margin-top:30px;">
    <div class="col-lg-5">
        <h3 class="page-header" style="margin-top:0px;">
            Data Guru
        </h3>
        <?php
            $viow=mysql_query("select tb_pengguna.username, tb_guru.nama_guru
                                    from tb_pengguna, tb_guru
                                    where tb_pengguna.id_pengguna='$id_login' AND tb_pengguna.username=tb_guru.nip");
            $rew=mysql_fetch_array($viow);

        ?>
        <div class="form-group">
            <label>Nama</label>
            <input class="form-control" value=" <?php echo $rew['nama_guru']; ?>" readonly="readonly">
        </div><br>

        <?php
            $view=mysql_query("select tb_pengguna.username, tb_mengajar.id_mengajar, tb_mengajar.kode_mapel, tb_guru.kode_guru, tb_mapel.mapel
                                    from tb_pengguna, tb_mengajar, tb_guru, tb_mapel 
                                    where tb_pengguna.id_pengguna='$id_login' AND tb_pengguna.username=tb_guru.nip AND tb_guru.kode_guru=tb_mengajar.kode_guru 
                                    AND tb_mengajar.kode_mapel=tb_mapel.kode_mapel") or die (mysql_error());
            $hitung=mysql_num_rows($view);
        ?>
        <label>Jumlah Mata Pelajaran : <?php echo $hitung; ?></label><br>
        <?php
            while($row=mysql_fetch_array($view)){
        ?>
        <div class="form-group">
            <label>Mata Pelajaran</label>
            <input class="form-control" value=" <?php echo $row['mapel']; ?>" readonly="readonly">
        </div>

        <div class="form-group">
            <label>Kode Mapel</label>
            <input class="form-control" value=" <?php echo $row['kode_mapel']; ?>" readonly="readonly">
        </div><br>
        <?php
            }
        ?>
    </div>


    
    <div class="col-lg-7" style="border-left: 1px solid #ccc;">
        <h3 class="page-header" style="margin-top:0px;">
            Jadwal Mengajar
        </h3>
        <div class="table-responsive">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="page-header" style="margin-top:7px;" align="center">
                        SENIN
                    </h4>
                    <table class="table table-hover table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kelas</th>
                                <th>KM</th>
                                <th>Waktu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $view1=mysql_query("select tb_pengguna.username, tb_mengajar.id_mengajar, tb_guru.kode_guru, 
                                                    tb_jadwal.id_mengajar, tb_jadwal.hari, tb_jadwal.jam_mulai, tb_jadwal.jam_berakhir, tb_jadwal.id_kelas, 
                                                    tb_mengajar.kode_mapel, tb_kelas.kelas
                                                    from tb_pengguna, tb_mengajar, tb_guru, tb_jadwal, tb_kelas
                                                    where tb_pengguna.id_pengguna='$id_login' AND tb_pengguna.username=tb_guru.nip AND tb_guru.kode_guru=tb_mengajar.kode_guru 
                                                    AND tb_mengajar.id_mengajar=tb_jadwal.id_mengajar AND tb_jadwal.id_kelas=tb_kelas.id_kelas AND tb_jadwal.hari='Senin'
                                                    order by jam_mulai asc");
                                $no=1;
                                while($raw1=mysql_fetch_array($view1)){
                            ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $raw1['kelas']; ?></td>
                                <td><?php echo $raw1['kode_mapel']; ?></td>
                                <td><?php echo $raw1['jam_mulai']; ?> - <?php echo $raw1['jam_berakhir'] ?></td>
                            </tr>
                            <?php
                                $no++;
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-6">
                    <h4 class="page-header" style="margin-top:7px;" align="center">
                        SELASA
                    </h4>
                    <table class="table table-hover table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kelas</th>
                                <th>KM</th>
                                <th>Waktu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $view2=mysql_query("select tb_pengguna.username, tb_mengajar.id_mengajar, tb_guru.kode_guru, 
                                                    tb_jadwal.id_mengajar, tb_jadwal.hari, tb_jadwal.jam_mulai, tb_jadwal.jam_berakhir, tb_jadwal.id_kelas, 
                                                    tb_mengajar.kode_mapel, tb_kelas.kelas
                                                    from tb_pengguna, tb_mengajar, tb_guru, tb_jadwal, tb_kelas
                                                    where tb_pengguna.id_pengguna='$id_login' AND tb_pengguna.username=tb_guru.nip AND tb_guru.kode_guru=tb_mengajar.kode_guru 
                                                    AND tb_mengajar.id_mengajar=tb_jadwal.id_mengajar AND tb_jadwal.id_kelas=tb_kelas.id_kelas AND tb_jadwal.hari='Selasa'
                                                    order by jam_mulai asc");
                                $no=1;
                                while($raw2=mysql_fetch_array($view2)){
                            ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $raw2['kelas']; ?></td>
                                <td><?php echo $raw2['kode_mapel']; ?></td>
                                <td><?php echo $raw2['jam_mulai']; ?> - <?php echo $raw2['jam_berakhir'] ?></td>
                            </tr>
                            <?php
                                $no++;
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <h4 class="page-header" style="margin-top:7px;" align="center">
                        RABU
                    </h4>
                    <table class="table table-hover table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kelas</th>
                                <th>KM</th>
                                <th>Waktu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $view3=mysql_query("select tb_pengguna.username, tb_mengajar.id_mengajar, tb_guru.kode_guru, 
                                                    tb_jadwal.id_mengajar, tb_jadwal.hari, tb_jadwal.jam_mulai, tb_jadwal.jam_berakhir, tb_jadwal.id_kelas, 
                                                    tb_mengajar.kode_mapel, tb_kelas.kelas
                                                    from tb_pengguna, tb_mengajar, tb_guru, tb_jadwal, tb_kelas
                                                    where tb_pengguna.id_pengguna='$id_login' AND tb_pengguna.username=tb_guru.nip AND tb_guru.kode_guru=tb_mengajar.kode_guru 
                                                    AND tb_mengajar.id_mengajar=tb_jadwal.id_mengajar AND tb_jadwal.id_kelas=tb_kelas.id_kelas AND tb_jadwal.hari='Rabu'
                                                    order by jam_mulai asc");
                                $no=1;
                                while($raw3=mysql_fetch_array($view3)){
                            ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $raw3['kelas']; ?></td>
                                <td><?php echo $raw3['kode_mapel']; ?></td>
                                <td><?php echo $raw3['jam_mulai']; ?> - <?php echo $raw3['jam_berakhir'] ?></td>
                            </tr>
                            <?php
                                $no++;
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-6">
                    <h4 class="page-header" style="margin-top:7px;" align="center">
                        KAMIS
                    </h4>
                    <table class="table table-hover table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kelas</th>
                                <th>KM</th>
                                <th>Waktu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $view4=mysql_query("select tb_pengguna.username, tb_mengajar.id_mengajar, tb_guru.kode_guru, 
                                                    tb_jadwal.id_mengajar, tb_jadwal.hari, tb_jadwal.jam_mulai, tb_jadwal.jam_berakhir, tb_jadwal.id_kelas, 
                                                    tb_mengajar.kode_mapel, tb_kelas.kelas
                                                    from tb_pengguna, tb_mengajar, tb_guru, tb_jadwal, tb_kelas
                                                    where tb_pengguna.id_pengguna='$id_login' AND tb_pengguna.username=tb_guru.nip AND tb_guru.kode_guru=tb_mengajar.kode_guru 
                                                    AND tb_mengajar.id_mengajar=tb_jadwal.id_mengajar AND tb_jadwal.id_kelas=tb_kelas.id_kelas AND tb_jadwal.hari='Kamis'
                                                    order by jam_mulai asc");
                                $no=1;
                                while($raw4=mysql_fetch_array($view4)){
                            ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $raw4['kelas']; ?></td>
                                <td><?php echo $raw4['kode_mapel']; ?></td>
                                <td><?php echo $raw4['jam_mulai']; ?> - <?php echo $raw4['jam_berakhir'] ?></td>
                            </tr>
                            <?php
                                $no++;
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <h4 class="page-header" style="margin-top:7px;" align="center">
                        JUM'AT
                    </h4>
                    <table class="table table-hover table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kelas</th>
                                <th>KM</th>
                                <th>Waktu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $view5=mysql_query("select tb_pengguna.username, tb_mengajar.id_mengajar, tb_guru.kode_guru, 
                                                    tb_jadwal.id_mengajar, tb_jadwal.hari, tb_jadwal.jam_mulai, tb_jadwal.jam_berakhir, tb_jadwal.id_kelas, 
                                                    tb_mengajar.kode_mapel, tb_kelas.kelas
                                                    from tb_pengguna, tb_mengajar, tb_guru, tb_jadwal, tb_kelas
                                                    where tb_pengguna.id_pengguna='$id_login' AND tb_pengguna.username=tb_guru.nip AND tb_guru.kode_guru=tb_mengajar.kode_guru 
                                                    AND tb_mengajar.id_mengajar=tb_jadwal.id_mengajar AND tb_jadwal.id_kelas=tb_kelas.id_kelas AND tb_jadwal.hari='Jumat'
                                                    order by jam_mulai asc");
                                $no=1;
                                while($raw5=mysql_fetch_array($view5)){
                            ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $raw5['kelas']; ?></td>
                                <td><?php echo $raw5['kode_mapel']; ?></td>
                                <td><?php echo $raw5['jam_mulai']; ?> - <?php echo $raw5['jam_berakhir'] ?></td>
                            </tr>
                            <?php
                                $no++;
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-6">
                    <h4 class="page-header" style="margin-top:7px;" align="center">
                        SABTU
                    </h4>
                    <table class="table table-hover table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kelas</th>
                                <th>KM</th>
                                <th>Waktu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $view6=mysql_query("select tb_pengguna.username, tb_mengajar.id_mengajar, tb_guru.kode_guru, 
                                                    tb_jadwal.id_mengajar, tb_jadwal.hari, tb_jadwal.jam_mulai, tb_jadwal.jam_berakhir, tb_jadwal.id_kelas, 
                                                    tb_mengajar.kode_mapel, tb_kelas.kelas
                                                    from tb_pengguna, tb_mengajar, tb_guru, tb_jadwal, tb_kelas
                                                    where tb_pengguna.id_pengguna='$id_login' AND tb_pengguna.username=tb_guru.nip AND tb_guru.kode_guru=tb_mengajar.kode_guru 
                                                    AND tb_mengajar.id_mengajar=tb_jadwal.id_mengajar AND tb_jadwal.id_kelas=tb_kelas.id_kelas AND tb_jadwal.hari='Sabtu'
                                                    order by jam_mulai asc");
                                $no=1;
                                while($raw6=mysql_fetch_array($view6)){
                            ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $raw6['kelas']; ?></td>
                                <td><?php echo $raw6['kode_mapel']; ?></td>
                                <td><?php echo $raw6['jam_mulai']; ?> - <?php echo $raw6['jam_berakhir'] ?></td>
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
</div>

<?php
    }
?>