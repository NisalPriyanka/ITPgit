<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>job_main_window</title>
		<meta name="description" content="">
		<meta name="author" content="Nisal Priyanka">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		<link rel="stylesheet" href="Libraries/css/bootstrap.min.css" />
		<script src="Libraries/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="CSS/job_main.css" type="text/css" />
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
		
		<div style="padding-top:40px;"></div>
		
		<!--body contents-->
		<div class="container">
			<!--JobManagement Heading-->
			<div class="row">
				<div class="col-md-2"> </div>
				<div class="col-md-10">
					<img src="Images/jo_head.jpg" class="img-responsive" style="width:70%; border:2px solid #1F618D; padding:5px; "/> </div>
				
			</div>
			
			<!--Main contents-->
			<div style="padding-top:15px ;"></div>
			
			<div class="row">
				<!--on going Jobs & Reports-->
				<div class="col-md-6 border-right">
					<!--Table-->
					<div class="row">
						<div class="col-md-12">
							<div class="textReport"><kbd>On going Jobs</kbd></div>
							<div style="padding-top:20px;"></div>
							<table class="table table-bordered">
								<tr>
									<th>Vehicle No</th> <th>Admitted Date</th> <th>Released Date</th> <th>Days Left</th>
								</tr>
								<tr class="job1">
									<td>BAN3164</td> <td>12/05/17</td> <td>13/05/17</td> <td>1</td>
								</tr>
								<tr>
									<td>WB2264</td> <td>12/05/17</td> <td>19/05/17</td> <td>7</td>
								</tr>
								<tr>
									<td>KM5569</td> <td>12/05/17</td> <td>20/05/17</td> <td>8</td>
								</tr>
							</table>
							<div style="float:right; font-weight:600; "><a href="#">[ See Full Report ]</a></div>
						</div>
												
					</div> <!--end of ongoing row inside column-->
					
					<!-- Reports -->
					
					<div class="row">
						
						<div class="col-md-12">
							<div class="row">
								<div class="textReport"><kbd>Job Reports</kbd></div>
							</div>
							<div style="padding-top:20px;"></div>
							<div class="row">
								<div class="col-md-3">
								<img src="Images/report-icon.gif" width="100" height="100" />
								</div>
								<div class="col-md-9">
									<div style="padding-top:50px; "></div>
									<button class="btn btn-default"  style="float:left; padding:9px 20px;">View</button>
								</div>
							</div>
						</div>
						
					</div> <!--end of report-->
					
					
				</div>	<!--end of ongoing job and report-->
				
				
				<!--Tasks-->
				
				<div class="col-xs-6">
					
					<div class="row">
						<div class="col-md-2">
							<img src="Images/Sheets-icon.png" width="70" height="70" />
						</div>
						<div class="col-md-10">
							<div class="row">
							<div style="font-family:'defaultT'; font-size:x-large;">Pre - Estimate Sheet</div>
							</div>
							<div class="row">
							<div class="btn-group btn-mybtn" data-toggle="buttons">
								<button class="btn btn-primary">Create New</button>
								<button class="btn btn-info">Edit Document</button>
								<button class="btn btn-warning">Print Document</button>
							</div>
						    </div>
						    </div> 
					</div> <!--end of Pre-Estimate Block-->
					
					<div style="padding-top:40px;" ></div>
					
					<div class="row"> <!--Quatation Sheet-->
						
						<div class="col-md-2">
							<img src="Images/quo.png" width="60" height="60" />
						</div>
						<div class="col-md-10">
							<div class="row">
							<div style="font-family:'defaultT'; font-size:x-large;">Quotation Sheet </div>
							</div>
							<div class="row">
							
							<div class="btn-group btn-mybtn" data-toggle="buttons">
								<button class="btn btn-primary">Create New</button>
								<button class="btn btn-info">Edit Document</button>
								<button class="btn btn-warning">Print Document</button>
							</div>
						    </div>
						    </div> 
						
					</div> <!--end of  Quatation Sheet-->
					
					<div style="padding-top:40px;" ></div>
					
					<div class="row"> <!-- Job Sheet -->
						
						<div class="col-md-2">
							<img src="Images/jcard.png" width="60" height="60" />
						</div>
						<div class="col-md-10">
							<div class="row">
							<div style="font-family:'defaultT'; font-size:x-large;">Job Sheet </div>
							</div>
							<div class="row">
							<div class="btn-group btn-mybtn" data-toggle="buttons">
								<button class="btn btn-primary">Create New</button>
								<button class="btn btn-info">Edit Document</button>
								<button class="btn btn-warning">Print Document</button>
							</div>
						    </div>
						    </div> 
						
					</div> <!--end of job sheet column-->
					
				</div> <!--end of main-task column-->
				
			</div> <!--end of the main contents-->
			
		</div>
	</body>
</html>
