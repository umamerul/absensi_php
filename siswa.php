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
            Input Data Siswa
        </h3>
    </div>
</div>

<div class="row">
    <form method="post">
        <div class="col-lg-6">
            <div class="form-group">
                <label>NIS</label>
                <input class="form-control" name="nis" placeholder="NIS" required>
            </div>
            <div class="form-group">
                <label>Nama Siswa</label>
                <input class="form-control" name="nama_siswa" placeholder="Nama Siswa"  required>
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control" required>
                    <option value="">Jenis Kelamin</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label>Agama</label>
                <input class="form-control" name="agama" placeholder="Agama"  required>
            </div>
            <div class="form-group">
                <label>Tempat Lahir</label>
                <input class="form-control" name="tempat_lahir" placeholder="Tempat Lahir"  required>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="text" class="form-control" name="tanggal_lahir" id="from" value="dd/mm/yyyy">
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input class="form-control" name="alamat" placeholder="Alamat"  required>
            </div>
            <div class="form-group">
                <label>Nama Orang Tua/Wali</label>
                <input class="form-control" name="nama_ortu" placeholder="Nama Orang Tua/Wali"  required>
            </div>
            <div class="form-group">
                <label>No Telepon Orang Tua/Wali</label>
                <input class="form-control" name="no_ortu" placeholder="No Telepon Orang Tua/Wali"  required>
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
        <input type="submit" name="input" class="btn btn-default" value="Input"/>
    </div>
    </form>

    <!-- Script Input -->
    <?php 
    if(@$_POST['input']){
        function ubahformatTgl($tanggal) {
            $pisah = explode('/',$tanggal);
            $urutan = array($pisah[2],$pisah[0],$pisah[1]);
            $satukan = implode('-',$urutan);
            return $satukan;
        }

        $nis=$_POST['nis'];
        $nama_siswa=strtoupper($_POST['nama_siswa']);
        $jenis_kelamin=strtoupper($_POST['jenis_kelamin']);
        $tempat_lahir=strtoupper($_POST['tempat_lahir']);
        $tgl=@$_POST['tanggal_lahir'];
        $alamat=strtoupper($_POST['alamat']);
        $agama=strtoupper($_POST['agama']);
        $nama_ortu=strtoupper($_POST['nama_ortu']);
        $no_ortu=strtoupper($_POST['no_ortu']);
        $kelas=strtoupper($_POST['kelas']);

        $tanggal_lahir = ubahformatTgl($tgl);
        
        $query=mysql_query("insert into tb_siswa(nis, nama_siswa, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat, agama, nama_ortu, no_ortu, id_kelas) values('$nis','$nama_siswa', '$jenis_kelamin',  '$tempat_lahir', '$tanggal_lahir', '$alamat', '$agama', '$nama_ortu', '$no_ortu', '$kelas')") or die (mysql_error());
        
        if($query){
        ?>
            <script type="text/javascript">
            alert("Input Data Sukses !")
            window.location="?page=inputsiswa";
            </script>
        <?php
        }else{
        ?>
            <script type="text/javascript">
            alert("Input Data Gagal !")
            window.location="?page=inputsiswa";
            </script>
        <?php
        } 
    }
    ?>
</div>