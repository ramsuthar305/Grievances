<!DOCTYPE html>
<html lang="en">
<?php
require 'dbconnect.php';
$u_id = $_GET['uid'];
$u_idacti=$_GET['uid'];
if($u_id)
{
    status($u_id);
}
if($u_idacti)
{
    statusopen($u_idacti);
}
//if($_POST['submit']=='Save'){
        //var_dump($_POST);
        
  //      $event_name=($_POST['event_name']);
    //    $event_type=($_POST['event_type']);
      //  $event_date=($_POST['event_date']);
        //$event_time=($_POST['event_time']);
       // $event_description=($_POST['event_description']);
       // $event_duration=($_POST['event_duration']);
       // $image_link=($_POST['image_link']);
       
     //   $query_main="insert into events(event_name,event_type,event_date,event_time,event_description,event_duration,image_link)values('$event_name','$event_type','$event_date','$event_time','$event_description','$event_duration','$image_link')";
        //echo $query_main;
        //exit();

 
      //  $insert_main_cat_name=mysqli_query($conn,$query_main)or die(mysqli_error());
       // echo "<script>window.location='events.php';alert('New event Added Successfully!')</script>";
    //}
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Users</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- chartist CSS -->
    <link href="../assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="../assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php
        include 'header.php';
        ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile" style="background: url(../assets/images/background/user-info.jpg) no-repeat;">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="../assets/images/users/profile.png" alt="user" /> </div>
                    <!-- User profile text-->
                    <div class="profile-text"> <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Markarn Doe</a>
                        <div class="dropdown-menu animated flipInY"> <a href="#" class="dropdown-item"><i class="ti-user"></i> My Profile</a> <a href="#" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a> <a href="#" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                            <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                            <div class="dropdown-divider"></div> <a href="login.html" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a> </div>
                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <?php
                    include "sidebar.php";
                ?>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            
            <div class="sidebar-footer">
                <!-- item--><a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
                <!-- item--><a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
                <!-- item--><a href="" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a> </div>
            <!-- End Bottom points-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
              
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <br>
                <div class="col-12">
                        <div class="card">
                            <div class="card-block">
                            
                            
                                        <div class="button-box">
                                        <h2>User Data</h2>
                                                
                                        </div>
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                                    
                                </div>
                            
                                 <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#open" role="tab">Open</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#closed" role="tab">Banned</a> </li>
                                </ul>
                                <br>
                                <div class="tab-content">
                                    <!--open panel code when event is active-->
                                    <div class="tab-pane active" id="open" role="tabpanel">
                                    <div class="card-block">
                                         
                                        <div class="table-responsive">
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th>User Name</th>
                                                                        <th>User Roll No</th>
                                                                        <th>User Email Id</th>
                                                                        <th>User College</th>
                                                                        <th>User Phone</th>
                                                                        <th class="text-nowrap">Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                        function status($userid){

                                                                            $abd="UPDATE users SET user_status = 0 WHERE user_id =$userid";
                                                                            $fetch_users=mysqli_query($conn,$abd)or die(mysqli_error());
                                                                        }
                                                                    ?>
                                                                    <?php
                                                                $fetch_users=mysqli_query($conn,"select user_id,name,phone,roll_no,college,email_Id from users where user_status=1")or die(mysqli_error());

                                                                while($result_product=mysqli_fetch_array($fetch_users)){
                                                                    $user_id=$result_product['user_id'];
                                                                    $user_name=$result_product['name'];
                                                                    $user_phone=$result_product['phone'];
                                                                    $user_roll_no=$result_product['roll_no'];
                                                                    $user_college=$result_product['college'];
                                                                    $user_email_id=$result_product['email_Id'];
                                                                    
                                                                    ?>
                                                                    <tr>
                                                                        <td><a href="userview.php?uid=<?php echo $user_id; ?>"><?php echo $user_name; ?></a></td>
                                                                        <td><?php echo $user_roll_no; ?></td>
                                                                        <td><?php echo $user_email_id; ?></td>
                                                                        <td><?php echo $user_college; ?></td>
                                                                        <td><?php echo $user_phone; ?></td>
                                                                        <td class="text-nowrap">
                                                                            <a href="userview.php?uid=<?php echo $user_id; ?>" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                                            <a href="users.php?uid=<?php echo $user_id; ?>" data-toggle="tooltip" data-original-title="Bann"><i class="fa fa-lock"></i></a> 
                                                                        </td>
                                                                    </tr>
                                                                    <?php } ?> 
                                                                    
                                                                </tbody>
                                                            </table>
                                        </div>
                                    </div>
                                    </div>
                                    <!--end of open panel code when event is active-->
                                    <!--closed panel code when event is not active-->
                                    <div class="tab-pane" id="closed" role="tabpanel">
                                    <div class="card-block">
                                         
                                        <div class="table-responsive">
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th>User Name</th>
                                                                        <th>User Roll No</th>
                                                                        <th>User Email Id</th>
                                                                        <th>User College</th>
                                                                        <th>User Phone</th>
                                                                        <th class="text-nowrap">Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                        function statusopen($userid){

                                                                            $abd="UPDATE users SET user_status = 1 WHERE user_id =$userid";
                                                                            $fetch_users=mysqli_query($conn,$abd)or die(mysqli_error());
                                                                        }
                                                                    ?>
                                                                    <?php
                                                                $fetch_users=mysqli_query($conn,"select user_id,name,phone,roll_no,college,email_Id from users where user_status=0")or die(mysqli_error());
                                                                while($result_product=mysqli_fetch_array($fetch_users)){
                                                                    $user_id=$result_product['user_id'];
                                                                    $user_name=$result_product['name'];
                                                                    $user_phone=$result_product['phone'];
                                                                    $user_roll_no=$result_product['roll_no'];
                                                                    $user_college=$result_product['college'];
                                                                    $user_email_id=$result_product['email_Id'];

                                                                    ?>
                                                                    <tr>
                                                                        <td><a href="userview.php?uid=<?php echo $user_id; ?>"><?php echo $user_name; ?></a></td>
                                                                        <td><?php echo $user_roll_no; ?></td>
                                                                        <td><?php echo $user_email_id; ?></td>
                                                                        <td><?php echo $user_college; ?></td>
                                                                        <td><?php echo $user_phone; ?></td>
                                                                        <td class="text-nowrap">
                                                                            <a href="userview.php?uid=<?php echo $user_id; ?>" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                                            <a href="users.php?uid=<?php echo $user_id; ?>" data-toggle="tooltip" data-original-title="Close"><i class="fa fa-unlock"></i></a> 
                                                                        </td>
                                                                    </tr>
                                                                    <?php } ?> 
                                                                    
                                                                </tbody>
                                                            </table>
                                        </div>
                                    </div>
                                    </div>
                                    <!--end of closed panel code when event is not active-->
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme working">4</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                                <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                                <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?php
            include "footer.php";
            ?>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="../assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="../assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 JavaScript -->
    <script src="../assets/plugins/d3/d3.min.js"></script>
    <script src="../assets/plugins/c3-master/c3.min.js"></script>
    <!-- Chart JS -->
    <script src="js/dashboard1.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>
</html>