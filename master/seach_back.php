<?php
include('../functions/db_function.php');

if($_POST)
{
$number=sql_injection($_POST['search']);
$sql_search="SELECT * FROM crm_leads leads, 
crm_employer emps 
where leads.lead_mobile='$number'
AND 
leads.emp_id=emps.emp_id
";

?>

       
            <!-- /.row -->

           
                  			<div class="table table-responsive">		
                                <table style="width:85%" class="table table-striped table-bordered table-hover">
                                    <thead>
                                       <tr>
                                        
                                            <th>Name</th>
                                            <th>Mobile</th>
                                        	<th>Employee</th> 
                                        	      
                                        </tr>
                                    </thead>
                                    <tbody> 
                    <?php 
                         $sql_query=execute_sql_query($sql_search);
                        if(sql_fetch_num_rows($sql_query)>0){	
                        while($fetch_lead=execute_fetch($sql_query)){
                    ?>

                        <tr class="odd gradeX">
                         <!--<td><input type="checkbox"></td>-->
                            <td><?php echo $fetch_lead['lead_name'];?></td>
                            <td><?php echo $fetch_lead['lead_mobile'];?></td>
                             <td><?php echo $fetch_lead['emp_name'];?></td>
                              
                          </tr>
                        <?php } }}else{
                        	echo "Search Failed";
                        } ?>

  							</tbody>
                                </table>
                      </div>   


        <!-- /#page-wrapper -->


    <!-- /#wrapper -->

