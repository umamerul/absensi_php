<div class="row">
    <div class="col-lg-12" style="margin-top:-10px;">
        <h1 class="page-header">
            Halaman
            <small>Roster Pelajaran</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="/som/guru/index.php">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-send"></i> Roster Pelajaran
            </li>
        </ol>
    </div>
</div>

<!-- Isi -->
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header" style="margin-top:-5px;">
            Edit Roster
        </h3>
    </div>
</div>

<div class="row" style="margin-bottom:10px;">
    <div class="col-lg-8" style="padding-right:20px; border-right: 1px solid #ccc;">
        <h4 align="center">
            <b>Pilih Roster Kelas</b>
        </h4>
    </div>

    <div class="col-lg-4">
        <h4 align="center">
            <b>Keterangan</b>
        </h4>
    </div>
</div>

<div class="row">
    <div class="col-lg-8">
        <?php
        $kelas1 = mysql_query("select * from tb_kelas");
        ?>
        <ul class="nav nav-tabs responsive" id="myTab" style="margin-bottom:10px;">
            <?php
                while($row1=mysql_fetch_array($kelas1)){
            ?>
            <li class="test-class"><a class="deco-none misc-class" href="#<?php echo $row1['kelas']; ?>"> Kelas <?php echo $row1['kelas']; ?></a></li>
            <?php
                }
            ?>
        </ul>
    </div>

    <div class="col-lg-4">
        <ul class="nav nav-tabs responsive" id="myTab" style="margin-bottom:10px;">
            <li class="test-class"><a class="deco-none misc-class" href="#guru"> Guru Mapel</a></li>
            <li class="test-class"><a class="deco-none misc-class" href="#mapel"> Mata Pelajaran</a></li>
        </ul>
    </div>
</div>

<div class="table-responsive">
    <div class="row">
        <div class="col-lg-8" style="padding-right:20px; border-right: 1px solid #ccc;">
            <div class="tab-content responsive">
            <?php
                $kelas2 = mysql_query("select * from tb_kelas");
                while($row2=mysql_fetch_array($kelas2)){
                    $kelas=$row2['id_kelas'];
            ?>
                <div class="tab-pane active" id="<?php echo $row2['kelas']; ?>" style="margin-top:15px;">
                    <div class="row">
                        <h4 class="page-header" style="margin-top:7px;" align="center">
                            <?php
                                $kelas3 = mysql_query("select * from tb_kelas where id_kelas = '$kelas'");
                                $ruw = mysql_fetch_array($kelas3);
                            ?>
                            Roster Kelas <?php echo $ruw['kelas']; ?>
                        </h4>
                        <div class="col-lg-6">
                            <h4 class="page-header" style="margin-top:7px;" align="center">
                                SENIN
                            </h4>
                            <table class="table table-hover table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="col-md-4">Waktu</th>
                                        <th class="col-md-2">MP</th>
                                        <th class="col-md-2">KG</th>
                                        <th class="col-md-4">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $view1=mysql_query("select tb_jadwal.id_jadwal, tb_jadwal.id_mengajar, tb_jadwal.hari, tb_jadwal.jam_mulai, tb_jadwal.jam_berakhir, tb_jadwal.id_kelas, tb_mengajar.kode_guru, tb_mengajar.kode_mapel 
                                                            from tb_jadwal, tb_mengajar
                                                            where tb_jadwal.id_mengajar=tb_mengajar.id_mengajar AND tb_jadwal.hari='Senin' AND tb_jadwal.id_kelas='$kelas'
                                                            order by jam_mulai asc");
                                        while($raw1=mysql_fetch_array($view1)){
                                    ?>
                                    <tr>
                                        <td><?php echo $raw1['jam_mulai'];?> - <?php echo $raw1['jam_berakhir'];?></td>
                                        <td><?php echo $raw1['kode_mapel'];?></td>
                                        <td><?php echo $raw1['kode_guru'];?></td>
                                        <td><i><a href="?page=editroster&id=<?php echo $raw1['id_jadwal'];?>">Edit</a> / <a onclick="return confirm('Yakin akan hapus data ini ?')" href="roster_hapus.php?id=<?php echo $raw1['id_jadwal'];?>">Hapus</a></i></td>
                                    </tr>
                                    <?php
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
                                        <th class="col-md-4">Waktu</th>
                                        <th class="col-md-2">MP</th>
                                        <th class="col-md-2">KG</th>
                                        <th class="col-md-4">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $view2=mysql_query("select tb_jadwal.id_jadwal, tb_jadwal.id_mengajar, tb_jadwal.hari, tb_jadwal.jam_mulai, tb_jadwal.jam_berakhir, tb_jadwal.id_kelas, tb_mengajar.kode_guru, tb_mengajar.kode_mapel 
                                                            from tb_jadwal, tb_mengajar
                                                            where tb_jadwal.id_mengajar=tb_mengajar.id_mengajar AND tb_jadwal.hari='Selasa' AND tb_jadwal.id_kelas='$kelas'
                                                            order by jam_mulai asc");
                                        while($raw2=mysql_fetch_array($view2)){
                                    ?>
                                    <tr>
                                        <td><?php echo $raw2['jam_mulai'];?> - <?php echo $raw2['jam_berakhir'];?></td>
                                        <td><?php echo $raw2['kode_mapel'];?></td>
                                        <td><?php echo $raw2['kode_guru'];?></td>
                                        <td><i><a href="?page=editroster&id=<?php echo $raw2['id_jadwal'];?>">Edit</a> / <a onclick="return confirm('Yakin akan hapus data ini ?')" href="roster_hapus.php?id=<?php echo $raw2['id_jadwal'];?>">Hapus</a></i></td>
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
                            </table>  
                        </div>

                    </div>



                    <div class="row" style="margin-top:12px;">

                        <div class="col-lg-6">
                            <h4 class="page-header" style="margin-top:7px;" align="center">
                                RABU
                            </h4>
                            <table class="table table-hover table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="col-md-4">Waktu</th>
                                        <th class="col-md-2">MP</th>
                                        <th class="col-md-2">KG</th>
                                        <th class="col-md-4">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $view3=mysql_query("select tb_jadwal.id_jadwal, tb_jadwal.id_mengajar, tb_jadwal.hari, tb_jadwal.jam_mulai, tb_jadwal.jam_berakhir, tb_jadwal.id_kelas, tb_mengajar.kode_guru, tb_mengajar.kode_mapel 
                                                            from tb_jadwal, tb_mengajar
                                                            where tb_jadwal.id_mengajar=tb_mengajar.id_mengajar AND tb_jadwal.hari='Rabu' AND tb_jadwal.id_kelas='$kelas'
                                                            order by jam_mulai asc");
                                        while($raw3=mysql_fetch_array($view3)){
                                    ?>
                                    <tr>
                                        <td><?php echo $raw3['jam_mulai'];?> - <?php echo $raw3['jam_berakhir'];?></td>
                                        <td><?php echo $raw3['kode_mapel'];?></td>
                                        <td><?php echo $raw3['kode_guru'];?></td>
                                        <td><i><a href="?page=editroster&id=<?php echo $raw3['id_jadwal'];?>">Edit</a> / <a onclick="return confirm('Yakin akan hapus data ini ?')" href="roster_hapus.php?id=<?php echo $raw3['id_jadwal'];?>">Hapus</a></i></td>
                                    </tr>
                                    <?php
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
                                        <th class="col-md-4">Waktu</th>
                                        <th class="col-md-2">MP</th>
                                        <th class="col-md-2">KG</th>
                                        <th class="col-md-4">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $view4=mysql_query("select tb_jadwal.id_jadwal, tb_jadwal.id_mengajar, tb_jadwal.hari, tb_jadwal.jam_mulai, tb_jadwal.jam_berakhir, tb_jadwal.id_kelas, tb_mengajar.kode_guru, tb_mengajar.kode_mapel 
                                                            from tb_jadwal, tb_mengajar
                                                            where tb_jadwal.id_mengajar=tb_mengajar.id_mengajar AND tb_jadwal.hari='Kamis' AND tb_jadwal.id_kelas='$kelas'
                                                            order by jam_mulai asc");
                                        while($raw4=mysql_fetch_array($view4)){
                                    ?>
                                    <tr>
                                        <td><?php echo $raw4['jam_mulai'];?> - <?php echo $raw4['jam_berakhir'];?></td>
                                        <td><?php echo $raw4['kode_mapel'];?></td>
                                        <td><?php echo $raw4['kode_guru'];?></td>
                                        <td><i><a href="?page=editroster&id=<?php echo $raw4['id_jadwal'];?>">Edit</a> / <a onclick="return confirm('Yakin akan hapus data ini ?')" href="roster_hapus.php?id=<?php echo $raw4['id_jadwal'];?>">Hapus</a></i></td>
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>

                    </div>



                    <div class="row" style="margin-top:12px; margin-bottom:40px;">

                        <div class="col-lg-6">
                            <h4 class="page-header" style="margin-top:7px;" align="center">
                                JUM'AT
                            </h4>
                            <table class="table table-hover table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="col-md-4">Waktu</th>
                                        <th class="col-md-2">MP</th>
                                        <th class="col-md-2">KG</th>
                                        <th class="col-md-4">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $view5=mysql_query("select tb_jadwal.id_jadwal, tb_jadwal.id_mengajar, tb_jadwal.hari, tb_jadwal.jam_mulai, tb_jadwal.jam_berakhir, tb_jadwal.id_kelas, tb_mengajar.kode_guru, tb_mengajar.kode_mapel 
                                                            from tb_jadwal, tb_mengajar
                                                            where tb_jadwal.id_mengajar=tb_mengajar.id_mengajar AND tb_jadwal.hari='Jumat' AND tb_jadwal.id_kelas='$kelas'
                                                            order by jam_mulai asc");
                                        while($raw5=mysql_fetch_array($view5)){
                                    ?>
                                    <tr>
                                        <td><?php echo $raw5['jam_mulai'];?> - <?php echo $raw5['jam_berakhir'];?></td>
                                        <td><?php echo $raw5['kode_mapel'];?></td>
                                        <td><?php echo $raw5['kode_guru'];?></td>
                                        <td><i><a href="?page=editroster&id=<?php echo $raw5['id_jadwal'];?>">Edit</a> / <a onclick="return confirm('Yakin akan hapus data ini ?')" href="roster_hapus.php?id=<?php echo $raw5['id_jadwal'];?>">Hapus</a></i></td>
                                    </tr>
                                    <?php
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
                                        <th class="col-md-4">Waktu</th>
                                        <th class="col-md-2">MP</th>
                                        <th class="col-md-2">KG</th>
                                        <th class="col-md-4">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $view6=mysql_query("select tb_jadwal.id_jadwal, tb_jadwal.id_mengajar, tb_jadwal.hari, tb_jadwal.jam_mulai, tb_jadwal.jam_berakhir, tb_jadwal.id_kelas, tb_mengajar.kode_guru, tb_mengajar.kode_mapel 
                                                            from tb_jadwal, tb_mengajar
                                                            where tb_jadwal.id_mengajar=tb_mengajar.id_mengajar AND tb_jadwal.hari='Sabtu' AND tb_jadwal.id_kelas='$kelas'
                                                            order by jam_mulai asc");
                                        while($raw6=mysql_fetch_array($view6)){
                                    ?>
                                    <tr>
                                        <td><?php echo $raw6['jam_mulai'];?> - <?php echo $raw6['jam_berakhir'];?></td>
                                        <td><?php echo $raw6['kode_mapel'];?></td>
                                        <td><?php echo $raw6['kode_guru'];?></td>
                                        <td><i><a href="?page=editroster&id=<?php echo $raw6['id_jadwal'];?>">Edit</a> / <a onclick="return confirm('Yakin akan hapus data ini ?')" href="roster_hapus.php?id=<?php echo $raw6['id_jadwal'];?>">Hapus</a></i></td>
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="tab-content responsive">
                <div class="tab-pane active" id="guru">
                    <h4 class="page-header" style="margin-top:22px;" align="center">
                        Keterangan Guru
                    </h4>
                    <table class="table table-hover table-bordered table-striped">
                        <thead>
                            <tr>
      
                                <th class="col-md-4">Kode Guru</th>
                                <th class="col-md-8">Nama Guru</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $view7=mysql_query("select * from tb_guru order by kode_guru asc");
                                while($raw7=mysql_fetch_array($view7)){
                            ?>
                            <tr>
                                <td style="text-align: left;"><?php echo $raw7['kode_guru']; ?></td>
                                <td style="text-align: left;"><?php echo $raw7['nama_guru']; ?></td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>

                <div class="tab-pane" id="mapel">
                    <h4 class="page-header" style="margin-top:22px;" align="center">
                        Keterangan Mata Pelajaran
                    </h4>
                    <table class="table table-hover table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="col-md-4">Kode Mapel</th>
                                <th class="col-md-8">Mata Pelajaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $view8=mysql_query("select * from tb_mapel order by kode_mapel asc");
                                while($raw8=mysql_fetch_array($view8)){
                            ?>
                            <tr>
                                <td style="text-align: left;"><?php echo $raw8['kode_mapel']; ?></td>
                                <td style="text-align: left;"><?php echo $raw8['mapel']; ?></td>
                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<!--  K E T E R A N G A N  -->
<div class="row">
    <div class="col-lg-12">
    </div>
</div>