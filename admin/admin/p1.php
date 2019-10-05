<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Material Pro Admin Template - The Most Complete & Trusted Bootstrap 4 Admin Template</title>
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
                <div class="col-md-12">
                  
                            <div class="card-block p-b-0">
                                </div>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs customtab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home2" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Overview</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#members" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Members</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tasks" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Tasks</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#notes" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Notes</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#files" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Files</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#gantt" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Gantt</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#issues" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Client Issues</span></a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home2" role="tabpanel">
                                    <br>
                                                    <div class="row">
                   
                                                            <div class="col-md-6">
                                                                <div class="card">
                                                                    <div class="card-block">
                                                                        <h3 class="card-title">Special title treatment</h3>
                                                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                                        <a href="#" class="btn btn-success">Go somewhere</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="card">
                                                                    <div class="card-block">
                                                                        <h3 class="card-title">Special title treatment</h3>
                                                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </div>

                                                    <div class="card-group">
                    <!-- Column -->
                    <div class="card">
                        <div class="card-block text-center">
                            <h4 class="text-center">Unique Visit</h4>
                            <div id="spark8"></div>
                        </div>
                        <div class="box b-t text-center">
                            <h4 class="font-medium m-b-0"><i class="ti-angle-up text-success"></i>  12456</h4></div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-block text-center">
                            <h4 class="text-center">Total Visit</h4>
                            <div id="spark9"></div>
                        </div>
                        <div class="box b-t text-center">
                            <h4 class="font-medium m-b-0"><i class="ti-angle-down text-danger"></i> 456</h4></div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-block text-center">
                            <h4 class="text-center">Bounce rate</h4>
                            <div id="spark10"></div>
                        </div>
                        <div class="box b-t text-center">
                            <h4 class="font-medium m-b-0"><i class="ti-angle-up text-success"></i>  12456</h4></div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-block text-center">
                            <h4 class="text-center">Page Views</h4>
                            <div id="spark11"></div>
                        </div>
                        <div class="box b-t text-center">
                            <h4 class="font-medium m-b-0"><i class="ti-angle-down text-danger"></i> 456</h4></div>
                    </div>
                    <!-- Column -->
                </div>

                 <div class="row">
                    
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-block">
                                <h3 class="card-title"><b>Client Details</b></h3>
                                <strong>Company Name</strong><br><p>Company Name</p>
                                <b>Client Name</b><br><p>Client Name</p>
                                <b>Client Email</b><br><p>email@example.com</p>
                                <b>Client Phone No</b><br><p>+919999999999</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-block">
                                <h3 class="card-title"><strong>Members</strong></h3>
                                <div class="profiletimeline">
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="../assets/images/users/1.jpg" alt="user" class="img-circle" /> <b>Member 1</b></div>
                                            </div>
                                </div><br>
                                <div class="profiletimeline">
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="../assets/images/users/1.jpg" alt="user" class="img-circle" /> <b>Member 2</b></div>
                                            </div>
                                </div>
                            </div>
                        </div>
                    </div>


                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-block">
                                                    <h4 class="card-title">Activity Timeline</h4>
                                                    <div class="panel-wrapper collapse in">
                                                                <div class="panel-body">
                                                                    <div class="steamline">
                                                                                                                            <div class="sl-item">
                                                                            <div class="sl-left"><i class="fa fa-circle text-info"></i>
                                                                            </div>
                                                                            <div class="sl-right">
                                                                                <div><h6>New task added to the project.</h6> <span class="sl-date">7 hours ago</span></div>
                                                                            </div>
                                                                        </div>
                                                                                                                            <div class="sl-item">
                                                                            <div class="sl-left"><i class="fa fa-circle text-info"></i>
                                                                            </div>
                                                                            <div class="sl-right">
                                                                                <div><h6>New task added to the project.</h6> <span class="sl-date">7 hours ago</span></div>
                                                                            </div>
                                                                        </div>
                                                                                                                            <div class="sl-item">
                                                                            <div class="sl-left"><i class="fa fa-circle text-info"></i>
                                                                            </div>
                                                                            <div class="sl-right">
                                                                                <div><h6>New task added to the project.</h6> <span class="sl-date">7 hours ago</span></div>
                                                                            </div>
                                                                        </div>
                                                                                                                            <div class="sl-item">
                                                                            <div class="sl-left"><i class="fa fa-circle text-info"></i>
                                                                            </div>
                                                                            <div class="sl-right">
                                                                                <div><h6>New member added to the project.</h6> <span class="sl-date">7 hours ago</span></div>
                                                                            </div>
                                                                        </div>
                                                                                                                            <div class="sl-item">
                                                                            <div class="sl-left"><i class="fa fa-circle text-info"></i>
                                                                            </div>
                                                                            <div class="sl-right">
                                                                                <div><h6>New member added to the project.</h6> <span class="sl-date">7 hours ago</span></div>
                                                                            </div>
                                                                        </div>
                                                                                                                            <div class="sl-item">
                                                                            <div class="sl-left"><i class="fa fa-circle text-info"></i>
                                                                            </div>
                                                                            <div class="sl-right">
                                                                                <div><h6>Test Project added as new project.</h6> <span class="sl-date">7 hours ago</span></div>
                                                                            </div>
                                                                        </div>
                                                                                                                        </div>
                                                                </div>
                                                            </div>
                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                    
                                <div class="tab-pane  p-20" id="members" role="tabpanel">
                                            <div class="row">
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <h3 class="card-title"><strong>Members</strong></h3>
                                                        <div class="profiletimeline">
                                                                    <div class="sl-item">
                                                                        <div class="sl-left"> <img src="../assets/images/users/1.jpg" alt="user" class="img-circle" /> <b>Member 1</b></div>
                                                                    </div>
                                                        </div><br>
                                                        <div class="profiletimeline">
                                                                    <div class="sl-item">
                                                                        <div class="sl-left"> <img src="../assets/images/users/1.jpg" alt="user" class="img-circle" /> <b>Member 2</b></div>
                                                                    </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <h3 class="card-title"><strong>Add Members</strong></h3>
                                                        
                                                                   
                                                                        
                                                                            <div class="form-group">
                                                                               
                                                                                <select class="form-control custom-select" data-placeholder="Choose a Member" tabindex="1">
                                                                                    <option value="Category 1">Member 1</option>
                                                                                    <option value="Category 2">Member 2</option>
                                                                                    <option value="Category 3">Member 5</option>
                                                                                    <option value="Category 4">Member 4</option>
                                                                                </select>
                                                                            </div>
                                                                    

                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            </div>


                                </div>
                                <div class="tab-pane p-20" id="tasks" role="tabpanel">
                                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-block">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th>Task</th>
                                                                    <th>Start Date</th>
                                                                    <th>Deadline</th>
                                                                    <th>Assigned To</th>
                                                                    <th>Progress</th>
                                                                    <th class="text-nowrap">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Lunar probe project</td>
                                                                    <td>May 12, 2015</td>
                                                                    <td>May 15, 2015</td>
                                                                    <td>Member 1</td>
                                                                    <td>
                                                                        <div class="progress progress-xs margin-vertical-10 ">
                                                                            <div class="progress-bar bg-danger" style="width: 35%; height:6px;"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-nowrap">
                                                                        <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                                        <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                     <td>Lunar probe project</td>
                                                                    <td>May 12, 2015</td>
                                                                    <td>May 15, 2015</td>
                                                                    <td>Member 1</td>
                                                                    <td>
                                                                        <div class="progress progress-xs margin-vertical-10 ">
                                                                            <div class="progress-bar bg-danger" style="width: 35%; height:6px;"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-nowrap">
                                                                        <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                                        <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                     <td>Lunar probe project</td>
                                                                    <td>May 12, 2015</td>
                                                                    <td>May 15, 2015</td>
                                                                    <td>Member 1</td>
                                                                    <td>
                                                                        <div class="progress progress-xs margin-vertical-10 ">
                                                                            <div class="progress-bar bg-danger" style="width: 35%; height:6px;"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-nowrap">
                                                                        <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                                        <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                     <td>Lunar probe project</td>
                                                                    <td>May 12, 2015</td>
                                                                    <td>May 15, 2015</td>
                                                                    <td>Member 1</td>
                                                                    <td>
                                                                        <div class="progress progress-xs margin-vertical-10 ">
                                                                            <div class="progress-bar bg-danger" style="width: 35%; height:6px;"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-nowrap">
                                                                        <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                                        <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                     <td>Lunar probe project</td>
                                                                    <td>May 12, 2015</td>
                                                                    <td>May 15, 2015</td>
                                                                    <td>Member 1</td>
                                                                    <td>
                                                                        <div class="progress progress-xs margin-vertical-10 ">
                                                                            <div class="progress-bar bg-danger" style="width: 35%; height:6px;"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-nowrap">
                                                                        <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                                        <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                     <td>Lunar probe project</td>
                                                                    <td>May 12, 2015</td>
                                                                    <td>May 15, 2015</td>
                                                                    <td>Member 1</td>
                                                                    <td>
                                                                        <div class="progress progress-xs margin-vertical-10 ">
                                                                            <div class="progress-bar bg-danger" style="width: 35%; height:6px;"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-nowrap">
                                                                        <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                                        <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="tab-pane p-20" id="notes" role="tabpanel">4</div>
                                <div class="tab-pane p-20" id="files" role="tabpanel">
                                                        <div class="col-12">
                                                            <div class="card">
                                                                <div class="card-block">
                                                                    <h4 class="card-title">Upload File</h4>
                                                                    <input type="file" id="input-file-now" class="dropify" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="card">
                                                                <div class="card-block">
                                                                    <div class="table-responsive">
                                                                        <table class="table">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Id</th>
                                                                                    <th>Name</th>
                                                                                    <th>Uploded By</th>
                                                                                    <th>Date</th>
                                                                                    <th>Action</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td><a href="javascript:void(0)">1</a></td>
                                                                                    <td>abcd.jpg</td>
                                                                                    <td><span class="text-muted"></i> Accd Xyz</span> </td>
                                                                                    <td>23-10-2016</td>
                                                                                    <td><i class="fa fa-cloud-download"></i>&nbsp;<i class="fa fa-window-close-o"></i></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><a href="javascript:void(0)">2</a></td>
                                                                                    <td>abc.pdf</td>
                                                                                    <td><span class="text-muted"></i>Accd Xyz</span> </td>
                                                                                    <td>23-10-2016</td>
                                                                                    <td><i class="fa fa-cloud-download"></i>&nbsp;<i class="fa fa-window-close-o"></i></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><a href="javascript:void(0)">3</a></td>
                                                                                    <td>xyz.pdf</td>
                                                                                    <td><span class="text-muted"></i>Accd Xyz</span> </td>
                                                                                    <td>23-10-2016</td>
                                                                                    <td><i class="fa fa-cloud-download"></i>&nbsp;<i class="fa fa-window-close-o"></i></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><a href="javascript:void(0)">4</a></td>
                                                                                    <td>abcd.img</td>
                                                                                    <td><span class="text-muted"></i>Accd Xyz</span> </td>
                                                                                    <td>23-10-2016</td>
                                                                                    <td><i class="fa fa-cloud-download"></i>&nbsp;<i class="fa fa-window-close-o"></i></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                </div>
                                <div class="tab-pane p-20" id="gantt" role="tabpanel">
                                    <img src="gantt.jpg" style='height: 100%; width: 100%; object-fit: contain'>
                                </div>
                                <div class="tab-pane p-20" id="issues" role="tabpanel">7</div>
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