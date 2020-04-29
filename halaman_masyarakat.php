<?php
if(isset($_GET['url']))
{
	$url=$_GET['url'];
	switch($url)
	{
		case 'tulis_pengaduan';
		include 'tulis_pengaduan.php';
		break;

		case 'lihat_pengaduan';
		include 'lihat_pengaduan';
		break;
	}
}
?>