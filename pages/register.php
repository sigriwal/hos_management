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
	
	<script src="../js/patient_registration.js"></script>
    
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

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
          <span class="logo-lg">
			<b> 
			<?php
				include_once 'hospital_DB_function.php';
				$db = new h_DB_Functions();
				$h_name = $db->getH_Name();
				echo $h_name;
			?>					
			</b>Hospital
		  </span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="" class="sidebar-toggle" data-toggle="offcanvas" role="button">
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
            <li class="active"><a href="register.php"><i class="fa fa-fax"></i> <span>OPD</span></a></li>
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
            Patient Registration
            <small>Register a new Patient</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> OPD</a></li>
            <li class="active">Registration</li>
          </ol>		  
        </section>

        <!-- Main content -->
        <section class="content">

	        <div class="frmbox">
				<form role="form" id="p_registration" name="p_registration" action="verify.jsp" method="post" style="padding:0 20px;">
					<div class="form-group">
						<div class="row">
							<div class="col-md-12">
								<div class="box box-primary">    
									<div class="box-header with-border">
										<h3 class="box-title">Patient's Name</h3>
									</div><!-- /.box-header -->
									
									<div class="box-body">
										<div class="col-md-3">
											<label> Initials<span class="red">*</span></label>
											<select class="form-control" id="p_initial_name" name="p_initial_name" onchange="ChangeSelectedGender();">
												<option value ="0"> --Select-- </option>
												<option value ="Mr.">Mr</option>
												<option value="Mrs.">Mrs</option>
												<option value="Miss.">Miss</option>
												<option value="Others">Others</option>
											</select>
										</div>
										<div class="col-md-3">
											<label>First Name<span class="red">*</span></label>
											<input type="text" class="form-control" id="p_first_name" name="p_first_name" value="" onblur="makeuppercase('p_first_name')" />
											<!--<input type="text" readonly style="display:none" id="P_SOURCE" name="P_SOURCE" value="2"/>-->
										</div>
										<div class="col-md-3">
											<label>Middle Name</label>
											<input type="text" class="form-control" id="p_middle_name" name="p_middle_name" value="" onblur="makeuppercase('p_middle_name')" />
										</div>
										<div class="col-md-3">
											<label>Last Name<span class="red">*</span></label>
											<input type="text" class="form-control" id="p_last_name" name="p_last_name" value="" onblur="makeuppercase('p_last_name')" />
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<div class="box box-primary">
									<div class="box-body">	
										<div class="col-md-3">
											<label>Gender<span class="red">*</span></label>                                
											<div class="gender">
												<input type="radio" value="1" id="p_sex" name="p_sex"/><span>Male</span>
												<input type="radio" value="2" id="p_sex" name="p_sex"/><span>Female</span>
												<input type="radio" value="0" id="p_sex" name="p_sex"/><span>Others</span>
												<input type="text" readonly style="display:none" id="p_sex_" name="p_sex_" value="0"/>
											</div>
										</div>
										<div class="col-md-2">
											<label>Date Of Birth<span class="red">*</span></label>
											<div class="input-group">
											  <div class="input-group-addon">
												<i class="fa fa-calendar"></i>
											  </div>
											  <input type="text" id="datemask" name="datemask" class="form-control" value="" data-inputmask="'alias': 'dd/mm/yyyy'">
											</div>                
										</div>
										<div class="col-md-4">
											<label>Son/ Daughter/ Wife Of<span class="red">*</span></label>
											<input type="text" class="form-control" id="guardian_name" name="guardian_name"/>
										</div>
										<div class="col-md-3">
											<label>Mother's Name</label>
											<input type="text" class="form-control" id="mother_name" name="mother_name"/>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="box box-primary">
								<div class="box-body">
									<div class="col-md-6">
										<label for="exampleInputEmail1">Email address</label>
										<input type="email" class="form-control" id="p_email" name="p_email" placeholder="Enter email" />
									</div>
									<div class="col-md-6">
										<label>Mobile No.<span class="red">*</span></label>
										<input type="text" class="form-control"  id="p_mobile" name="p_mobile" placeholder="Enter Mobile Number" maxlength="10" onkeypress="return isNumberKey(event);"/>
									</div>
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="box box-primary">
								<div class="box-body">
									<div class="row">
										<div class="col-md-6">
											<label>Address<span class="red">*</span></label>
											<input type="email" class="form-control" id="p_address" name="p_address" placeholder="Enter Address" />
										</div>
										<div class="col-md-3">
											<label>State<span class="red">*</span></label>
											<select  class="form-control" id="p_state" name="p_state">
												<option value="Jammu and Kashmir">Jammu and Kashmir</option><option value="Himachal Pradesh">Himachal Pradesh</option><option value="Punjab">Punjab</option><option value="Chandigarh">Chandigarh</option><option value="Uttarakhand">Uttarakhand</option><option value="Haryana">Haryana</option><option value="Delhi" selected="selected">Delhi</option><option value="Rajasthan">Rajasthan</option><option value="Uttar Pradesh">Uttar Pradesh</option><option value="Bihar">Bihar</option><option value="Sikkim">Sikkim</option><option value="Arunachal Pradesh">Arunachal Pradesh</option><option value="Nagaland">Nagaland</option><option value="Manipur">Manipur</option><option value="Mizoram">Mizoram</option><option value="Tripura">Tripura</option><option value="Meghalaya">Meghalaya</option><option value="Assam">Assam</option><option value="West Bengal">West Bengal</option><option value="Jharkhand">Jharkhand</option><option value="Odisha">Odisha</option><option value="Chhatisgarh">Chhatisgarh</option><option value="Madhya Pradesh">Madhya Pradesh</option><option value="Gujarat">Gujarat</option><option value="Daman & Diu">Daman & Diu</option><option value="Dadra & Nagar Haveli">Dadra & Nagar Haveli</option><option value="Maharashtra">Maharashtra</option><option value="Andhra Pradesh">Andhra Pradesh</option><option value="Karnataka">Karnataka</option><option value="Goa">Goa</option><option value="Lakshadweep">Lakshadweep</option><option value="Kerala">Kerala</option><option value="Tamil Nadu">Tamil Nadu</option><option value="Puducherry">Puducherry</option><option value="Andaman & Nicobar Islands">Andaman & Nicobar Islands</option><option value="Telangana">Telangana</option>
											</select>
										</div>
										<div class="col-md-3">
											<label>District<span class="red">*</span></label>
											<input type="text" class="form-control"  id="p_district" name="p_district" />
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<label>Country</label>
											<select class="form-control" id="p_country" name="p_country">
												<option>--Select Country--</option>
												<option value="India" selected>INDIA</option>
											</select>
										</div>
										<div class="col-md-6">
											<label>Pin Code</label>
											<input class="form-control" type="text" id="p_pin" name="p_pin" maxlength="6" onkeypress="return isNumberKey(event);"/>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<label>Illness<span class="red">*</span></label>
											<input class="form-control" type="text" id="p_illness" name="p_illness" maxlength="150" />
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-12">
											<div class="box-body">
												<div class="col-md-5">
												</div>
												<div class="col-md-4" style="margin-left:37px;">
													<input type="button" class="btn btn-primary" value="Submit" onclick="patient_verification();" />
												</div>
												<!--<div class="btn-group col-md-4" style="margin-left:37px;">
													<button type="submit" class="btn btn-primary" id="Submit" name="Submit" onclick="return validateRegForm_();">Submit</button>
												</div>-->
												<div class="col-md-3">
												</div>
											</div>
										</div>
									</div>		
								</div>
							</div>
						</div>
					</div>
				</form>
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
    <!-- InputMask -->
    <script src="../plugins/input-mask/jquery.inputmask.js"></script>
    <script src="../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="../plugins/input-mask/jquery.inputmask.extensions.js"></script>
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
	
		$(function () {
        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        });
	
	</script>
	
  </body>
</html>
