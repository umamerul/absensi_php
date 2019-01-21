<div class="row">
    <div class="col-lg-12" style="margin-top:-10px;">
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
            Input Data Kelas
        </h3>
        <form method="post">
            <div class="form-group">
                <label>Kelas</label>
                <input class="form-control" name="kelas" placeholder="Nama Kelas" required>
            </div>
            <input type="submit" name="input" class="btn btn-default" value="Input"/>
        </form>

        <!-- Script Input -->
        <?php 
        if(@$_POST['input']){
            $kelas=strtoupper($_POST['kelas']);
            
            $query=mysql_query("insert into tb_kelas(kelas) values('$kelas')") or die (mysql_error());
            
            if($query){
            ?>
                <script type="text/javascript">
                alert("Input Data Sukses !")
                window.location="?page=kelas";
                </script>
            <?php
            }else{
            ?>
                <script type="text/javascript">
                alert("Input Data Gagal !")
                window.location="?page=kelas";
                </script>
            <?php
            } 
        }
        ?>
    </div>


    
    <div class="col-lg-7">
        <h3 class="page-header">
            Tampil Data
        </h3>
        <div class="table-responsive">
            <?php
                $view=mysql_query("select * from tb_kelas order by kelas asc");
                $no=0;
            ?>
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kelas</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($row=mysql_fetch_array($view)){
                    ?>
                    <tr>
                        <td><?php echo $no=$no+1; ?></td>
                        <td><?php echo $row['kelas']; ?></td>
                        <td><i><a href="?page=kelas_edit&id=<?php echo $row['id_kelas'];?>">Edit</a> / <a onclick="return confirm('Yakin akan hapus data ini ?')" href="kelas_hapus.php?id=<?php echo $row['id_kelas'];?>">Hapus</a></i></td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>