<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MeetDoctor | OPD</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
	
	<script src="../js/patient_registration.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b> 
		  <?php
			include_once 'hname_accronym.php';
			$db = new hna_DB_Functions();
			$a = $db->getAcrH_Name();
			echo $a;
		?>	
		  </b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>
			<?php
				include_once 'hospital_DB_function.php';
				$db = new h_DB_Functions();
				$h_name = $db->getH_Name();
				echo $h_name;
			?>	
		  </b>Hospital</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <img src="../dist/img/doc.png" class="user-image" alt="User Image">
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs">
					<?php
						include_once 'doc_DB_fuctions.php';
						$db = new doc_DB_Functions();
						$doc = $db->getDocName();
						echo $doc;
					?>
				  </span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <img src="../dist/img/doc.png" class="img-circle" alt="User Image">
                    <p>
                      <?php
							include_once 'doc_DB_fuctions.php';
							$db = new doc_DB_Functions();
							$doc = $db->getDocName();
							$spec = $db->getSpecialization();
							echo $doc. " - ".$spec;
						?>
                     </p>
                  </li>
                 
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="profile.php" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="../../logOut.php" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="../dist/img/doc.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>
				<?php
					include_once 'doc_DB_fuctions.php';
					$db = new doc_DB_Functions();
					$doc = $db->getDocName();
					echo $doc;
				?>
			  </p>
              <!-- Status -->
              <a><i class="fa fa-circle text-success"></i> 
				<?php
					include_once 'doc_DB_fuctions.php';
					$db = new doc_DB_Functions();
					$spec = $db->getSpecialization();
					echo $spec;
				?>
			  </a>
            </div>
          </div>

          <!-- search form (Optional) -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">   </li>
            <!-- Optionally, you can add icons to the links -->
            <li><a href="home.php"><i class="fa fa-home"></i> <span>Home</span></a></li>
            <li class="active"><a href="#"><i class="fa fa-fax"></i> <span>OPD</span></a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-user"></i> <span>Your Patients</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="t_patient_list.php">Today's List</a></li>
                <li><a href="a_patient_list.php">All Patients</a></li>
              </ul>
            </li>
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          	<h1>
            Confirmation 
            <small>Patient's Registration</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> OPD</a></li>
            <li><a href="#">Registration</a></li>
            <li class="active">Confirm Registration</li>
          </ol>  
        </section>

        <!-- Main content -->
        <section class="content">
			<!-- title row -->
		<div class="box box-primary">
			<div class="box-header">
	          <div class="row">
	            <div class="col-xs-12">
	              <h2 class="page-header">
	                <i class="fa fa-globe"></i>
					<?php
						include_once 'hospital_DB_function.php';
						$db = new h_DB_Functions();
						$h_name = $db->getH_Name();
						echo $h_name;
					?> Hospital
	                <small class="pull-right">Date: <?php echo date("d/m/Y"); ?></small>
	              </h2>
	            </div><!-- /.col -->
	          </div>
			</div>
			
			<div class="box-body">  	  
			   <!-- Table row -->
			  <div class="row">
	            <div class="col-xs-12 table-responsive">
	              <table class="table table-striped">
	                <tbody>
	                  <tr>
	                    <td>Patient's Name:</td>
	                    <td>
						<?php
							include_once 'confirm.php';
							$db = new confirm_DB_Functions();
							$name = $db->getName();
							echo $name;
						?>
						</td>
	                  </tr>
	                  <tr>
	                    <td>Gender:</td>
	                    <td>
						<?php
							include_once 'confirm.php';
							$db = new confirm_DB_Functions();
							$gender = $db->getGender();
							echo $gender;
						?>
						</td>
	                  </tr>
	                  <tr>
	                    <td>Date of Birth:</td>
	                    <td>
						<?php
							include_once 'confirm.php';
							$db = new confirm_DB_Functions();
							$dob = $db->getDob();
							echo $dob;
						?>
						</td>
	                  </tr>
					  <tr>
	                    <td>Son/Daughter/Wife Of</td>
	                    <td>
						<?php
							include_once 'confirm.php';
							$db = new confirm_DB_Functions();
							$res = $db->getG_Name();
							echo $res;
						?>
						</td>
	                  </tr>
					  <tr>
	                    <td>Mother's Name</td>
	                    <td>
						<?php
							include_once 'confirm.php';
							$db = new confirm_DB_Functions();
							$res = $db->getM_Name();
							echo $res;
						?>
						</td>
	                  </tr>
					  <tr>
	                    <td>Email Address</td>
	                    <td>
							<?php
							include_once 'confirm.php';
							$db = new confirm_DB_Functions();
							$res = $db->getEmail();
							echo $res;
						?>
						</td>
	                  </tr>
					  <tr>
	                    <td>Mobile No:</td>
	                    <td>
						<?php
							include_once 'confirm.php';
							$db = new confirm_DB_Functions();
							$res = $db->getMobile();
							echo $res;
						?>
						</td>
	                  </tr>
	                  <tr>
	                    <td>Address:</td>
	                    <td>
						<?php
							include_once 'confirm.php';
							$db = new confirm_DB_Functions();
							$res = $db->getAddr();
							echo $res;
						?>
						</td>
	                  </tr>
					  <tr>
	                    <td>State:</td>
	                    <td>
						<?php
							include_once 'confirm.php';
							$db = new confirm_DB_Functions();
							$res = $db->getState();
							echo $res;
						?>
						</td>
	                  </tr>
					  <tr>
	                    <td>District:</td>
	                    <td>
						<?php
							include_once 'confirm.php';
							$db = new confirm_DB_Functions();
							$res = $db->getDist();
							echo $res;
						?>
						</td>
	                  </tr>
					  <tr>
	                    <td>Country:</td>
	                    <td>India</td>
	                  </tr>
					  <tr>
	                    <td>Pin:</td>
	                    <td>
						<?php
							include_once 'confirm.php';
							$db = new confirm_DB_Functions();
							$res = $db->getPin();
							echo $res;
						?>
						</td>
	                  </tr>
	                </tbody>
	              </table>
	            </div><!-- /.col -->
	          </div><!-- /.row -->
			  	<br>		
			<!-- this row conatins buttons -->
          <div class="row no-print">
			<div class="col-xs-4">
			</div>
            <div class="col-xs-4">
              <a href="register.php" class="btn btn-danger">Edit</a>
			  <input type="button" class="btn btn-success pull-right" value="Confirm Submit" onclick="confirm_submit()" />
              <!--<a href="invoice.php" class="btn btn-success pull-right">Confirm Submit</a>-->
            </div>
          </div>
			
		</div>  
	    </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
          
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2015 <a href="#">DC Services Pvt Ltd</a>.</strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
	<!-- FastClick -->
    <script src="../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js"></script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->
		 
	<!-- page script -->
		<script type="text/javascript">

		</script>
		
	
  </body>
</html>
