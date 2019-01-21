<?php
include "koneksi.php";
$kode = @$_GET['id'];

mysql_query("delete from tb_siswa where id_siswa = '$kode'") or die (mysql_error());
?>
<script type="text/javascript">
alert("Data berhasil dihapus")
window.location="inde.php?page=lihatsiswa";
</script>