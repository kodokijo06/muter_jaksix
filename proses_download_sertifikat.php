<?php
$folder = "sertifikat/";
header("Content-Type: octet/stream");
header("Content-Disposition: attachment; filename=\"".$_GET['file']."\"");
$fp = fopen($folder.$_GET['file'], "r");
$data = fread($fp, filesize($folder.$_GET['file']));
fclose($fp);
print $data;
?>