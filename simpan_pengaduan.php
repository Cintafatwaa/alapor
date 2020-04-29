<?php
require 'koneksi.php';
$tgl=$_POST['tgl_pendaduan'];
$nik=$_POST['nik'];
$isi=$_POST['isi_laporan'];
$ft=$_FILES['foto']['name'];
$file=$_FILES['foto']['tmp_name'];
$st=0

$sql=mysql_query("insert into pengaduan(tgl_pendaduan,nik,isi_laporan,foto,status) values('$tgl','$nik','$isi','$ft','$file','$st')");
move_uploaded_file($file, "foto/".$ft);

if($sql)
{
	?>
	<script type="text/javascript">
		alert('Data berhasil disimpan, terimakasih sudah menulis laporan');
		window.location="masyarakat.php";
	</script>
	<?php
}
?>