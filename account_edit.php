<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Halaman
            <small>Account</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="inde.php">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-sun-o"></i> Account
            </li>
        </ol>
    </div>
</div>

<!-- Isi -->
<div class="row">
    <div class="col-lg-5">
        <h3 class="page-header">
            Edit Account
        </h3>

        <!-- Sript ambil data -->
        <?php
            $id = @$_GET['id'];
            $qrykoreksi=mysql_query("select * from tb_pengguna where id_pengguna='$id'");
            $data=mysql_fetch_array($qrykoreksi);

            if($data['status']=='guru'){
        ?>
        <form method="post">
            <div class="form-group">
                <label>Username</label>
                <input class="form-control" name="username" value="<?php echo $data['username']; ?>" readonly="readonly">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input class="form-control" name="pass" value="<?php echo $data['pass']; ?>" required>
            </div>
            <input type="submit" name="edit" class="btn btn-default" value="Input"/>
        </form>
        <?php
            } else {
        ?>

        <form method="post">
            <div class="form-group">
                <label>Username</label>
                <input class="form-control" name="username" value="<?php echo $data['username']; ?>">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input class="form-control" name="pass" value="<?php echo $data['pass']; ?>" required>
            </div>
            <input type="submit" name="edit" class="btn btn-default" value="Input"/>
        </form>

        <!-- Sript Update Data -->
        <?php
        }
        if(@$_POST['edit']){
            $username=$_POST['username'];
            $pass=$_POST['pass'];
            
            $query=mysql_query("UPDATE tb_pengguna SET username='$username', pass='$pass'  WHERE id_pengguna='$id'") or die (mysql_error());
            
            if($query){
                ?>
                    <script type="text/javascript">
                    alert("Edit Data Sukses !")
                    window.location="?page=account";
                    </script>
                <?php
            }else{
                ?>
                    <script type="text/javascript">
                    alert("Edit Data Gagal !")
                    window.location="?page=account";
                    </script>
                <?php
            } 
        }
?>
    </div>
</div>