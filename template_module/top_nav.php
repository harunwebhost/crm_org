<nav class="navbar navbar-dark bg-primary" role="navigation" style="margin-bottom: 0">

            <div class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

                    <span class="sr-only">Toggle navigation</span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                </button>

                <a class="navbar-brand" href="dashboard.php">Customer Relationship Management</a>

            </div>

            <!-- /.navbar-header -->



            <ul class="nav navbar-top-links navbar-right font-white">

           <li><a href="">Welcome : <?php echo $_SESSION['login_email'] ?></a>  </li>
           <li><a href="">Time : <?php echo current_data_time(); ?></a>  </li>
                <li class="dropdown">

                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">

                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>

                    </a>

                    <ul class="dropdown-menu dropdown-user">

                        

                        <li class="divider"></li>

                        <li><a href="../functions/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>

                        </li>

                    </ul>

                    <!-- /.dropdown-user -->

                </li>

                <!-- /.dropdown -->

            </ul>

            <!-- /.navbar-top-links -->

<?php 

    if($_SESSION['login_userntype']=="master"){

    ?>

            <div class="navbar-default sidebar" role="navigation">

                <div class="sidebar-nav navbar-collapse">

                    <ul class="nav" id="side-menu">

                        <li class="sidebar-search">

                        </li>

                        

                          <li>

                            <a href="assign_form.php"><i class="fa fa-dashboard fa-fw"></i>Assign Lead</a>

                        </li>

                        <li>

                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Lead Information<span class="fa arrow"></span></a>

                            <ul class="nav nav-second-level">

                            <li></li>

                                <li> <a href="upload_lead.php">Upload</a> </li>
                                <li><a href="index.php?total=1">Total</a></li>
                                <li><a href="index.php?assigned=1">Assined</a></li>
                                <li><a href="index.php?un-assigned=1">Un-Assinded</a> </li>
                               
                            </ul>

                            <!-- /.nav-second-level -->

                        </li>

                        <li>

                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Frees Trail<span class="fa arrow"></span></a>

                            <ul class="nav nav-second-level">
                            <li>
                             </li>
                                <li> <a href="free_trail.php?total=1">Total</a> </li>
                                <li><a href="free_trail.php?today=1">Today</a></li>
                            </ul>

                            <!-- /.nav-second-level -->

                        </li>

                        <li><a href="search_lead.php"><i class="fa fa-search" aria-hidden="true"></i> Search Lead</li>
                        <li><a href="tranfer_from.php"><i class="icon-move"></i>Lead Transfer</li>
                            
                            <li>
                            <a href="#"><i class="fa fa-pause" aria-hidden="true"></i> Pendings <span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                            <li>
                             </li>
                <li><a href="status.php?call=Call_After_Some_Time">Call After Some Time <span class="badge"><?php echo get_my_total('Call After Some Time')?></span></a></li>
                <li><a href="status.php?call=Free_trail">Free trail <span class="badge"><?php echo get_my_total('Free trail')?></span></a></li>
                <li><a href="status.php?call=Switched_Off">Switched Off <span class="badge"><?php echo get_my_total('Switched Off')?></span></a></li>
                <li><a href="status.php?call=Did_Not_Pick_My_Phone"> Did Not Pick My Phone <span class="badge"><?php echo get_my_total('Did Not Pick My Phone')?></span></a></li>
                <li><a href="status.php?call=Call_On_Discount_Offer"> Call On Discount Offer <span class="badge"><?php echo get_my_total('Call On Discount Offer')?></span></a></li>
                <li><a href="status.php?call=Subscribed"> Subscribed <span class="badge"><?php echo get_my_total('Subscribed')?></span></a></li>
                <li><a href="status.php?call=Get_Back_to_us"> Get Back to us <span class="badge"><?php echo get_my_total('Get Back to us')?></span></a></li>
                <li><a href="status.php?call=Language_Issues"> Language Issues <span class="badge"><?php echo get_my_total('Language Issues')?></span></a></li>
                <li><a href="status.php?call=Not_Intersted"> Not Intersted <span class="badge"><?php echo get_my_total('Not Intersted')?></span></a></li>
                <li><a href="status.php?call=Intersted"> Intersted <span class="badge"><?php echo get_my_total('Intersted')?></span></a></li>
                <li><a href="status.php?call=Not_Satisfied">Not Satisfied <span class="badge"><?php echo get_my_total('Not Satisfied')?></span></a></li>
                <li><a href="status.php?call=Satisfied">Satisfied <span class="badge"><?php echo get_my_total('Satisfied')?></span></a></li>
                <li><a href="status.php?call=Make_Payment"> Make Payment <span class="badge"><?php echo get_my_total('Make Payment')?></span></a></li>
                <li><a href="status.php?call=Call_Back">Call Back <span class="badge"><?php echo get_my_total('Call Back')?></span></a></li>
                <li><a href="status.php?call=Does_Not_Trade">Does Not Trade <span class="badge"><?php echo get_my_total('Does Not Trade')?></span></a></li>

                            </ul>
                            <!-- /.nav-second-level -->
                </li>



                           <li>

                            <a href="#"><i class="fa fa-download"> </i> Downloads<span class="fa arrow"></span></a>

                            <ul class="nav nav-second-level">
                            <li>
                             </li>
                                <li> <a href="downloads.php">Reports</a> </li>
                                
                            </ul>

                            <!-- /.nav-second-level -->

                        </li>

                        <li>

                            <a href="#"><i class="fa fa-user"></i> Employees<span class="fa arrow"></span></a>

                            <ul class="nav nav-second-level">

                                

                                <li>

                                    <a href="show_employees.php">All</a>

                                </li>

                                

                            </ul>

                            <!-- /.nav-second-level -->

                        </li>

                        
                          <li><a href="../master/change_password.php"><i class="fa fa-exchange" aria-hidden="true"></i>Change Password</a></li>    

                        <li><a href="../functions/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></li> 

                    </ul>

                </div>

                <!-- /.sidebar-collapse -->

            </div>

    <?php } else{?>

 <div class="navbar-default sidebar" role="navigation">

                <div class="sidebar-nav navbar-collapse">

                    <ul class="nav" id="side-menu">

                        <li class="sidebar-search">

                          

                        </li>

                      

                        <li>

                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Lead Information<span class="fa arrow"></span></a>

                            <ul class="nav nav-second-level">

                            <li>

                                        </li>

                             

                                <li>

                                    <a href="index.php?total=1">Total</a>

                                </li>

                                <li>

                                    <a href="index.php?assigned=1">Assined</a>

                                </li>

                              

                            </ul>

                            <!-- /.nav-second-level -->

                        </li>
                <li>
                            <a href="#"><i class="fa fa-check" aria-hidden="true"></i> Frees Trail<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                            <li>
                             </li>
                                <li> <a href="free_trail.php?total=1">Total</a> </li>
                                <li><a href="free_trail.php?today=1">Today</a></li>
                            </ul>
                            <!-- /.nav-second-level -->
                </li>
                     
                      <li>
                            <a href="#"><i class="fa fa-pause" aria-hidden="true"></i> Pendings <span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                            <li>
                             </li>
                <li><a href="status.php?call=Call_After_Some_Time">Call After Some Time <span class="badge"><?php echo get_my_total('Call After Some Time')?></span></a></li>
                <li><a href="status.php?call=Free_trail">Free trail <span class="badge"><?php echo get_my_total('Free trail')?></span></a></li>
                <li><a href="status.php?call=Switched_Off"><i class="fa fa-battery-empty" aria-hidden="true"></i> Switched Off <span class="badge"><?php echo get_my_total('Switched Off')?></span></a></li>
                <li><a href="status.php?call=Did_Not_Pick_My_Phone"> Did Not Pick My Phone <span class="badge"><?php echo get_my_total('Did Not Pick My Phone')?></span></a></li>
                <li><a href="status.php?call=Call_On_Discount_Offer"> Call On Discount Offer <span class="badge"><?php echo get_my_total('Call On Discount Offer')?></span></a></li>
                <li><a href="status.php?call=Subscribed"> Subscribed <span class="badge"><?php echo get_my_total('Subscribed')?></span></a></li>
                <li><a href="status.php?call=Get_Back_to_us"> Get Back to us <span class="badge"><?php echo get_my_total('Get Back to us')?></span></a></li>
                <li><a href="status.php?call=Language_Issues"> Language Issues <span class="badge"><?php echo get_my_total('Language Issues')?></span></a></li>
                <li><a href="status.php?call=Not_Intersted"> Not Intersted <span class="badge"><?php echo get_my_total('Not Intersted')?></span></a></li>
                <li><a href="status.php?call=Intersted"> Intersted <span class="badge"><?php echo get_my_total('Intersted')?></span></a></li>
                <li><a href="status.php?call=Not_Satisfied">Not Satisfied <span class="badge"><?php echo get_my_total('Not Satisfied')?></span></a></li>
                <li><a href="status.php?call=Satisfied">Satisfied <span class="badge"><?php echo get_my_total('Satisfied')?></span></a></li>
                <li><a href="status.php?call=Make_Payment"> Make Payment <span class="badge"><?php echo get_my_total('Make Payment')?></span></a></li>
                <li><a href="status.php?call=Call_Back">Call Back <span class="badge"><?php echo get_my_total('Call Back')?></span></a></li>
                <li><a href="status.php?call=Does_Not_Trade">Does Not Trade <span class="badge"><?php echo get_my_total('Does Not Trade')?></span></a></li>

                            </ul>
                            <!-- /.nav-second-level -->
                </li>
                     

                        
                    <li><a href="../employees/change_password.php"><i class="fa fa-exchange" aria-hidden="true"></i>Change Password</a></li> 
                        <li><a href="../functions/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></li> 

                    </ul>

                </div>

                <!-- /.sidebar-collapse -->

            </div>

    <?php } ?>

            <!-- /.navbar-static-side -->

</nav>



