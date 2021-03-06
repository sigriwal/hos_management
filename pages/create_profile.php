<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MeetDoctor | Register</title>
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
	
	<script src="../js/create_profile.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
 
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>M </b>D</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Meet</b>Doctor</span>
        </a>
		

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">        
          <!-- Navbar Right Menu -->
		  
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
			  <li></li>
              <li><a href="../../logOut.php"><i class="fa fa-sign-out"></i><span>Sign-Out</span></a></li>
            </ul>
          </div>
        </nav>
      </header>
      
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
	  <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">   </li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="your_details.html"><i class="fa fa-user"></i> <span>Profile</span></a></li>
            <li><a href="../../logOut.php"><i class="fa fa-sign-out"></i> <span>Sign-Out</span></a></li>
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>
	  
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Hospital Registration
            <small>Register a your Hospital</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Sign-Up</a></li>
            <li class="active">Registration</li>
          </ol>		  
        </section>

        <!-- Main content -->
        <section class="content">
			<div class="row">
				<div class="col-md-6">
					<div class="box box-primary">    
						<div class="box-header with-border">
							<h3 class="box-title">Hospital Details</h3>
						</div><!-- /.box-header -->
						
						<div class="box-body">
							<form role="form" id="hospital_data">
								<div class="form-group" >
									<label>Hospital/Clinic Name<span class="red">*</span></label>
									<input type="text" class="form-control" id="h_name" name="h_name" value="" onblur="makeuppercase('h_name')" />
									<!--<input type="text" readonly style="display:none" id="P_SOURCE" name="P_SOURCE" value="2"/> -->
									<br>
									<label>Email Id</label>
									<input type="email" class="form-control"  id="h_email" name="h_email" value=""/>
									<label>Contact No.</label>
									<input type="text" class="form-control"  id="h_mobile" name="h_mobile" maxlength="10" value=" " onkeypress="return isNumberKey(event);" />
									<br>
									<label>Location<span class="red">*</span></label>
									<input type="text" class="form-control" id="h_address" name="h_address" placeholder="Enter Address" />
									
									<label>State<span class="red">*</span></label>
									<select  class="form-control" id="h_state" name="h_state">
										<option value="Jammu and Kashmir">Jammu and Kashmir</option><option value="Himachal Pradesh">Himachal Pradesh</option><option value="Punjab">Punjab</option><option value="Chandigarh">Chandigarh</option><option value="Uttarakhand">Uttarakhand</option><option value="Haryana">Haryana</option><option value="Delhi" selected="selected">Delhi</option><option value="Rajasthan">Rajasthan</option><option value="Uttar Pradesh">Uttar Pradesh</option><option value="Bihar">Bihar</option><option value="Sikkim">Sikkim</option><option value="Arunachal Pradesh">Arunachal Pradesh</option><option value="Nagaland">Nagaland</option><option value="Manipur">Manipur</option><option value="Mizoram">Mizoram</option><option value="Tripura">Tripura</option><option value="Meghalaya">Meghalaya</option><option value="Assam">Assam</option><option value="West Bengal">West Bengal</option><option value="Jharkhand">Jharkhand</option><option value="Odisha">Odisha</option><option value="Chhatisgarh">Chhatisgarh</option><option value="Madhya Pradesh">Madhya Pradesh</option><option value="Gujarat">Gujarat</option><option value="Daman & Diu">Daman & Diu</option><option value="Dadra & Nagar Haveli">Dadra & Nagar Haveli</option><option value="Maharashtra">Maharashtra</option><option value="Andhra Pradesh">Andhra Pradesh</option><option value="Karnataka">Karnataka</option><option value="Goa">Goa</option><option value="Lakshadweep">Lakshadweep</option><option value="Kerala">Kerala</option><option value="Tamil Nadu">Tamil Nadu</option><option value="Puducherry">Puducherry</option><option value="Andaman & Nicobar Islands">Andaman & Nicobar Islands</option><option value="Telangana">Telangana</option>
									</select>
									
									<label>District<span class="red">*</span></label>
									<input type="text" class="form-control" id="h_district" name="h_district" value="" />
									
									<label>Country</label>
									<select class="form-control" id="h_country" name="h_country">
										<option>--Select Country--</option>
										<option value="India" selected>INDIA</option>
									</select>
									<label>Pin Code</label>
									<input class="form-control" type="text" id="h_pin" name="h_pin" maxlength="6" onkeypress="return isNumberKey(event);"/>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="box box-primary">    
						<div class="box-header with-border">
							<h3 class="box-title">Doctor's Details</h3>
						</div><!-- /.box-header -->
						
						<div class="box-body">
							<form role="form" id="doc_data">
								<div class="form-group">
									<label>Doctor's Name<span class="red">*</span></label>
									<input type="text" class="form-control" id="d_name" name="d_name" value="" onblur="makeuppercase('d_name')" />
									<!--<input type="text" readonly style="display:none" id="P_SOURCE" name="P_SOURCE" value="2"/> -->
									<br>
									<label>Qualification<span class="red">*</span></label>
									<input type="text" class="form-control" id="d_qualf" name="d_qualf" value="" placeholder="Enter qualifications" />
									<label>Specialization<span class="red">*</span></label>
									<input type="text" class="form-control" id="d_specl" name="d_specl" value="" placeholder="Enter specializations" />
									<!--<br>
									<a href="#"><img src="" class="img-circle" alt=""><i class="fa fa-upload"></i><span> Upload Your Image</span></a>-->
								</div>
							</form>
							<!--<form role="form" action="create_profile.php" method="post" id="doc_img" enctype="multipart/form-data">
								<input type="file" name="img-file"><br>
								<button class="btn btn-primary" > <i class="fa fa-upload"></i><span> Upload Image</span></button>
							</form>-->
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="box-body">
					<div class="col-md-5">
					</div>
					<div class="col-md-4" style="margin-left:37px;">
						<!--<a href="home.php" class="btn btn-primary"> Proceed</a> -->
						<input type="button" class="btn btn-primary" value="Proceed" onclick="data_verification()" />
					</div>
					<!--<div class="btn-group col-md-4" style="margin-left:37px;">
						<button type="submit" class="btn btn-primary" id="Submit" name="Submit" onclick="return validateRegForm_();">Submit</button>
					</div>-->
					<div class="col-md-3">
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
		
		
		</script>	
  </body>
</html>