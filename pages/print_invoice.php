<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Invoice</title>
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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body onload="window.print();">
    <div class="wrapper">
      <!-- Main content -->
      <section class="invoice">
        <!-- title row -->
		<div class="box box-primary">
			<div class="box-header">
	          <div class="row">
	            <div class="col-xs-12">
	              <h2 class="page-header">
	                <i class="fa fa-globe"></i>
						<?php
						session_start();
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
			  <div class="row invoice-info">
	            <div class="col-sm-4 invoice-col">
	              From
	              <address>
	                <strong>
					<?php
						include_once 'doc_DB_fuctions.php';
						$db = new doc_DB_Functions();
						$doc = $db->getDocName();
						echo $doc;
					?>
					</strong><br>
	                <?php
						include_once 'hospital_DB_function.php';
						$db = new h_DB_Functions();
						$h_name = $db->getH_Name();
						$addr = $db->getAddr();
						$loc = $db->getLoc();
						$mob = $db->getNum();
						$mail = $db->getEmail();
						echo $h_name." Hospital";
						echo "<br>";
						echo $addr;
						echo "<br>";
						echo $loc;	
						echo "<br>";
						echo "Phone: (+91)-".$mob;
						echo "<br>";
						echo "Email: ".$mail;
					?> 
	              </address>
	            </div><!-- /.col -->
	            <div class="col-sm-4 invoice-col">
	              
	            </div><!-- /.col -->
	            <div class="col-sm-4 invoice-col pull-right">
	              <b>Invoice: </b> 
				  <?php
					include_once 'confirm.php';
					$db = new confirm_DB_Functions();
					$res = $db->getINV();
					echo $res;
				  ?>
				  <br>
	              <b>OPD No:</b> 
				  <?php
					include_once 'confirm.php';
					$db = new confirm_DB_Functions();
					$res = $db->getOPD();
					echo $res;
				  ?>
				  <br>
	              <b>Payment Due:</b> <?php echo date("d/m/Y"); ?><br>
	            </div><!-- /.col -->
	          </div><!-- /.row -->
			  
			   <!-- Table row -->
			  <div class="row">
				<div class="col-sm-12">
	              <b>To,</b>
	            </div>
			  </div>
			  <br>
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
	                    <td>Dob:</td>
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
							$addr = $db->getAddr();
							$dist = $db->getDist();
							$state = $db->getState();
							echo $addr.", ".$dist.", ".$state;
						?>
						</td>
	                  </tr>
	                </tbody>
	              </table>
	            </div><!-- /.col -->
	          </div><!-- /.row -->
			  
			  <div class="row">
				<div class="col-xs-3">
					<p class="lead">Payment Methods:</p>
					<p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
						By Cash
					</p>
				</div>
				<div class="col-xs-9">
					<p class="lead">Amount Due <?php echo date("d/m/Y"); ?></p>
					<div class="table-responsive">
	                <table class="table table-striped">
	                  <tr>
	                    <th>Consultation Fee:</th>
	                    <td><i class="fa fa-rupee"></i> 500</td>
	                  </tr>
	                </table>
				</div>
			  </div>
			</div>
        </div><!-- /.row -->
      </section><!-- /.content -->
    </div><!-- ./wrapper -->

    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js"></script>
  </body>
</html>
