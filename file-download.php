<?php
$f_id = trim($_GET['id']);

// file path
$mPath = "./to-be-downloaded.csv";

$mName = "my-file-$f_id.csv";
// $mName = mb_convert_encoding($mName, "UTF8", "EUC");

header("Content-Type:application/octet-stream");

// dialog
header("Content-Disposition:attachment; filename=$mName");

// output
readfile($mPath);
?>
