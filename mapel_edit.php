<!-- Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Halaman
            <small>Mata Pelajaran</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="inde.php">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-book"></i> Mata Pelajaran
            </li>
        </ol>
    </div>
</div>

<!-- Isi -->
<div class="row">
    <div class="col-lg-5">
        <h3 class="page-header">
            Edit Data Mapel
        </h3>

        <!-- Script Ambil Data -->
        <?php
            $kode = @$_GET['id'];
            $qrykoreksi=mysql_query("select * from tb_mapel where id_mapel='$kode'") or die (mysql_error());
            $data=mysql_fetch_object($qrykoreksi);
        ?>

        <form method="post">
            <div class="form-group">
                <label>Kode Mata Pelajaran</label>
                <input class="form-control" name="kode_mapel" value="<?php echo $data->kode_mapel;?>">
            </div>
            <div class="form-group">
                <label>Mata Pelajaran</label>
                <input class="form-control" name="mapel" value="<?php echo $data->mapel;?>">
            </div>
            <input type="submit" name="edit" class="btn btn-default" value="Edit"/>
        </form>

        <!-- Script Update Data -->
        <?php
            if(@$_POST['edit']){
                $kode_mapel=strtoupper($_POST['kode_mapel']);
                $mapel=strtoupper($_POST['mapel']);
                
                
                $query=mysql_query("update tb_mapel set kode_mapel='$kode_mapel', mapel='$mapel' where id_mapel='$kode'") or die (mysql_error());
                
                if($query){
                    ?>
                        <script type="text/javascript">
                        alert("Edit Data Sukses !")
                        window.location="?page=mapel";
                        </script>
                    <?php
                }else{
                    ?>
                        <script type="text/javascript">
                        alert("Edit Data Gagal !")
                        window.location="?page=mapel";
                        </script>
                    <?php
                } 
            }
        ?>
    </div>
</div>