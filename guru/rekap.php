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
            <small>Rekap Kehadiran</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="/som/guru/index.php">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-calendar"></i> Rekap Kehadiran
            </li>
        </ol>
    </div>
</div>

<!-- ISI -->
<div class="table-responsive">
	<div class="row" style="margin-top:30px;">
	    <div class="col-lg-4">
	    	<h3 class="page-header" style="margin-top:0px;">
	            Data Guru
	        </h3>
	        <?php
	            $view=mysql_query("select 
	            						tb_pengguna.username, 
	            						tb_guru.nama_guru
	                                from 
	                                	tb_pengguna, 
	                                	tb_guru
	                                where 
	                                	tb_pengguna.id_pengguna='$id_login' 
	                                	AND tb_pengguna.username=tb_guru.nip");
	            $row=mysql_fetch_array($view);

	        ?>
	        <div class="form-group">
	            <label>Nama</label>
	            <input class="form-control" value=" <?php echo $row['nama_guru']; ?>" readonly="readonly">
	        </div><br>

	        <?php
	            $view1=mysql_query("select 
	            						tb_pengguna.username, 
	            						tb_mengajar.id_mengajar, 
	            						tb_mengajar.kode_mapel, 
	            						tb_guru.kode_guru, 
	            						tb_mapel.mapel
	  
	                                from 
	                                	tb_pengguna, 
	                                	tb_mengajar, 
	                                	tb_guru, 
	                                	tb_mapel 
	                                where 
	                                	tb_pengguna.id_pengguna='$id_login' 
	                                	AND tb_pengguna.username=tb_guru.nip 
	                                	AND tb_guru.kode_guru=tb_mengajar.kode_guru 
	                                    AND tb_mengajar.kode_mapel=tb_mapel.kode_mapel") 
	            or die (mysql_error());
	            $num=mysql_num_rows($view1);
	        ?>
	        <label>Jumlah Mata Pelajaran : <?php echo $num; ?></label><br>
	        <?php
	            while($row1=mysql_fetch_array($view1)){
	        ?>
	        <div class="form-group">
	            <label>Mata Pelajaran</label>
	            <input class="form-control" value=" <?php echo $row1['mapel']; ?>" readonly="readonly">
	        </div>

	        <div class="form-group">
	            <label>Kode Mapel</label>
	            <input class="form-control" value=" <?php echo $row1['kode_mapel']; ?>" readonly="readonly">
	        </div><br>
	        <?php
	            }
	        ?>
	    </div>



	    <div class="col-lg-8" style="border-left: 1px solid #ccc;">
	    	<div class="row">
        		<div class="col-lg-12">
			    	<h3 class="page-header" style="margin-top:0px;">
			            Rekap
			        </h3>

			        <label>Pilih Range Tanggal :</label>

			        <form method="post">
			            <table class="table table-hover" style="margin-top:5px;">
			                <tr>
			                    <th><label style="margin-top:5px;">Tanggal</label></th>
			                    <th><input type="text" class="form-control" name="tanggal1" id="from"></th>
			                    <th><label style="margin-top:5px;"> s/d </label></th>
			                    <th><input type="text" class="form-control" name="tanggal2" id="from1"></th>
			                    <th><input type="submit" name="submit" class="btn btn-default" value="Rekap"/></th>
			                </tr>
			            </table>
			        </form>  

			        <?php
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
			        <hr>
			    </div>
			</div>

			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				<?php
		            $view5=mysql_query("select 
		            						tb_pengguna.username, 
		            						tb_mengajar.id_mengajar, 
		            						tb_mengajar.kode_mapel, 
		            						tb_guru.kode_guru
		                                from 
		                                	tb_pengguna, 
		                                	tb_mengajar, 
		                                	tb_guru 
		                                where 
		                                	tb_pengguna.id_pengguna='$id_login' 
		                                	AND tb_pengguna.username=tb_guru.nip 
		                                	AND tb_guru.kode_guru=tb_mengajar.kode_guru") 
		            or die (mysql_error());

		            $nomor1=0;
		            while($row5=mysql_fetch_array($view5)){
		            	$kodemapel=$row5['kode_mapel'];
		        ?>
				<div class="panel panel-default">
			    	<div class="panel-heading" role="tab">
			      		<h4 class="panel-title">
			        		<a role="button" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $row5['kode_mapel'] ?>" aria-expanded="true">
			          			Kode Mapel <?php echo $row5['kode_mapel']; ?> &nbsp<i class="fa fa-caret-square-o-down"></i>
			        		</a>
			      		</h4>
			    	</div>
				    <div id="<?php echo $row5['kode_mapel'] ?>" class="panel-collapse collapse" role="tabpanel">
				    	<div class="panel-body">
				        	<div class="row">
						        <div class="col-lg-12">
						            <?php
						            $view2 = mysql_query("select * from tb_kelas");
						            ?>
						            <ul class="nav nav-tabs responsive" id="myTab" style="margin-bottom:10px;">
						                <?php
						                	$nomor2=0;
						                    while($row2=mysql_fetch_array($view2)){       
						                ?>
						                <li class="test-class"><a class="deco-none misc-class" href="#<?php echo $nomor1.$nomor2; ?>"> Kelas <?php echo $row2['kelas']; ?></a></li>
						                <?php
						                	$nomor2++;
						                    }
						                ?>
						            </ul>
						        </div>
						    </div>


						    <div class="row">
						        <div class="col-lg-12">
						            <div class="tab-content responsive">
						            <?php
						                $view3 = mysql_query("select * from tb_kelas");
						                $nomor3=0;
						                while($row3=mysql_fetch_array($view3)){
						                	$kelasid=$row3['id_kelas'];
						            ?>
							            <div class="tab-pane" id="<?php echo $nomor1.$nomor3; ?>" style="margin-top:15px;">
							                <div class="row">
							                    <h4 class="page-header" style="margin-top:7px;" align="center">
							                        Rekap Absensi Kelas <?php echo $row3['kelas']; ?>
							                    </h4>

							                    <div class="col-lg-12" style="padding-right:20px; border-right: 1px solid #ccc;">
							                    	<form method="POST" action="">
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
							                                    <th class="col-md-1">Action</th>
							                                </tr>
							                            </thead>
							                            <tbody>
							                                <?php
							                                    $view4=mysql_query("select nis, nama_siswa
							                                                        from tb_siswa
							                                                        where id_kelas='$kelasid'
							                                                        order by nis asc");
							                                    $no=1;
							                                    while($row4=mysql_fetch_array($view4)){
							                                ?>
							                                <tr>
							                                    <td><?php echo $no; ?></td>
							                                    <td style="text-align: left;"><?php echo $row4['nis']; ?></td>
							                                    <td style="text-align: left;"><?php echo $row4['nama_siswa']; ?></td>
							                                    <td><?php echo mysql_num_rows(mysql_query("SELECT 
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
																		AND tb_mengajar.kode_mapel='$row5[kode_mapel]'
																		AND tb_mengajar.id_mengajar=tb_jadwal.id_mengajar
																		AND tb_jadwal.id_jadwal=tb_absensi.id_jadwal
							                                    		AND tb_absensi.nis='$row4[nis]' 
							                                    		AND tb_absensi.ket='H' 
							                                    		AND tb_absensi.tanggal between '$tanggal1' and '$tanggal2'")); ?>
							                                    </td> 
							                                    <td><?php echo mysql_num_rows(mysql_query("SELECT 
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
																		AND tb_mengajar.kode_mapel='$row5[kode_mapel]'
																		AND tb_mengajar.id_mengajar=tb_jadwal.id_mengajar
																		AND tb_jadwal.id_jadwal=tb_absensi.id_jadwal
							                                    		AND tb_absensi.nis='$row4[nis]' 
							                                    		AND tb_absensi.ket='S' 
							                                    		AND tb_absensi.tanggal between '$tanggal1' and '$tanggal2'")); ?>
							                                    </td>
							                                    <td><?php echo mysql_num_rows(mysql_query("SELECT 
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
																		AND tb_mengajar.kode_mapel='$row5[kode_mapel]'
																		AND tb_mengajar.id_mengajar=tb_jadwal.id_mengajar
																		AND tb_jadwal.id_jadwal=tb_absensi.id_jadwal
							                                    		AND tb_absensi.nis='$row4[nis]' 
							                                    		AND tb_absensi.ket='I' 
							                                    		AND tb_absensi.tanggal between '$tanggal1' and '$tanggal2'")); ?>
							                                    </td>
							                                    <td><?php echo mysql_num_rows(mysql_query("SELECT 
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
																		AND tb_mengajar.kode_mapel='$row5[kode_mapel]'
																		AND tb_mengajar.id_mengajar=tb_jadwal.id_mengajar
																		AND tb_jadwal.id_jadwal=tb_absensi.id_jadwal
							                                    		AND tb_absensi.nis='$row4[nis]' 
							                                    		AND tb_absensi.ket='A' 
							                                    		AND tb_absensi.tanggal between '$tanggal1' and '$tanggal2'")); ?>
							                                    </td>
							                                    <td>
							                                    	<button type="button" class="btn btn-default" data-toggle="modal" data-target="#<?php echo $nomor1.$nomor3.$no; ?>">Detail</button>
							                                    	<?php
							                                    		include "modal.php";
							                                    	?>
							                                    </td>   
							                                </tr>
							                                <?php
							                                    $no++;
							                                    }
							                                ?>
							                            </tbody>
							                        </table>
							                        </form>
							                        <input type="button" class="btn btn-default" value="Print" onClick="return window.open('print.php?login=<?php echo $id_login; ?>&kelas=<?php echo $kelasid; ?>&mapel=<?php echo $kodemapel; ?>&tgl1=<?php echo $tanggal1; ?>&tgl2=<?php echo $tanggal2; ?>','page','toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=0,width=750,height=600,left=50,top=50,titlebar=yes');"/>
							                    </div>
							                </div>
							            </div>
						            <?php
						            	$nomor3++;
						                }
						            ?>
						            </div>
						        </div>
						    </div>
				      	</div>
				    </div>
				</div>
					<?php
						$nomor1++;
	                    }
	                ?>
			</div>
			<?php
		    	}
		    ?>    
		    
	    </div>
	</div>
</div>


<?php
	}
?>