<?php
print("OK\n");
$dir = $_POST["dir"];
$filename = $_POST["file"];
if (strlen($dir) != 0)
{
	$file=scandir($dir);
	print_r($file);
}
elseif (strlen($dir) == 0) {
	print("Please Inpui ScanDir");
}
if (strlen($filename) != 0)
{
	$contents = file_get_contents($filename);
	print($contents);
}
elseif (strlen($filename) == 0) {
	print("Please Inpui filename");
}
?>