
<?php require_once('../template_module/head_section.php'); ?>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php //require_once('../template_module/top_nav.php'); ?>
       
          <?php //require_once('../template_module/dash.php'); ?>
            <!-- /.row -->
            <?php //require_once('../template_module/show_lead.php'); ?>

            <?php 
                if (isset($_GET['call'])) {
                 $selected_lead_status=$_GET['call'];
                   lead_status($_SESSION['login_userntype'],$selected_lead_status);
                }

                
               
             ?>
             
</div>
                        </div>
                 </div>
 
   <?php require_once('../template_module/footer.php'); ?>
   
   <script type="text/javascript">
  $(document).ready(function(){
    $("#sel1").change(function(){
      $selected=$("#sel1").val();
      if($selected=="1"){
        $("#demolead").show();
        $("#nextcontact").hide();
      }else{
        $("#demolead").hide();
        $("#nextcontact").show();
      }
    });
  });

</script>