


<?php require_once('../template_module/head_section.php'); ?>
 
<?php 
    
      $logged_user_id=logged_user_id();
      if(isset($logged_user_id) && isset($_GET['lead_id'])){
        $lead_id=sql_injection($_GET['lead_id']);
        $open_lead_select="Select * from crm_leads WHERE lead_id='$lead_id'";
        $open_lead_execute=execute_sql_query($open_lead_select);
        $fetch_lead=execute_fetch($open_lead_execute);
      }
?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php require_once('../template_module/top_nav.php'); ?>
       
          <?php //require_once('../template_module/dash.php'); ?>
            <!-- /.row -->
            <?php //require_once('../template_module/show_lead.php'); ?>

            <div id="page-wrapper">
            <div class="row">
           <hr>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Change Password
                        </div>
                        <div class="panel-body">
                           <div class="row">
                           
<div class="col-sm-6 col-sm-offset-3">
<div class="result"></div>
<input type="password" class="form-control"  id="old"  placeholder="Old Password" autocomplete="off">
<hr>
<input type="password" class="form-control"  id="newpass" style="display:none" placeholder="New Password" autocomplete="off">
<hr>
<input type="password" class="form-control"   style="display:none"  id="newconfirm" placeholder="Confirm Password" autocomplete="off">
<hr>
<button id="submit" style="display:none" class="btn btn-success">Confirm</button>
</div><!--/col-sm-6-->
</div><!--/row-->
                                <!-- /.col-lg-6 (nested) -->
                              
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>

             
</div>
                        </div>
                 </div>
 
   <?php require_once('../template_module/footer.php'); ?>
   
 <script src="../template_module/required_javascript/change.js"></script>


      

