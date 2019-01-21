<div class="row">
    <div class="col-lg-12" style="margin-top:-10px;">
        <h1 class="page-header">
            Halaman
            <small>Siswa</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="inde.php">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-child"></i> Siswa
            </li>
        </ol>
    </div>
</div>

<!-- ISI -->
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header" style="margin-top:-5px;">
            Edit Data Siswa
        </h3>
    </div>
</div>

<div class="row">
    <!-- Sript ambil data -->
    <?php
        $id = $_GET['id'];
        $qrykoreksi=mysql_query("select * from tb_siswa where id_siswa='$id'");
        $data=mysql_fetch_object($qrykoreksi);
    ?>
    <form method="post">
        <div class="col-lg-6">
            <div class="form-group">
                <label>NIS</label>
                <input class="form-control" name="nis" value="<?php echo $data->nis;?>" required>
            </div>
            <div class="form-group">
                <label>Nama Siswa</label>
                <input class="form-control" name="nama_siswa" value="<?php echo $data->nama_siswa;?>" required>
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control" required>
                    <option value="" selected="selected">Jenis Kelamin</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label>Tempat Lahir</label>
                <input class="form-control" name="tempat_lahir" value="<?php echo $data->tempat_lahir;?>" required>
            </div>
            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" class="form-control" name="tanggal_lahir" required>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label>Alamat</label>
                <input class="form-control" name="alamat" value="<?php echo $data->alamat;?>" required>
            </div>
            <div class="form-group">
                <label>Agama</label>
                <input class="form-control" name="agama" value="<?php echo $data->agama;?>" required>
            </div>
            <div class="form-group">
                <label>Nama Orang Tua/Wali</label>
                <input class="form-control" name="nama_ortu" value="<?php echo $data->nama_ortu;?>" required>
            </div>
            <div class="form-group">
                <label>No Telepon Orang Tua/Wali</label>
                <input class="form-control" name="no_ortu" value="<?php echo $data->no_ortu;?>" required>
            </div>
            <div class="form-group">
                <label>Kelas</label>
                <select name="kelas" class="form-control" required>
                    <option value="">Pilih Kelas</option>
                    <?php 
                        $query=mysql_query("select * from tb_kelas order by kelas asc");
                        while($row=mysql_fetch_array($query))
                        {
                    ?>
                        <option value="<?php  echo $row['id_kelas']; ?>"><?php  echo $row['kelas']; ?></option>
                    <?php 
                        }
                ?>
                </select>
            </div>
        </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <input type="submit" name="edit" class="btn btn-default" value="Edit"/>
    </div>
    </form>

    <!-- Script Input -->
    <?php 
    if(@$_POST['edit']){
        $nis=$_POST['nis'];
        $nama_siswa=strtoupper($_POST['nama_siswa']);
        $jenis_kelamin=strtoupper($_POST['jenis_kelamin']);
        $tempat_lahir=strtoupper($_POST['tempat_lahir']);
        $tanggal_lahir=@$_POST['tanggal_lahir'];
        $alamat=strtoupper($_POST['alamat']);
        $agama=strtoupper($_POST['agama']);
        $nama_ortu=strtoupper($_POST['nama_ortu']);
        $no_ortu=strtoupper($_POST['no_ortu']);
        $kelas=strtoupper($_POST['kelas']);
        
        $query=mysql_query("UPDATE tb_siswa SET nis='$nis', nama_siswa='$nama_siswa', jenis_kelamin='$jenis_kelamin',
                            tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', alamat='$alamat', agama='$agama',
                            nama_ortu='$nama_ortu', no_ortu='$no_ortu', id_kelas='$kelas' WHERE id_siswa='$id'") or die (mysql_error());
        
        if($query){
        ?>
            <script type="text/javascript">
            alert("Edit Data Sukses !")
            window.location="?page=lihatsiswa";
            </script>
        <?php
        }else{
        ?>
            <script type="text/javascript">
            alert("Edit Data Gagal !")
            window.location="?page=lihatsiswa";
            </script>
        <?php
        } 
    }
    ?>
</div>