<?php 

header('content-type:application/json');
$connection = mysqli_connect('localhost', 'crmglitzresearch', 'crmglitzresearch21');

// Check connection
if (!$connection) {
    die("Connection failed: " . mysql_error());
}else{
  mysqli_select_db($connection,'stockglizsearch_db');

}


 $sql="Select * from  crm_demousers ";
$execute_sql=mysqli_query($connection,$sql);
$data=array();
foreach ($execute_sql as  $row) {
	$data[]=$row;
}
echo json_encode($data);
?>