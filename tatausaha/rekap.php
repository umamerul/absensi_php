<div class="row">
    <div class="col-lg-12" style="margin-top:-10px;">
        <h1 class="page-header">
            Halaman
            <small>Rekap Absensi</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="/som/guru/index.php">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-send"></i> Rekap Absensi
            </li>
        </ol>
    </div>
</div>

<!-- ISI -->
<div class="table-responsive">

    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header" style="margin-top:0px;">
                Rekap Absensi Kelas
            </h3>

            <label>Pilih Range Tanggal :</label>

            <form method="post">
                <table class="table table-hover" style="margin-top:5px;">
                    <tr>
                        <th><label style="margin-top:5px;">Tanggal</label></th>
                        <th><input type="text" class="form-control" name="tanggal1" id="from"></th>
                        <th><label style="margin-top:5px;"> s/d tanggal </label></th>
                        <th><input type="text" class="form-control" name="tanggal2" id="from1"></th>
                        <th><input type="submit" name="submit" class="btn btn-default" value="Rekap"/></th>
                    </tr>
                </table>
            </form>  

            <?php
            //Proses Cari
                if (isset($_POST['submit'])) { 
                    function ubahformatTgl($tanggal) {
                        $pisah = explode('/',$tanggal);
                        $urutan = array($pisah[2],$pisah[0],$pisah[1]);
                        $satukan = implode('-',$urutan);
                        return $satukan;
                    }

                    $tgl1=$_POST['tanggal1'];
                    $tgl2=$_POST['tanggal2'];

                    $tanggal1 = ubahformatTgl($tgl1);
                    $tanggal2 = ubahformatTgl($tgl2);

            ?>
            <center><label>Tanggal&nbsp <?php echo date("d-m-Y", strtotime($tanggal1)); ?> &nbsps/d&nbsp tanggal &nbsp<?php echo date("d-m-Y", strtotime($tanggal2)); ?></label></center>
        
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
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
    </div>


    <div class="row">
        <div class="col-lg-12">
            <div class="tab-content responsive">
            <?php
                $kelas2 = mysql_query("select * from tb_kelas");
                while($row2=mysql_fetch_array($kelas2)){
                    $kelas=$row2['id_kelas'];
                    $kela=$row2['kelas'];
            ?>
            <div class="tab-pane" id="<?php echo $row2['kelas']; ?>" style="margin-top:15px;">
                <div class="row">
                    <h4 class="page-header" style="margin-top:7px;" align="center">
                        Rekap Absensi Kelas <?php echo $kela; ?>
                    </h4>

                    <div class="col-lg-7" style="padding-right:20px; border-right: 1px solid #ccc;">
                        <table class="table table-hover table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="col-md-1">No</th>
                                    <th>NIS</th>
                                    <th>Nama Siswa</th>
                                    <th class="col-md-1">Hadir</th>
                                    <th class="col-md-1">Sakit</th>
                                    <th class="col-md-1">Izin</th>
                                    <th class="col-md-1">Alfa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $view1=mysql_query("select nis, nama_siswa
                                                        from tb_siswa
                                                        where id_kelas='$kelas'
                                                        order by nis asc");
                                    $no=1;
                                    while($raw1=mysql_fetch_array($view1)){
                                    
                                ?>
                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $raw1['nis']; ?></td>
                                    <td><?php echo $raw1['nama_siswa']; ?></td>
                                    <td><?php echo mysql_num_rows(mysql_query("select * from tb_absensih where nis='$raw1[nis]' AND ket='H' AND tanggal between '$tanggal1' and '$tanggal2'")); ?></td>  
                                    <td><?php echo mysql_num_rows(mysql_query("select * from tb_absensih where nis='$raw1[nis]' AND ket='S' AND tanggal between '$tanggal1' and '$tanggal2'")); ?></td>
                                    <td><?php echo mysql_num_rows(mysql_query("select * from tb_absensih where nis='$raw1[nis]' AND ket='I' AND tanggal between '$tanggal1' and '$tanggal2'")); ?></td>
                                    <td><?php echo mysql_num_rows(mysql_query("select * from tb_absensih where nis='$raw1[nis]' AND ket='A' AND tanggal between '$tanggal1' and '$tanggal2'")); ?></td>   
                                </tr>
                                <?php
                                    $no++;
                                    }
                                ?>
                            </tbody>
                        </table>
                        <input type="button" class="btn btn-default" value="Print" onClick="return window.open('print.php?kelas=<?php echo $kelas; ?>&tgl1=<?php echo $tanggal1; ?>&tgl2=<?php echo $tanggal2; ?>','page','toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=0,width=750,height=600,left=50,top=50,titlebar=yes');"/>
                                                
                    </div>

                    <div class="col-lg-5">
                        <h4 class="page-header" style="margin-top:7px;" align="center">
                            Keterangan
                        </h4>
                    </div>
                </div>
            </div>
            <?php
                }
                }
            ?>
            </div>
        </div>
    </div>
</div>