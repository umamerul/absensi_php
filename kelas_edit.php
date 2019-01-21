<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Halaman
            <small>Kelas</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="inde.php">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-group"></i> Kelas
            </li>
        </ol>
    </div>
</div>

<!-- Isi -->
<div class="row">
    <div class="col-lg-5">
        <h3 class="page-header">
            Edit Data Kelas
        </h3>

        <!-- Sript ambil data -->
        <?php
            $id = @$_GET['id'];
            $qrykoreksi=mysql_query("select * from tb_kelas where id_kelas='$id'");
            $data=mysql_fetch_object($qrykoreksi);
        ?>

        <form method="post">
            <div class="form-group">
                <label>Kelas</label>
                <input class="form-control" name="kelas" value="<?php echo $data->kelas;?>" required>
            </div>
            <input type="submit" name="edit" class="btn btn-default" value="Edit"/>
        </form>

        <!-- Sript Update Data -->
        <?php
        if(@$_POST['edit']){
            $kelas=strtoupper($_POST['kelas']);
            
            $query=mysql_query("UPDATE tb_kelas SET kelas='$kelas' WHERE id_kelas='$id'") or die (mysql_error());
            
            if($query){
                ?>
                    <script type="text/javascript">
                    alert("Edit Data Sukses !")
                    window.location="?page=kelas";
                    </script>
                <?php
            }else{
                ?>
                    <script type="text/javascript">
                    alert("Edit Data Gagal !")
                    window.location="?page=kelas";
                    </script>
                <?php
            } 
        }
?>
    </div>
</div>