<!-- MODAL -->
<div id="<?php echo $nomor1.$nomor3.$no; ?>" class="modal fade" role="dialog">
	<div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      	<div class="modal-header">
	        	<button type="button" class="close" data-dismiss="modal">&times;</button>
	        	<h4 class="modal-title">Keterangan Kehadiran Siswa</h4>
	      	</div>


	      	<div class="modal-body" style="text-align:left;">
	        	<div class="row">
	        		<div class="col-lg-6" style="border-right: 1px solid #ccc;">
	        			<h5 class="page-header" style="margin-top: 10px;">
				            Data Siswa
				        </h5>
				        <div class="form-group">
				            <input class="form-control" value=" <?php echo $row4['nis']; ?>" readonly="readonly">
				        </div>
				        <div class="form-group">
				            <input class="form-control" value=" <?php echo $row4['nama_siswa']; ?>" readonly="readonly">
				        </div>
	        		</div>
	        		<div class="col-lg-6">
	        			<h5 class="page-header" style="margin-top: 10px;">
				            Jadwal Pelajaran
				        </h5>
				        <div class="form-group">
				            <input class="form-control" value=" <?php echo $row['nama_guru']; ?>" readonly="readonly">
				        </div>
				        <div class="form-group">
				            <input class="form-control" value="Kode Mapel <?php echo $row5['kode_mapel']; ?>" readonly="readonly">
				        </div>
	        		</div>
	        	</div>

	        	<div class="row">
		        	<div class="table-responsive">
		        		<div class="col-lg-12"><br>
							<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#s<?php echo $nomor1.$nomor3.$no; ?>" aria-expanded="false" aria-controls="collapseExample">
							 	Daftar Sakit &nbsp<i class="fa fa-caret-square-o-down"></i>
							</button>
							<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#i<?php echo $nomor1.$nomor3.$no; ?>" aria-expanded="false" aria-controls="collapseExample">
							 	Daftar Izin &nbsp<i class="fa fa-caret-square-o-down"></i>
							</button>
							<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#a<?php echo $nomor1.$nomor3.$no; ?>" aria-expanded="false" aria-controls="collapseExample">
							 	Daftar Alfa &nbsp<i class="fa fa-caret-square-o-down"></i>
							</button>

							<div class="collapse" id="s<?php echo $nomor1.$nomor3.$no; ?>" style="margin-top:10px;">
								<div class="well">
									<?php
										$view6=mysql_query("SELECT 
                												tb_pengguna.username, 
							            						tb_mengajar.id_mengajar, 
							            						tb_mengajar.kode_mapel, 
							            						tb_guru.kode_guru,
							            						tb_jadwal.id_jadwal,
							            						tb_jadwal.hari,
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
                												AND tb_absensi.tanggal between '$tanggal1' and '$tanggal2'");
									?>
							    	<label>Sakit : <?php echo mysql_num_rows($view6); ?></label>
							    	<table class="table table-hover table-bordered table-striped">
							    		<thead>
						                    <tr>
						                        <th class="col-md-3">Hari</th>
						                        <th>Tanggal</th>
						                    </tr>
						                </thead>
						                <tbody>
						                	<?php
						                		while($row6=mysql_fetch_array($view6)){
						                	?>
						                	<tr>
						                		<td><?php echo $row6['hari']; ?></td>
						                		<td><?php echo date('d-m-Y', strtotime($row6['tanggal'])); ?></td>
						                	</tr>
						                	<?php
						                		}
						                	?>
						                </tbody>
							    	</table>
								</div>
							</div>

							<div class="collapse" id="i<?php echo $nomor1.$nomor3.$no; ?>" style="margin-top:10px;">
								<div class="well">
									<?php $view7=mysql_query("SELECT 
	            												tb_pengguna.username, 
							            						tb_mengajar.id_mengajar, 
							            						tb_mengajar.kode_mapel, 
							            						tb_guru.kode_guru,
							            						tb_jadwal.id_jadwal,
							            						tb_jadwal.hari,
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
	            												AND tb_absensi.tanggal between '$tanggal1' and '$tanggal2'");
									?>
							    	<label>Izin : <?php echo mysql_num_rows($view7); ?> </label>
							    	<table class="table table-hover table-bordered table-striped">
							    		<thead>
						                    <tr>
						                        <th class="col-md-3">Hari</th>
						                        <th>Tanggal</th>
						                    </tr>
						                </thead>
						                <tbody>
						                	<?php
						                		while($row7=mysql_fetch_array($view7)){
						                	?>
						                	<tr>
						                		<td><?php echo $row7['hari']; ?></td>
						                		<td><?php echo date('d-m-Y', strtotime($row7['tanggal'])); ?></td>
						                	</tr>
						                	<?php
						                		}
						                	?>
						                </tbody>
							    	</table>
								</div>
							</div>

							<div class="collapse" id="a<?php echo $nomor1.$nomor3.$no; ?>" style="margin-top:10px;">
								<div class="well">
								<?php
									$view8=mysql_query("SELECT 
            												tb_pengguna.username, 
						            						tb_mengajar.id_mengajar, 
						            						tb_mengajar.kode_mapel, 
						            						tb_guru.kode_guru,
						            						tb_jadwal.id_jadwal,
						            						tb_jadwal.hari,
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
            												AND tb_absensi.tanggal between '$tanggal1' and '$tanggal2'");
								?>
							    	<label>Alfa : <?php echo mysql_num_rows($view8); ?></label>
							    	<table class="table table-hover table-bordered table-striped">
							    		<thead>
						                    <tr>
						                        <th class="col-md-3">Hari</th>
						                        <th>Tanggal</th>
						                    </tr>
						                </thead>
						                <tbody>
						                	<?php
						                		while($row8=mysql_fetch_array($view8)){
						                	?>
						                	<tr>
						                		<td><?php echo $row8['hari']; ?></td>
						                		<td><?php echo date('d-m-Y', strtotime($row8['tanggal'])); ?></td>
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
	      	</div>

	    </div>
  	</div>
</div>