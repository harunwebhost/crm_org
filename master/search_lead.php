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

                        <div class="panel-heading">

                           Search Lead
 
                        </div>

                        <div class="panel-body">
					<div class="row">
						
						<div class="container">
						<div class="row">
								<h4 class="info">Enter mobile Number</h4>
								<div class="col-md-4 col-md-offset-2">
       								<input type="text" class="form-control input-sm search"    id="searchid" maxlength="64" placeholder="Search" />
								</div>
								
								<div id="result"></div>
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

   


<script type="text/javascript">
$(function(){
$(".search").keyup(function() 
{ 
var searchid = $(this).val();
var dataString = 'search='+ searchid;
if(searchid!='')
{
    $.ajax({
    type: "POST",
    url: "seach_back.php",
    data: dataString,
    cache: false,
    success: function(html)
    {
    $("#result").html(html).show();
    }
    });
}return false;    
});

jQuery("#result").on("click",function(e){ 
    var $clicked = $(e.target);
    var $name = $clicked.find('.name').html();
    var decoded = $("<div/>").html($name).text();
    $('#searchid').val(decoded);
});
jQuery(document).on("click", function(e) { 
    var $clicked = $(e.target);
    if (! $clicked.hasClass("search")){
    jQuery("#result").fadeOut(); 
    }
});
$('#searchid').click(function(){
    jQuery("#result").fadeIn();
});
});
</script>















      



