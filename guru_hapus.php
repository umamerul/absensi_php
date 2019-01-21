<?php
include "koneksi.php";
$kode = @$_GET['id'];
$a=mysql_query("select nip from tb_guru where id_guru = '$kode'") or die (mysql_error());
$b=mysql_fetch_array($a);

mysql_query("delete from tb_pengguna where username=$b[nip]") or die (mysql_error());

mysql_query("delete from tb_guru where id_guru = '$kode'") or die (mysql_error());
?>
<script type="text/javascript">
alert("Data berhasil dihapus")
window.location="inde.php?page=lihatguru";
</script>