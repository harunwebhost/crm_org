<?php 
function show_free_trail($emp_id,$user_type){
              
                if($user_type=="master" && $emp_id="master"){ 

                    if (isset($_GET['total'])) {
                             
                       $sql_lead="SELECT * FROM crm_leads tbl_leads, crm_employer tble_employer, crm_demousers demouser 
                        WHERE
                        tbl_leads.lead_id=demouser.lead_id
                        AND
                        demouser.emp_id=tble_employer.emp_id  
                        ";
                      $label="Total Free Trail";       
                    }

                   
                    if (isset($_GET['today'])) {
                        $today=todays_date();
                           $sql_lead="SELECT * FROM crm_leads tbl_leads, crm_employer tble_employer, crm_demousers demouser 
                        WHERE
                        tbl_leads.lead_id=demouser.lead_id
                        AND
                        demouser.emp_id=tble_employer.emp_id  
                       AND 
                       date(demouser.contacat_date)='$today'
                    ";
                     $label="Today Free Trails";
                    }
            }
            else
            {
                 $emp_id=sql_injection($emp_id);
               if(isset($_GET['total'])){
                    //echo "assigned".$assined=$_GET['assigned'];
              
                   $sql_lead="SELECT * FROM crm_leads tbl_leads, crm_employer tble_employer, crm_demousers demouser 
                        WHERE
                        tbl_leads.lead_id=demouser.lead_id
                        AND
                        tble_employer.emp_id='$emp_id' 
                        AND 
                        demouser.emp_id='$emp_id'
                        ";

                 $label="Total Free Trail";
                }if(isset($_GET['today'])){
                    $today=todays_date();
                   $sql_lead="SELECT * FROM crm_leads tbl_leads, crm_employer tble_employer, crm_demousers demouser 
                        WHERE
                        tbl_leads.lead_id=demouser.lead_id
                        AND
                        tble_employer.emp_id='$emp_id'
                        AND 
                        demouser.emp_id='$emp_id'
                        AND 

                       date(demouser.contacat_date)='$today'
                    ";
                     $label="Today Free Trails";
                } 
            }

?>
     <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo $label;?> </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
     <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> <?php echo $label;?>
                            <?php
                                if($user_type=="master"){
                                    ?>
                                        <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li class="divider"></li>
                                        <li><a href="#" data-toggle="modal" data-target="#lead_modal" data-whatever="@mdo"></i> Add New</a>
                                        </li>
                                       
                                        <li class="divider"></li>
                                      
                                    </ul>
                                </div>
                            </div>
                                <?php 
                            }
                             ?>
                        </div>
                        <!-- /.panel-heading -->
                           <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                         <!--<th></th>-->
                                            <th>Name</th>
                                            <th>Mobile</th>
                                            <th>Requested</th>
                                            <th>Contacted</th>
                                            <th>Start</th>
                                            <th>End</th>
                                            <?php if($user_type=="master"){
                                                echo "<th>EMP</th>";
                                            }?>
                                            <th>Comments</th>
                                         <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody> 
                    <?php 
                         $sql_query=execute_sql_query($sql_lead);
                        while($fetch_lead=execute_fetch($sql_query)){
                    ?>

                                        <tr class="odd gradeX">
                                         <!--<td><input type="checkbox"></td>-->
                                            <td><?php echo $fetch_lead['lead_name'];?></td>
                                           
                                            <td><?php echo $fetch_lead['lead_mobile'];?></td>
                                            <td class="center"><?php echo $fetch_lead['requested_plan'];?></td>
                                            <td class="center"><?php echo $fetch_lead['contacat_date'];?></td>
                                            <td class="center"><?php echo $fetch_lead['demostart'];?></td>
                                             <td class="center"><?php echo $fetch_lead['demoend'];?></td>
                                              <?php if($user_type=="master"){
                                                echo "<td class='center'>".$fetch_lead['emp_name']."</td>";
                                            }?>
                                            <td class="center"><?php echo   $fetch_lead['user_comments']?></td>
                                            
                                            
                                            <td class="center">
                                                <?php
                                                    if($user_type=="master"){
                                                        ?>
                                                    <div class="btn-group">
                                                                <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">
                                                                    Masteroption
                                                                    <span class="caret"></span>
                                                                </button>
                                                                <ul class="dropdown-menu pull-right" role="menu">
                                                                    <li><a href="#">Action</a>
                                                                    </li>
                                                                    <li><a href="#">Another action</a>
                                                                    </li>
                                                                    <li><a href="#">Something else here</a>
                                                                    </li>
                                                                    <li class="divider"></li>
                                                                    <li><a href="#">Separated link</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                    <?php 
                                                        }else{?>

                                                        <div class="btn-group">
                                    <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Employee option
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                    <li><a href="openlead.php?lead_id=<?php echo $fetch_lead['lead_id'];?>"><i class="fa fa-user"></i> Open</a>
                                        </li>
                                        </li>
                                        <li><a href="#">Another action</a>
                                        </li>
                                        <li><a href="#">Something else here</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a>
                                        </li>
                                    </ul>
                                </div>        
                                                   <?php 
                                                    }
                                                 ?>

                                            </td>
                                        </tr>
                                    
<?php } } ?>

  </tbody>
                                </table>
                            </div>
                          
                        </div>
                        <!-- /.panel-body -->
                    </div>
                  
                 
                </div>
               
            </div>


  <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->