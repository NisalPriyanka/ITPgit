<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>pre_estimate</title>
		<meta name="description" content="">
		<meta name="author" content="Nisal Priyanka">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		<link rel="stylesheet" href="Libraries/css/bootstrap.min.css" />
		<script src="Libraries/js/bootstrap.min.js"></script> 
		<link rel="stylesheet" href="CSS/pre_est_edit.css" type="text/css" />
		<script type="text/javascript" src="dynamicTextBox.js"></script>
	</head>

	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			 <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Repair Center Management System</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
		</div>
		</nav> 
		
		<div style="padding-top:60px;"></div>
		
		<!--contents-->
		<div class="container">
			<!--heading-->
			<div class="row">
				<div class="col-md-12">
					<div class="headingTxt"><h2>Create New Estimate Sheet</h2></div>
				</div>
			</div> <!--end of heading-->
			
			
		<div style="padding-top:50px;"></div>
		<!--form-->
<div class="panel1">
	<form method="POST" action="" >
		<div class="form-group">
			<div class="row">
				<div class="col-md-4">
					<label for="vehicleNo">Vehicle No :</label> 
					<input type="text" name="vehicleNo" class="form-control input-sm"/>
				</div>
				<div class="col-md-4">
					<label>Insurance :</label> 
					<input type="text" name="insurance" class="form-control input-sm"/>
				</div>
				<div class="col-md-4">
					<label>model :</label> 
					<input type="text" name="model" class="form-control input-sm"/>
				</div>
			</div>
			<div style="padding-top:5px;"></div>
			<div class="row">
				<div class="col-md-4">
					<label>Owner :</label> 
					<input type="text" name="owner" class="form-control input-sm"/>
				</div>
				<div class="col-md-4">
					<label>Color Code :</label> 
					<input type="text" name="cCode" class="form-control input-sm"/>
				</div>
			</div>
		
			<div style="padding-top:20px;"></div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-responsive">
					<table class="table table-bordered">
						<thead>
						<tr><th>Description</th><th>Value (Rs.)</th></tr> 
						</thead>
							<tr>
								<td>
									<p style="font-weight:700; color:brown;">To be supplied Iteams (Purchasing Iteams / To be replaced Iteams)</p>
									<p id="tboxR1"></p>
									<input type="button" onClick="addTextBox('desHf','tboxR1'); addTextBoxValues('valHf','vboxR1');" class="btn btn-primary" value="Add" />
									
								</td>
								<td>
									<p style="font-weight:700; color:brown;">Iteam Values</p>
									<p id="vboxR1"></p>
									
								</td>
							</tr>
							
							<!--Last Modified-->
							
							
							
					</table>
					</div>
				</div>
			</div>
			
			
			
		</div><!--end of form-group-->
  </div> <!--endOf Panel Design block -->	
	</form>	<!--end of form-->

		</div>
	</body>
</html>
