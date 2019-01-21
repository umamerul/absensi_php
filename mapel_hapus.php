<?php
include "koneksi.php";
$kode = @$_GET['id'];

mysql_query("delete from tb_mapel where id_mapel = '$kode'") or die (mysql_error());
?>
<script type="text/javascript">
alert("Data berhasil dihapus")
window.location="inde.php?page=mapel";
</script>