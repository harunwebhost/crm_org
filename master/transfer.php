<?php 
require_once('db_function.php');
$from=$_POST['selectemp'];
$lead_status=$_POST['selected_type'];
$towhom=$_POST['toselect'];
$howmuch=$_POST['currenttotal'];
$sql_update="UPDATE crm_leads set emp_id='$towhom' WHERE emp_id='$from' AND lead_status='$lead_status' LIMIT $howmuch";
execute_sql_query($sql_update);
?>