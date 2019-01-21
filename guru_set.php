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
                <i class="fa fa-group"></i> Guru
            </li>
        </ol>
    </div>
</div>

<!-- Isi -->
<div class="row">
    <div class="col-lg-5">
        <h3 class="page-header">
            Set Mata Pelajaran
        </h3>
        <form method="post">
            <div class="form-group">
                <label>Nama Guru</label>
                <select name="kode_guru" class="form-control" required>
                    <option value="">Pilih Guru</option>
                    <?php 
                        $query=mysql_query("select * from tb_guru order by nip asc");
                        while($row=mysql_fetch_array($query))
                        {
                    ?>
                        <option value="<?php  echo $row['kode_guru']; ?>"><?php  echo $row['nama_guru']; ?></option>
                    <?php 
                        }
                ?>
                </select>
            </div>
            <div class="form-group">
                <label>Mata Pelajaran</label>
                <select name="kode_mapel" class="form-control" required>
                    <option value="">Pilih Mapel</option>
                    <?php 
                        $query=mysql_query("select * from tb_mapel order by kode_mapel asc");
                        while($row=mysql_fetch_array($query))
                        {
                    ?>
                        <option value="<?php  echo $row['kode_mapel']; ?>"><?php  echo $row['mapel']; ?></option>
                    <?php 
                        }
                ?>
                </select>
            </div>
            <input type="submit" name="input" class="btn btn-default" value="Input"/>
        </form>

        <!-- Script Input -->
        <?php 
        if(@$_POST['input']){
            $kode_guru=strtoupper($_POST['kode_guru']);
            $kode_mapel=strtoupper($_POST['kode_mapel']);
            
            $query=mysql_query("insert into tb_mengajar(kode_guru, kode_mapel) values('$kode_guru','$kode_mapel')") or die (mysql_error());
            
            if($query){
            ?>
                <script type="text/javascript">
                alert("Input Data Sukses !")
                window.location="?page=setmapel";
                </script>
            <?php
            }else{
            ?>
                <script type="text/javascript">
                alert("Input Data Gagal !")
                window.location="?page=setmapel";
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
                $view=mysql_query("SELECT tb_guru.nama_guru, tb_mengajar.id_mengajar, tb_mapel.mapel from tb_guru, tb_mengajar, tb_mapel 
                                    where tb_mengajar.kode_guru=tb_guru.kode_guru AND tb_mengajar.kode_mapel=tb_mapel.kode_mapel
                                    order by tb_mengajar.kode_guru asc");
                $no=0;
            ?>
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Guru</th>
                        <th>Mata Pelajaran</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($row=mysql_fetch_array($view)){
                    ?>
                    <tr>
                        <td><?php echo $no=$no+1; ?></td>
                        <td><?php echo $row['nama_guru']; ?></td>
                        <td><?php echo $row['mapel']; ?></td>
                        <td><i><a onclick="return confirm('Yakin akan hapus data ini ?')" href="setmapel_hapus.php?id=<?php echo $row['id_mengajar'];?>">Hapus</a></i></td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>