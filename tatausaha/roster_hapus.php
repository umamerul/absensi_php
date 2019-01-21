<?php
include "koneksi.php";
$kode = $_GET['id'];

mysql_query("delete from tb_jadwal where id_jadwal = '$kode'") or die (mysql_error());
?>
<script type="text/javascript">
alert("Data berhasil dihapus")
window.location="index.php?page=lihatroster";
</script>