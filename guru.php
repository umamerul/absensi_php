<div class="row">
    <div class="col-lg-12" style="margin-top:-10px;">
        <h1 class="page-header">
            Halaman
            <small>Guru</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="inde.php">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-thumbs-up"></i> Guru
            </li>
        </ol>
    </div>
</div>

<!-- ISI -->
<form method="post">

    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header" style="margin-top:-5px;">
                Input Data Guru
            </h3>
        </div>
    </div>

    <div class="row">    
        <div class="col-lg-6">
            <div class="form-group">
                <label>NIP</label>
                <input class="form-control" id="field1" name="nip" placeholder="NIP">
            </div>
            
            <div class="form-group">
                <label>Nama</label>
                <input class="form-control" name="nama_guru" placeholder="Nama Guru" required>
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
                <label>Tempat Lahir</label>
                <input class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" required>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="text" class="form-control" name="tanggal_lahir" id="from" value="dd/mm/yyyy">
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input class="form-control" name="alamat" placeholder="Alamat" required>
            </div>
            <div class="form-group">
                <label>Agama</label>
                <input class="form-control" name="agama" placeholder="Agama" required>
            </div>
            <div class="form-group">
                <label>Kode Guru</label>
                <input class="form-control" name="kode_guru" placeholder="Kode Guru" required>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header" style="margin-top:-5px;">
                Input Account Guru
            </h3>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label>Username (*masukkan NIP)</label>
                <input class="form-control" id="result" name="username" placeholder="Username"  readonly="readonly" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="pass" placeholder="Password" required>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <input type="submit" name="input" class="btn btn-default" value="Input"/>
        </div>
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

        $username=$_POST['username'];
        $pass=$_POST['pass'];
        $status='guru';
        $nip=$_POST['nip'];
        $nama_guru=strtoupper($_POST['nama_guru']);
        $kode_guru=strtoupper($_POST['kode_guru']);
        $jenis_kelamin=strtoupper($_POST['jenis_kelamin']);
        $tempat_lahir=strtoupper($_POST['tempat_lahir']);
        $tgl=@$_POST['tanggal_lahir'];
        $alamat=strtoupper($_POST['alamat']);
        $agama=strtoupper($_POST['agama']);

        $tanggal_lahir = ubahformatTgl($tgl);

        if($username==$nip){
        
        $query1=mysql_query("insert into tb_pengguna(username, pass, status) values('$username','$pass', '$status')") or die (mysql_error());

        $query=mysql_query("insert into tb_guru(nip, nama_guru, kode_guru, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat, agama) 
                            values('$nip','$nama_guru', '$kode_guru', '$jenis_kelamin',  '$tempat_lahir', '$tanggal_lahir', '$alamat', '$agama')") 
                            or die (mysql_error());
        
        if($query){
        ?>
            <script type="text/javascript">
            alert("Input Data Sukses !")
            window.location="?page=inputguru";
            </script>
        <?php
        }else{
        ?>
            <script type="text/javascript">
            alert("Input Data Gagal !")
            window.location="?page=inputguru";
            </script>
        <?php
        } 
        } else {
            ?>
                <script type="text/javascript">
                alert("Username dan NIP harus sama !")
                window.location="?page=inputguru";
                </script>
            <?php
        }
    }
    ?>