<?php
if($_GET['q']) {
$filename = basename($_GET['q']);
$file_extension = strtolower(substr(strrchr($filename,"."),1));
switch( $file_extension ) {
    case "gif": $ctype="image/gif"; break;
    case "png": $ctype="image/png"; break;
    case "jpeg":
    case "jpg": $ctype="image/jpeg"; break;
    default:
}
header('Content-type: ' . $ctype);
    readfile($_GET['q']);
}
?>