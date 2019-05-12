<!DOCTYPE html>
<html>
	<head>
		<title>TUP Customer Satisfaction & Feedback</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/form-style.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/css/bootstrap-datetimepicker.min.css">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link href="css/sweetalert2.min.css" rel="stylesheet">
		
		
		<style type="text/css">
					body{
						background-color: rgb(234, 236, 238);
					}
					h3{
						margin-top: 20px;
						
					}
					.form-grp{
						margin-top: 30px;
						margin-bottom: 30px;
						margin-right: 30px;
					}
					.form{
						margin-bottom: 25px;
						background-color: white;
					}
					.container1{
						padding: 20px;
					}
					.gray{
						background-color: rgb(234, 236, 238);
					}
					.container{
							padding: 20px;
					}
					.rating{
						text-align: center;
					}
					.col-sm-2{
						text-align: center;
					}
					.grayish{
						background-color: #FAFAFA;
					}
		</style>
	</head>
	<body>
		<div>
			<h1 style="text-align: center">TUP Customer Satisfaction & Feedback</h1>
		</div>
		<div class="form container">
			<div class="container1 container mt-4">
				<!-- <form id="myform" action=""> -->
				<h3>PERSONAL INFO</h3>
				<hr>
				<div class="form-grp">
					<div class="row pt-3">
						<div class="col-sm-4">
							<!-- firstname -->
							<input type="text" class="form-control mt-3 mt-sm-0" id="firstname" placeholder="First Name" required="true">
						</div>
						<div class="col-sm-5">
							<!-- lastname -->
							<input type="text" class="form-control  mt-3 mt-sm-0" id="lastname" placeholder="Last Name" required="true">
						</div>
					</div>
					<div class="row pt-3">
						<div class="col-sm-4">
							<!-- e-mail -->
							<div class="input-group">
								<input type="email" class="form-control" placeholder="Email" id="email" required="true">
							</div>
						</div>
						<div class="col-sm-3">
							<!-- Contact Number -->
							<input type="text" class="form-control mt-3 mt-sm-0" id="contact" placeholder="Contact No." maxlength="11" required="true">
						</div>
					</div>
					<div class="row pt-3">
						<div class="col-sm-4">
							<input type="text" class="form-control  mt-3 mt-sm-0" id="company" placeholder="Company/Office" required="true">
						</div>
					</div>
				</div>
				<h3>OFFICE</h3>
				<hr>
				<div class="form-grp">
					<div class="row pt-3">
						<div class="col-sm-6">
							<select class="form-control" id="office" required="true">
								<option hidden="true">Office Being Rated</option>
								<option>Office of the President</option>
								<option>Office of the University/Board Secretary</option>
								<option>Internal Control</option>
								<option>Office of the Bids and Awards Committee</option>
								<option>Office of the Vice President for Academic Affairs</option>
								<option>Education Resource Development Services</option>
								<option>Graduate Programs and External Studies</option>
								<option>University Registar</option>
								<option>Admission</option>
								<option>Student Affairs</option>
								<option>Guidance and Testing</option>
								<option>Academic Programs</option>
								<option>Expanded Tertiary Education and Equivalency Accreditation Program</option>
								<option>Industrial Relations and Job Placement</option>
								<option>University Library</option>
								<option>National Service Training Program</option>
								<option>Sports Development</option>
								<option>Cultural Affairs</option>
								<option>Gender and Development</option>
								<option>Alumni Relations</option>
								<option>College of Engineering</option>
								<option>College of Industrial Technology</option>
								<option>College of Industrial Education</option>
								<option>College of Architecture and Fine Arts</option>
								<option>College of Science</option>
								<option>College of Liberal Arts</option>
								<option>Office of the Vice President for Administration and Finance</option>
								<option>Administrative Services</option>
								<option>Finance Services</option>
								<option>Auxiliary Services</option>
								<option>Resource Generation</option>
								<option>Accounting</option>
								<option>Cashiering</option>
								<option>Budget</option>
								<option>Human Resource Management Services</option>
								<option>Supply</option>
								<option>Procurement</option>
								<option>Records</option>
								<option>Civil Security</option>
								<option>Motorpool</option>
								<option>Dental Clinic</option>
								<option>Medical Clinic</option>
								<option>Infrastructure Development</option>
								<option>Office of the Vice President for Research and Extension</option>
								<option>University Research and Development Services</option>
								<option>University Extension Services</option>
								<option>Technology Licensing</option>
								<option>Integrated Research and Training Center</option>
								<option>Office of the Vice President for Planing, Development, and Information System</option>
								<option>Planning and Development</option>
								<option>University Information Technology Center</option>
								<option>Institutional/International Linkages and External Affairs</option>
								<option>Accreditation</option>
								<option>Quality Assurance</option>
								<option>Internal Audit Team</option>
								<option>Urduja Security Services Inc.</option>
								<option>Mega and Allied Services Inc.</option>
								<option>PASUC Zonal Center</option>
							</select>
						</div>
						<div class="col-sm-4">
							
							<input type="text" class="form-control mt-3 mt-sm-0" id="employeeName" placeholder="Employee Being Rated" required="true">
						</div>
					</div>
					<div class="row pt-3">
						<div class="col-sm-4">
							<div id="filterDate2">
								
								<div class='input-group date' id='datepicker'>
									<input type='text' class="form-control input-lg" id="date" placeholder="Date" />
									<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
								</div>
								
							</div>
						</div>
					</div>
				</div>
				<h3>CUSTOMER SATISFACTION CRITERIA</h3>
				<hr>
				<div class="form-grp">
					<div class="row pt-3">
						<div class="col-sm-2">
							<p></p>
						</div>
						<div class="col-sm-2">
							<p class="rating">Outstanding <br>(5)</p>
						</div>
						<div class="col-sm-2">
							<p class="rating">Very Satisfactory <br>(4)</p>
						</div>
						<div class="col-sm-2">
							<p class="rating">Satisfactory <br>(3)</p>
						</div>
						<div class="col-sm-2">
							<p class="rating">Fair <br>(2)</p>
						</div>
						<div class="col-sm-2">
							<p class="rating">Poor or Needs Improvement <br>(1)</p>
						</div>
					</div>
					<div class="row pt-3">
						<div class="col-sm-2 grayish">
							<p>The employee/office responded to your needs/requirements on time.</p>
						</div>
						<div class="col-sm-2">
							<input type="radio" name="criteria1" id="criteria1_option5" value="5">
							<label for="criteria1_option5"> </label>
						</div>
						<div class="col-sm-2">
							<input type="radio" name="criteria1" id="criteria1_option4" value="4">
							<label for="criteria1_option4"> </label>
						</div>
						<div class="col-sm-2">
							<input type="radio" name="criteria1" id="criteria1_option3" value="3">
							<label for="criteria1_option3"> </label>
						</div>
						<div class="col-sm-2">
							<input type="radio" name="criteria1" id="criteria1_option2" value="2">
							<label for="criteria1_option2"> </label>
						</div>
						<div class="col-sm-2">
							<input type="radio" name="criteria5" id="criteria1_option1" value="1">
							<label for="criteria1_option1"> </label>
						</div>
					</div>
					<div class="row pt-3 gray">
						<div class="col-sm-2">
							<p>The employee/office processed your request with efficiency and accuracy.</p>
						</div>
						<div class="col-sm-2">
							<input type="radio" name="criteria2" id="criteria2_option5" value="5">
							<label for="criteria2_option5"> </label>
						</div>
						<div class="col-sm-2">
							<input type="radio" name="criteria2" id="criteria2_option4" value="4">
							<label for="criteria2_option4"> </label>
						</div>
						<div class="col-sm-2">
							<input type="radio" name="criteria2" id="criteria2_option3" value="3">
							<label for="criteria2_option3"> </label>
						</div>
						<div class="col-sm-2">
							<input type="radio" name="criteria2" id="criteria2_option2" value="2">
							<label for="criteria2_option2"> </label>
						</div>
						<div class="col-sm-2">
							<input type="radio" name="criteria2" id="criteria2_option1" value="1">
							<label for="criteria2_option1"> </label>
						</div>
					</div>
					<div class="row pt-3 grayish">
						<div class="col-sm-2">
							<p>The employee/office demonstrated utmost professionalism and respect.</p>
						</div>
						<div class="col-sm-2">
							<input type="radio" name="criteria3" id="criteria3_option5" value="5">
							<label for="criteria3_option5"> </label>
						</div>
						<div class="col-sm-2">
							<input type="radio" name="criteria3" id="criteria3_option4" value="4">
							<label for="criteria3_option4"> </label>
						</div>
						<div class="col-sm-2">
							<input type="radio" name="criteria3" id="criteria3_option3" value="3">
							<label for="criteria3_option3"> </label>
						</div>
						<div class="col-sm-2">
							<input type="radio" name="criteria3" id="criteria3_option2" value="2">
							<label for="criteria3_option2"> </label>
						</div>
						<div class="col-sm-2">
							<input type="radio" name="criteria3" id="criteria3_option1" value="1">
							<label for="criteria3_option1"> </label>
						</div>
					</div>
					<div class="row pt-3 gray">
						<div class="col-sm-2">
							<p>The employee/office has been friendly/courteous all throughout the transaction.</p>
						</div>
						<div class="col-sm-2">
							<input type="radio" name="criteria4" id="criteria4_option5" value="5">
							<label for="criteria4_option5"> </label>
						</div>
						<div class="col-sm-2">
							<input type="radio" name="criteria4" id="criteria4_option4" value="4">
							<label for="criteria4_option4"> </label>
						</div>
						<div class="col-sm-2">
							<input type="radio" name="criteria4" id="criteria4_option3" value="3">
							<label for="criteria4_option3"> </label>
						</div>
						<div class="col-sm-2">
							<input type="radio" name="criteria4" id="criteria4_option2" value="2">
							<label for="criteria4_option2"> </label>
						</div>
						<div class="col-sm-2">
							<input type="radio" name="criteria4" id="criteria4_option1" value="1">
							<label for="criteria4_option1"> </label>
						</div>
					</div>
					<div class="row pt-3 grayish">
						<div class="col-sm-2">
							<p>The employee/office effectively satisfied your overall needs/requirements.</p>
						</div>
						<div class="col-sm-2">
							<input type="radio" name="criteria5" id="criteria5_option5" value="5">
							<label for="criteria5_option5"> </label>
						</div>
						<div class="col-sm-2">
							<input type="radio" name="criteria5" id="criteria5_option4" value="4">
							<label for="criteria5_option4"> </label>
						</div>
						<div class="col-sm-2">
							<input type="radio" name="criteria5" id="criteria5_option3" value="3">
							<label for="criteria5_option3"> </label>
						</div>
						<div class="col-sm-2">
							<input type="radio" name="criteria5" id="criteria5_option2" value="2">
							<label for="criteria5_option2"> </label>
						</div>
						<div class="col-sm-2">
							<input type="radio" name="criteria5" id="criteria5_option1" value="1">
							<label for="criteria5_option1"> </label>
						</div>
					</div>
				</div>
				<h3>CUSTOMER FEEDBACK</h3>
				<hr>
				<div class="form-grp">
					<div class="row pt-3">
						<div class="radio">
							<input type="radio" name="feedback" id="optionsRadios1" value="complaint">
							<label for="optionsRadios1">I would like to file a complaint.</label>
						</div>
					</div>
					<div class="row pt-3">
						<div class="radio">
							<input type="radio" name="feedback" id="optionsRadios2" value="commend">
							<label for="optionsRadios2">I would like to commend an exemplary performance.
							</label>
						</div>
					</div>
					<div class="row pt-3">
						<div class="radio">
							<input type="radio" name="feedback" id="optionsRadios3" value="recommend">
							<label for="optionsRadios3">I would like to suggest or recommend desired actions for improvement.</label>
						</div>
					</div>
				</div>
				
				<h3>COMPLAINT / INCIDENT / COMMENDATION / SUGGESTION / RECOMMENDATION</h3>
				<hr>
				<div class="form-grp">
					<div class="row pt-3">
						<div class="col-sm-8">
							<textarea class="form-control" placeholder="Your Answer" id="comment" rows="5"></textarea>
						</div>
					</div>
				</div>
				
				<button type="submit" class="btn btn-primary btn-lg" onclick="submit()">Submit</button>
			</div>
			<!-- </form> -->
		</div>
	</div>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/js/bootstrap-datetimepicker.min.js
	"></script>
	<script type="text/javascript" src="js/axios.min.js"></script>
	<script src="js/sweetalert2.all.min.js"></script>
	<script type="text/javascript" src="js/form-func.js"></script>
</body>
</html>