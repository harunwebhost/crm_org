<?php 
	require_once('../functions/db_function.php');
	$selectemp= sql_injection($_POST['selectemp']);
	$selecttype=sql_injection($_POST['selecttype']);
	$sql="SELECT * FROM crm_leads WHERE lead_status='$selecttype' AND emp_id='$selectemp'";
	$result=execute_sql_query($sql);
	$total=sql_fetch_num_rows($result);
	echo "<div class='col-md-4 col-md-offset-4'>
	<lable>Total Leads</lable>
	<input type='number' name='currenttotal' max='$total' min='1' value='$total' class='form-control'/>
	</div>";
?>