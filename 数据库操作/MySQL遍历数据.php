<?php
	$server_Host = $_POST["ip"];
	$username = $_POST["user"];
	$password = $_POST["pass"];
	$sql = $_POST["query"];			//要接收的SQL指令

$conn = mysql_connect($server_Host,$username,$password);

if (!$conn)
  {
 		 die('Could not connect: ' . mysql_error());
  }



$result = mysql_query($sql);

$result_num = mysql_num_rows($result);
echo $result_num. "<br />";			//影响的行数	
$result_list = '';
while ($out = mysql_fetch_array($result)) {
	$columns_num = count($out) / 2;		//判断共有几列
	for ($i=0; $i < $columns_num ; $i++) { 
		$result_list = $result_list . $out[$i] . ',';
		
	}
	
	$result_list = $result_list . "<br />";
}

echo $result_list;
mysql_close($conn);

?>