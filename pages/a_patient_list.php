<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MeetDoctor | Patients</title>
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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../js/search_patients.js"></script>

  </head>
 
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="#" class="logo">
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
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
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
              <a href="#"><i class="fa fa-circle text-success"></i>
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
         <!-- <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form> -->
          <!-- /.search form -->

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">   </li>
            <!-- Optionally, you can add icons to the links -->
            <li><a href="home.php"><i class="fa fa-home"></i> <span>Home</span></a></li>
            <li><a href="register.php"><i class="fa fa-fax"></i> <span>OPD</span></a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-user"></i> <span>Your Patients</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li class="active"><a href="t_patient_list.php">Today's List</a></li>
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
             All Patients
            <small>Patients List</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Your Patients</a></li>
            <li class="active">All Patients</li>
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
                  <div class="row">
	            <div class="col-xs-12">
                       <form action="#" method="get" class="sidebar-form">
                          <div class="input-group">
                            <input type="text" name="search_patient" id="search-patient" class="form-control" placeholder="Search..." onchange="showPatient(this.value)">
                            <span class="input-group-btn">
                               <button type="submit" name="search" id="search-patient" class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                          </div>
                       </form>
                    </div>
                  </div>
                  <div class="row" id="pat_search">
                    <div class="col-xs-12">
                      <table class='table table-striped' id="resTable">
                        <tbody id="tbody">
                          
                        </tbody>                            
                      </table>
                    </div>
                  </div>
		</div>
			
		<div class="box-body">  	  
		   <!-- Table row -->
		   <div class="row">
	            <div class="col-xs-12 table-responsive">			
			<tbody>
		                <?php
							include_once '../../config.php';
							//session_start();
							$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
							if (!$con) {
							    die('Could not connect: ' . mysqli_error($con));
							}
							$email = $_SESSION['username'];
							$m_sql="SELECT * FROM users WHERE email='$email'";
							$m_result = mysqli_query($con, $m_sql);
							if($m_result == false) { 
								die(mysqli_error()); // TODO: better error handling
							}
							$m_row = mysqli_fetch_array($m_result);
							$h_num = $m_row['hospital_num'];
													
							$ser = "SELECT patient_information.*, patients_address.mobile,patients_address.addr,patients_address.district,patients_address.state FROM patient_information INNER JOIN patients_address ON patient_information.pat_num = patients_address.patient_num WHERE patient_information.hospital_num='$h_num'";
							$res = mysqli_query($con, $ser);
							
							if($res == false) { 
								die(mysqli_error()); // TODO: better error handling
							}
							$c1 = mysqli_num_rows($res);
							//echo $c1;
							
							echo "<table class='table table-striped'>";
							echo "<thead><tr>";
							echo "<th>OPD #</th>";
							echo "<th>Patient's Name</th>";
							echo "<th>DoB</th>";
							echo "<th>Guardian's Name</th>";
							echo "<th>Contact No</th>";
							echo "<th>Address</th>";
							echo "</tr></thead>";
							echo "<tbody>";
							while($row = mysqli_fetch_array($res)){
								echo "<tr>";
								echo "<td id='opd_num'><a>" . $row['pat_num'] . "</a></td>";
								echo "<td>" . $row['first_name']." ".$row['last_name'] . "</td>";
								echo "<td>" . $row['dob'] . "</td>";
								echo "<td>" . $row['guardian_name'] . "</td>";
								echo "<td>" . $row['mobile'] . "</td>";
								echo "<td>" . $row['addr']. ", ". $row['district']. ", ". $row['state'] . "</td>";
								echo "</tr>";
							}
							echo "</tbody>";
							echo "</table>"; 
							mysqli_close($con);
						?>
	                </tbody>
	              </table>
	            </div><!-- /.col -->
	          </div><!-- /.row -->
			  						
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
    
   
	
  </body>
</html>
