<?php
require 'display.php';

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Meru Timetable Notification System - Unit Registration</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/lines.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet">
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->
<!-- Nav CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<!-- Graph JavaScript -->
<script src="js/d3.v3.js"></script>
<script src="js/rickshaw.js"></script>
</head>
<body>
<div id="wrapper">
      <!-- Navigation -->
      <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"> </a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">

			    <li class="dropdown">
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="images/1.png"><span class="badge"></span></a>
	        		<ul class="dropdown-menu">
						<li class="dropdown-menu-header text-center">
							<strong>Account</strong>
						</li>
						<li class="m_2"><a href="#"><i class="fa fa-user"></i> Margaret Ngina <span class="label label-info"></span></a></li>
						<li class="m_2"><a href="#"><i class="fa fa-envelope-o"></i> maggy@meru.co.ke<span class="label label-success"></span></a></li>
						<li class="m_2"><a href="#"> Head of Department <span class="label label-danger"></span></a></li>
						<li class="dropdown-menu-header text-center">
							<strong>Settings</strong>
						</li>
						<li class="divider"></li>
						<li class="m_2"><a href="logout.php"><i class="fa fa-lock"></i> Logout</a></li>
	        		</ul>
	      		</li>
			</ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-users"></i>Course Information<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="register_unit.php">Update Units</a>
                                </li>
                                <li>
                                    <a href="course_update.php">Update Courses</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-user"></i>Lecture Timetable<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="schedule.php">View Allocation</a>
                                </li>
                                <li>
                                    <a href="lecture_allocate.php">Allocate Schedule</a>
                                </li>
                            </ul>
                            <li>
                                <a href="add_rooms.php"><i class="fa fa-tasks"></i>Lecture Rooms</a>
                            </li>
                            <!-- /.nav-second-level -->
                        </li>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
        <div class="graphs">
     	<div class="col_3">
        <h3>Register New Units</h3>
        <div class="panel-body">
      					<form method="post" action="regunit.php" role="form" class="form-horizontal">
      						<div class="form-group">
      							<label class="col-md-2 control-label">Unit Code</label>
      							<div class="col-md-8">
      								<div class="input-group">
      									<span class="input-group-addon">
      									
      									</span>
      									<input type="text" name="code" class="form-control1" placeholder="Enter Unit Code">
      								</div>
      							</div>
      						</div>
                  <div class="form-group">
      							<label class="col-md-2 control-label">Unit Name</label>
      							<div class="col-md-8">
      								<div class="input-group">
      									<span class="input-group-addon">
      									
      									</span>
      									<input type="text" name="name" class="form-control1" placeholder="Enter Unit Name">
      								</div>
      							</div>
      						</div>
      						<div class="form-group">
      							<label class="col-md-2 control-label">Course</label>
      							<div class="col-md-8">
      								<div class="input-group input-icon right">
      									<span class="input-group-addon">
      									
      									</span>
      									<select name="course" class="form-control mt-3">
                                                <option>
                                               Select Course
                                                </option>
                                                <?php
                                                  foreach($courses as $course) {
                                                    echo "<option value=\"{$course['id']}\" >{$course['name']}</option>";
                                                  }
                                                  ?>

                                                </select>
      								</div>
      							</div>
      						</div>
      						<div class="form-group">
      							<label class="col-md-2 control-label">Year</label>
      							<div class="col-md-8">
      								<div class="input-group input-icon right">
      									<span class="input-group-addon">
      										<i class="fa fa-nav_icon"></i>
      									</span>
      									<select name="year" class="form-control mt-3">
                                                <option>
                                               Select Year
                                                </option>
                                              <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                </select>
      								</div>
      							</div>
      						</div>
                  
                  <div class="form-group">
                <button type="submit" name= "submit" class="btn btn-primary">Submit</button>
              </div>
              </fieldset>
      					</form>
      	</div>
       
	  <div class="span_15">
    <div class="content_bottom">

		<div class="clearfix"> </div>
	    </div>
		<div class="copy">
            <p>Copyright &copy;. All Rights Reserved  </p>
	    </div>
		</div>
       </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
