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

<div class="row">
    <!-- Sript ambil data -->
    <?php
        $id = @$_GET['id'];
        $qrykoreksi=mysql_query("select * from tb_jadwal where id_jadwal='$id'");
        $data=mysql_fetch_array($qrykoreksi);
    ?>

    <form method="post">
        <div class="col-lg-7">
            <div class="form-group">
                <label>Hari</label>
                <select name="hari" class="form-control" required>
                    <option value"" selected="selected">Pilih Hari</option>
                    <option value="Senin">Senin</option>
                    <option value="Selasa">Selasa</option>
                    <option value="Rabu">Rabu</option>
                    <option value="Kamis">Kamis</option>
                    <option value="Jumat">Jum'at</option>
                    <option value="Sabtu">Sabtu</option>
                </select>
            </div>
            <div class="form-group">
                <label>Kelas</label>
                <select name="kelas" class="form-control" required>
                    <option value="" selected="selected">Pilih Kelas</option>
                    <?php 
                        $query=mysql_query("select * from tb_kelas order by id_kelas asc");
                        while($row=mysql_fetch_array($query))
                        {
                    ?>
                        <option value="<?php  echo $row['id_kelas']; ?>"><?php  echo $row['kelas']; ?></option>
                    <?php 
                        }
                ?>
                </select>
            </div>
            <div class="form-group">
                <label>Guru -- Mapel</label>
                <select name="id_mengajar" class="form-control" required>
                    <option value="" selected="selected">Guru -- Mapel</option>
                    <?php 
                        $query=mysql_query("select tb_guru.nama_guru, tb_mengajar.id_mengajar, tb_mapel.mapel from tb_guru, tb_mengajar, tb_mapel 
                                            where tb_mengajar.kode_guru=tb_guru.kode_guru AND tb_mengajar.kode_mapel=tb_mapel.kode_mapel
                                            order by tb_mengajar.kode_guru asc");
                        while($row=mysql_fetch_array($query))
                        {
                    ?>
                        <option value="<?php  echo $row['id_mengajar']; ?>"><?php  echo $row['nama_guru']; ?> -- <?php  echo $row['mapel']; ?></option>
                    <?php 
                        }
                ?>
                </select>
            </div>
        </div>

        <div class="col-lg-5">
            <div class="form-group">
                <label>Jam Mulai</label>
                <input type="time" class="form-control" name="jam_mulai" value="<?php echo $data['jam_mulai']; ?>" required>
            </div>
            <div class="form-group">
                <label>Jam Selesai</label>
                <input type="time" class="form-control" name="jam_berakhir" value="<?php echo $data['jam_berakhir']; ?>" required>
            </div>
        </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <input type="submit" name="edit" class="btn btn-default" value="Edit"/>
    </div>
    </form>

    <?php
        if(@$_POST['edit']){
            $id_mengajar=$_POST['id_mengajar'];
            $hari=$_POST['hari'];
            $jam_mulai=$_POST['jam_mulai'];
            $jam_berakhir=$_POST['jam_berakhir'];
            $kelas=$_POST['kelas'];

            $query=mysql_query("UPDATE tb_jadwal SET id_mengajar='$id_mengajar', hari='$hari', jam_mulai='$jam_mulai',
                            jam_berakhir='$jam_berakhir', id_kelas='$kelas' WHERE id_jadwal='$id'") or die (mysql_error());

            if($query){
            ?>
                <script type="text/javascript">
                alert("Edit Data Sukses !")
                window.location="?page=lihatroster";
                </script>
            <?php
            }else{
            ?>
                <script type="text/javascript">
                alert("Edit Data Gagal !")
                window.location="?page=lihatroster";
                </script>
            <?php
            } 
        }
    ?>

</div>