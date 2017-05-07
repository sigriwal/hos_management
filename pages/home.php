<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MeetDoctor | Home</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
     <!-- Morris charts -->
    <link rel="stylesheet" href="../plugins/morris/morris.css">
	<!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    
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
            <li class="active"><a href="home.php"><i class="fa fa-home"></i> <span>Home</span></a></li>
            <li><a href="register.php"><i class="fa fa-fax"></i> <span>OPD</span></a></li>
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
            Patients' Projection
            <small>Number of Patients You served</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Stats</li>
          </ol>		  
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- Small boxes (Stat box) -->
          <div class="row">
               <div class="col-lg-1 col-xs-12">
	       </div>			
	      <div class="col-lg-4 col-xs-12">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>Appointments</h3>
                  <p>Todays' Patients : 
                     <?php
                               include_once 'calPatients_db_function.php';
			       $db = new calPatients_DB_Functions();
			       $count = $db->calDailyPatients();
			       echo $count;
		      ?>
                  </p>
                </div>
                <div class="icon">
                  <i class="fa fa-plus-circle"></i>
                </div>
                <a href="t_patient_list.php" class="small-box-footer">
                  More info <i class="fa fa-arrow-circle-right"></i>
                </a>
                </a>
              </div>
            </div><!-- ./col -->
			
			<div class="col-lg-1 col-xs-12">
			</div>
			
	      <div class="col-lg-4 col-xs-12">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>OPD</h3>
                  <p>Patients Registration</p>
                </div>
                <div class="icon">
                  <i class="fa fa-fax"></i>
                </div>
                <a href="register.php" class="small-box-footer">
                  Register <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->
			
		  </div>

		  <!-- =========================================================== -->
	    <div class="row">
             <div class="col-lg-1 col-xs-12">
	       </div>

            <div class="col-lg-4 col-xs-12">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>
                      <?php
                               include_once 'calPatients_db_function.php';
			       $db = new calPatients_DB_Functions();
			       $count = $db->totPatients();
			       echo $count;
		      ?>
                  </h3>
                  <p>Total Patients</p>
                </div>
                <div class="icon">
                  <i class="fa fa-line-chart"></i>
                </div>
                <a href="a_patient_list.php" class="small-box-footer">
                  More info <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->
			
			<div class="col-lg-1 col-xs-12">
			</div>
			
	      <div class="col-lg-4 col-xs-12">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>Doctor<sup style="font-size: 20px"></sup></h3>
                  <p>Profile</p>
                </div>
                <div class="icon">
				  <i class="fa fa-user-md"></i>
                </div>
                <a href="profile.php" class="small-box-footer">
                  More info <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->
		  
	   <div class="row">
	     <div class="col-lg-1 col-xs-12">
	       </div>	    			
            <div class="col-lg-9 col-xs-12">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>   FeedBack</h3>
                  <p>4.8/5</p>
                </div>
                <div class="icon">
                  <i class="fa fa-pencil-square-o"></i>
                </div>
                <a href="#" class="small-box-footer">
                  Rate the Doc <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->

          <!-- =========================================================== -->

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
	<!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="../plugins/morris/morris.min.js"></script>
	<!-- ChartJS 1.0.1 -->
    <script src="../plugins/chartjs/Chart.min.js"></script>
	<!-- FastClick -->
    <script src="../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js"></script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->
		 
	<!-- page script -->
    <script>
      $(function () {
        "use strict";

        
        // LINE CHART
        var line = new Morris.Line({
          element: 'line-chart',
          resize: true,
          data: [
            {y: '2011 Q1', item1: 2666},
            {y: '2011 Q2', item1: 2778},
            {y: '2011 Q3', item1: 4912},
            {y: '2011 Q4', item1: 3767},
            {y: '2012 Q1', item1: 6810},
            {y: '2012 Q2', item1: 5670},
            {y: '2012 Q3', item1: 4820},
            {y: '2012 Q4', item1: 15073},
            {y: '2013 Q1', item1: 10687},
            {y: '2013 Q2', item1: 8432}
          ],
          xkey: 'y',
          ykeys: ['item1'],
          labels: ['Item 1'],
          lineColors: ['#3c8dbc'],
          hideHover: 'auto'
        });

        
        //BAR CHART
        var bar = new Morris.Bar({
          element: 'bar-chart',
          resize: true,
          data: [
            {y: 'Sunday', a: 100, b: 90},
            {y: 'Monday', a: 75, b: 65},
            {y: 'Tuesday', a: 50, b: 40},
            {y: 'Wednesday', a: 75, b: 65},
            {y: 'Thursday', a: 50, b: 40},
            {y: 'Friday', a: 75, b: 65},
            {y: 'Saturday', a: 100, b: 90}
          ],
          barColors: ['#00a65a', '#f56954'],
          xkey: 'y',
          ykeys: ['a', 'b'],
          labels: ['CPU', 'DISK'],
          hideHover: 'auto'
        });
				
      });
    </script>
	
	<script>
	$(function () {
		var areaChartData = {
          labels: ["January", "February", "March", "April", "May", "June", "July"],
          datasets: [
            {
              label: "Electronics",
              fillColor: "rgba(210, 214, 222, 1)",
              strokeColor: "rgba(210, 214, 222, 1)",
              pointColor: "rgba(210, 214, 222, 1)",
              pointStrokeColor: "#c1c7d1",
              pointHighlightFill: "#fff",
              pointHighlightStroke: "rgba(220,220,220,1)",
              data: [65, 59, 80, 81, 56, 55, 40]
            },
            {
              label: "Digital Goods",
              fillColor: "rgba(60,141,188,0.9)",
              strokeColor: "rgba(60,141,188,0.8)",
              pointColor: "#3b8bba",
              pointStrokeColor: "rgba(60,141,188,1)",
              pointHighlightFill: "#fff",
              pointHighlightStroke: "rgba(60,141,188,1)",
              data: [28, 48, 40, 19, 86, 27, 90]
            }
          ]
        };
	//-------------
        //- BAR CHART -
        //-------------
        var barChartCanvas = $("#barChart").get(0).getContext("2d");
        var barChart = new Chart(barChartCanvas);
        var barChartData = areaChartData;
        barChartData.datasets[1].fillColor = "#00a65a";
        barChartData.datasets[1].strokeColor = "#00a65a";
        barChartData.datasets[1].pointColor = "#00a65a";
        var barChartOptions = {
          //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
          scaleBeginAtZero: true,
          //Boolean - Whether grid lines are shown across the chart
          scaleShowGridLines: true,
          //String - Colour of the grid lines
          scaleGridLineColor: "rgba(0,0,0,.05)",
          //Number - Width of the grid lines
          scaleGridLineWidth: 1,
          //Boolean - Whether to show horizontal lines (except X axis)
          scaleShowHorizontalLines: true,
          //Boolean - Whether to show vertical lines (except Y axis)
          scaleShowVerticalLines: true,
          //Boolean - If there is a stroke on each bar
          barShowStroke: true,
          //Number - Pixel width of the bar stroke
          barStrokeWidth: 2,
          //Number - Spacing between each of the X value sets
          barValueSpacing: 5,
          //Number - Spacing between data sets within X values
          barDatasetSpacing: 1,
          //String - A legend template
          legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
          //Boolean - whether to make the chart responsive
          responsive: true,
          maintainAspectRatio: true
        };

        barChartOptions.datasetFill = false;
        barChart.Bar(barChartData, barChartOptions);
      });
	
	</script>
	
  </body>
</html>
