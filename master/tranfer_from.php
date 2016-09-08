<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
 -->
<?php require_once('../template_module/head_section.php'); ?>
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

                    <div class="panel panel-primary">

                        <div class="panel-heading">Transfer Lead</div>
                        <div class="panel-body">
					<div class="row">
						
						<div class="container">
						<div class="row">
								<h4 class="info">Transfer Lead</h4>
								
       								
       						<!-- <form action="transfer.php" method="post" id="myform"> -->
       							
       								<div class="col-md-4 col-md-offset-4">		
									<select id="fromemp" name="selectemp" required="" class="form-control">
									<option value="">Select From</option>
									<?php get_emp();?> 
									</select>
									<hr>
									</div>
									<div class="clearfix"></div>
									<div class="col-md-4 col-md-offset-4">	
										<select id="type" style="display:none" name="selected_type" required="" class="form-control">
										<option value="">Select Lead Type</option>
										<?php get_lead_current_status();?>
										</select>
										<hr>
									</div>
									<div class="clearfix"></div>
										<div class="col-md-4 col-md-offset-4">	
										<select  id="toselect" style="display:none" required="" name="toselect" class="form-control">
										<option value="">Select To </option>
											<?php get_emp();?>
										 </select>
										 <hr>
									</div>
									<div class="clearfix"></div>
									 	
										<div id="result"></div>
										</div>
										 <button id="submit" class="btn btn-info">Submit</button> 
								</form>

								
								
							</div>
						</div>
					</div>

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

   




<script>
$('document').ready(function(){
				var selected_emp;
				var selecttype;
			$("#fromemp").change(function(){
				$("#type").show();
				selected_emp=$(this).val();
				selecttype=$('#type').val();
				getlead_type(selected_emp,selecttype);
				$("#toselect").show();
			});	

			$("#type").change(function(){
				selecttype=$('#type').val();
				selected_emp=$("#fromemp").val();
				getlead_type(selected_emp,selecttype);
				$("#toselect").show();
			});		

			function getlead_type(selected_emp,selected_type){
					targeturl="tranfer_lead_fetch.php";
					method="POST";
					var sending="selectemp="+selected_emp+"&selecttype="+selecttype;
					$.ajax({
						url : targeturl,
						type :method,
						data :sending,
						success:function(data){
							$("#result").html(data);
						}
					});
			}


});


</script>









      



