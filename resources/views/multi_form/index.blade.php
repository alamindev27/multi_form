<!DOCTYPE html>
<html lang="en">
<head>
	<!--Meta-->
	<meta name="description" content=""/>
	<meta name="keywords" content=""/>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!--Favicon-->
	<link rel="icon" href="assets/images/favicon.png" type="image/png" sizes="16x16">

	<!-- Title-->
	<title>Bootstrap-v4.5.3</title>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">

	<!-- Font Awesome v5.7.2 -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	
	<!-- Bootstrap v4.5.3 -->
	<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">

	<!-- Style CSS -->
	<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">

	<!-- You can deleted it while working with Laravel -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

	<!-- Section About Start -->
	<section id="about" class="bg-white">
		<div class="container">
			
			<div class="row">
				
				<div class="col-md-12">
					@if (Session::has('message'))
					<p class="alert alert-success">{{Session::get('message')}}</p>
					@endif
					<div class="multi-step-form-wrapper" style="background: #b2bec3;">
						<h3 class="form-badge">Career</h3>
						<div class="form-details">
							<p>Thank you for your interest. We are actively seeking licensed quality security officers for employment. Please fill out the form below and we will contact you regarding employment opportunities.</p>
							<p></p><strong>All positions require a Security License from your respected State where you are seeking employment.</strong></p>
						</div>
						<form action="{{route('save_application')}}" method="post" id="regForm" style="background: #fdcb6e;">
							@csrf
							<!-- <div class="form-progress">
								<p>Step 1 of 8</p>
								<div class="progress">
									<div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
								</div>
							</div> -->
							
							<!-- Step One Start -->
							<div class="tab step-one">
								<div class="form-row">
									<div class="form-group col-12 mb-0">
										<label for="" class="main-label">Name<span>*</span></label>
									</div>
									<div class="form-group col-md-6">
										<input type="text" name="fname" class="form-control required" required>
										<small class="form-text text-muted">First Name</small>
									</div>
									<div class="form-group col-md-6">
										<input type="text" name="lname" class="form-control required" required>
										<small class="form-text text-muted">Last Name</small>
									</div>
								</div>
								<div class="form-group">
									<label for="inputAddress" class="main-label">Address</label>
									<input type="text" name="address" class="form-control required" required>
									<small class="form-text text-muted">Street Address</small>
								</div>
								<div class="form-group">
									<input type="text" name="address_line2" class="form-control">
									<small class="form-text text-muted">Address line 2</small>
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<input type="text" name="city" class="form-control required" required>
										<small class="form-text text-muted">City</small>
									</div>
									<div class="form-group col-md-6">
										<input type="text" name="state" class="form-control required" required>
										<small class="form-text text-muted">State / Province  / Region</small>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<input type="text" name="zip" class="form-control required" required>
										<small class="form-text text-muted">Zip Code</small>
									</div>
									<div class="form-group col-md-6">
										<input type="text" name="country" class="form-control required" required>
										<small class="form-text text-muted">Country</small>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-6">
										<label for="" class="main-label">Phone<span>*</span></label>
										<input type="text" name="phone" class="form-control required" required>
										<small class="form-text text-muted">Phone format: (###) ###-####</small>
									</div>
									<div class="form-group col-md-6">
										<label for="" class="main-label">Alternative Phone</label>
										<input type="text" name="alternet_phone" class="form-control">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-6">
										<label for="" class="main-label">Email<span>*</span></label>
										<input type="email" name="email" class="form-control required" required>
									</div>
									<div class="form-group col-md-6">
										<label for="" class="main-label">How did you find us?</label>
										<select name="found" class="form-control">
											<option value="Other Website">Other Website</option>
											<option value="Search Engine">Search Engine</option>
											<option value="Referral">Referral</option>
											<option value="Magazine Ad">Magazine Ad</option>
											<option value="Radio">Radio</option>
											<option value="Billboard">Billboard</option>
											<option value="Newspaper">Newspaper</option>
											<option value="Craigslist">Craigslist</option>
										</select>
									</div>
								</div>
							</div>
							<!-- Step One End -->

							<!-- Step two Start -->
							<div class="tab step-two">
								<div class="form-group">
									<label for="" class="main-label">Do you currently have a State issued Security License?</label>
									<div class="custom-control custom-radio">
										<input type="radio" id="customRadio1" name="current_security_license" value="Yes" class="custom-control-input">
										<label class="custom-control-label" for="customRadio1">Yes</label>
									</div>
									<div class="custom-control custom-radio">
										<input type="radio" id="customRadio2" name="current_security_license" value="No" class="custom-control-input" checked>
										<label class="custom-control-label" for="customRadio2">No</label>
									</div>
								</div>
								<div class="form-group">
									<label for="" class="main-label">Do you have armed License?</label>
									<div class="custom-control custom-radio">
										<input type="radio" id="customRadio3" name="armed_license" value="Yes" class="custom-control-input armed-custom-input">
										<label class="custom-control-label" for="customRadio3">Yes</label>
									</div>
									<div class="custom-control custom-radio">
										<input type="radio" id="customRadio4" name="armed_license" value="No" class="custom-control-input armed-custom-input" checked>
										<label class="custom-control-label" for="customRadio4">No</label>
									</div>
									<div class="form-row sr-only" id="armed_extra">
										<div class="form-group col-md-6">
											<label for="" class="main-label">If yes, license #</label>
											<input type="text" name="armlicense" class="form-control" id="armed_license_no">
										</div>
										<div class="form-group col-md-6">
											<label for="" class="main-label">Expire date</label>
											<input type="text" name="armexp_date" class="form-control" id="armed_license_expire_date">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="" class="main-label">Do you have unarmed License?</label>
									<div class="custom-control custom-radio">
										<input type="radio" id="customRadio5" name="unarmed_license" value="Yes" class="custom-control-input unarmed-custom-input">
										<label class="custom-control-label" for="customRadio5">Yes</label>
									</div>
									<div class="custom-control custom-radio">
										<input type="radio" id="customRadio6" name="unarmed_license" value="No" class="custom-control-input unarmed-custom-input" checked>
										<label class="custom-control-label" for="customRadio6">No</label>
									</div>
									<div class="form-row sr-only" id="unarmed_extra">
										<div class="form-group col-md-6">
											<label for="" class="main-label">If yes, license #</label>
											<input type="text" name="unarmlicense" class="form-control" id="unarmed_license_no">
										</div>
										<div class="form-group col-md-6">
											<label for="" class="main-label">Expire date</label>
											<input type="text" name="unarmexp_date" class="form-control" id="unarmed_license_expire_date">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="" class="main-label">Are you 18 years old or older?</label>
									<div class="custom-control custom-radio">
										<input type="radio" id="customRadio7" name="years_18" value="Yes" class="custom-control-input" checked>
										<label class="custom-control-label" for="customRadio7">Yes</label>
									</div>
									<div class="custom-control custom-radio">
										<input type="radio" id="customRadio8" name="years_18" value="No" class="custom-control-input">
										<label class="custom-control-label" for="customRadio8">No</label>
									</div>
								</div>
								<div class="form-group">
									<label for="" class="main-label">Are you legally eligible to work in the U.S.? (Hire will be subject to verification of eligibility.)</label>
									<div class="custom-control custom-radio">
										<input type="radio" id="customRadio9" name="eligible_usa" value="Yes" class="custom-control-input" checked>
										<label class="custom-control-label" for="customRadio9">Yes</label>
									</div>
									<div class="custom-control custom-radio">
										<input type="radio" id="customRadio10" name="eligible_usa" value="No" class="custom-control-input">
										<label class="custom-control-label" for="customRadio10">No</label>
									</div>
								</div>
								<div class="form-group">
									<label for="" class="main-label">Have you ever worked or attended school under another name?</label>
									<div class="custom-control custom-radio">
										<input type="radio" id="customRadio11" name="worked_school" value="Yes" class="custom-control-input custom-worked-school">
										<label class="custom-control-label" for="customRadio11">Yes</label>
									</div>
									<div class="custom-control custom-radio">
										<input type="radio" id="customRadio12" name="worked_school" value="No" class="custom-control-input custom-worked-school" checked>
										<label class="custom-control-label" for="customRadio12">No</label>
									</div>
									<div class="form-group sr-only" id="worked_school_extra">
										<label for="" class="main-label">If so, under what name?</label>
										<input type="text" class="form-control" id="worked_another_school">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="main-label">Have you ever worked for this company?</label>
									<div class="custom-control custom-radio">
										<input type="radio" id="customRadio13" name="worked_company" value="Yes" class="custom-control-input">
										<label class="custom-control-label" for="customRadio13">Yes</label>
									</div>
									<div class="custom-control custom-radio">
										<input type="radio" id="customRadio14" name="worked_company" value="No" class="custom-control-input" checked>
										<label class="custom-control-label" for="customRadio14">No</label>
									</div>
								</div>
								<div class="form-group">
									<label for="" class="main-label">Have you ever been convicted of a crime?</label>
									<div class="custom-control custom-radio">
										<input type="radio" id="customRadio15" name="crime" value="Yes" class="custom-control-input custom-crime-input">
										<label class="custom-control-label" for="customRadio15">Yes</label>
									</div>
									<div class="custom-control custom-radio">
										<input type="radio" id="customRadio16" name="crime" value="No" class="custom-control-input custom-crime-input" checked>
										<label class="custom-control-label" for="customRadio16">No</label>
									</div>
									<div class="form-group sr-only" id="crime_extra">
										<label for="" class="main-label">If yes, give details, including date(s)</label>
										<textarea name="crime_details" class="form-control" rows="4" id="crime_details"></textarea>
									</div>
								</div>
							</div>
							<!-- Step Two End -->

							<!-- Step Three Start -->
							<div class="tab step-three">
								<div class="form-group">
									<label for="" class="main-label">Position Desired</label>
									<div class="custom-control custom-radio">
										<input type="radio" id="customRadio17" name="desired_position2" value="Full Time" class="custom-control-input" checked>
										<label class="custom-control-label" for="customRadio17">Full Time</label>
									</div>
									<div class="custom-control custom-radio">
										<input type="radio" id="customRadio18" name="desired_position2" value="Part Time" class="custom-control-input">
										<label class="custom-control-label" for="customRadio18">Part Time</label>
									</div>
									<div class="custom-control custom-radio">
										<input type="radio" id="customRadio19" name="desired_position2" value="On Call" class="custom-control-input">
										<label class="custom-control-label" for="customRadio19">On Call</label>
									</div>
								</div>
								<div class="form-group">
									<label for="" class="main-label">Date you can start</label>
									<input type="text" name="date_start" class="form-control">
								</div>
								<div class="form-group">
									<label for="" class="main-label">Are you willing to work (check all that apply)</label>
									<div class="custom-control custom-checkbox">
										<input type="checkbox" id="customCheckbox1" name="desired_position[]" value="Weekends" class="custom-control-input">
										<label class="custom-control-label" for="customCheckbox1">Weekends</label>
									</div>
									<div class="custom-control custom-checkbox">
										<input type="checkbox" id="customCheckbox2" name="desired_position[]" value="Holidays" class="custom-control-input">
										<label class="custom-control-label" for="customCheckbox2">Holidays</label>
									</div>
									<div class="custom-control custom-checkbox">
										<input type="checkbox" id="customCheckbox3" name="desired_position[]" value="Nights" class="custom-control-input">
										<label class="custom-control-label" for="customCheckbox3">Nights</label>
									</div>
									<div class="custom-control custom-checkbox">
										<input type="checkbox" id="customCheckbox4" name="desired_position[]" value="Overtime" class="custom-control-input">
										<label class="custom-control-label" for="customCheckbox4">Overtime</label>
									</div>
								</div>
								<div class="form-group">
									<label for="" class="main-label">Please identify any days and/or hours you are not available to work</label>
									<textarea name="not_available_to_work" class="form-control" rows="4"></textarea>
								</div>
								<div class="form-group">
									<label for="" class="main-label">How did you learn about INFINITY PROTECTION Security (please be detailed)?</label>
									<textarea name="learncompnay" class="form-control" rows="4"></textarea>
								</div>
								<div class="form-group">
									<label for="" class="main-label">Are you currently under a non-compete agreement with a previous employer?</label>
									<div class="custom-control custom-radio">
										<input type="radio" id="customRadio20" name="non_compete" value="Yes" class="custom-control-input custom-previous-employer">
										<label class="custom-control-label" for="customRadio20">Yes</label>
									</div>
									<div class="custom-control custom-radio">
										<input type="radio" id="customRadio21" name="non_compete" value="No" class="custom-control-input custom-previous-employer" checked>
										<label class="custom-control-label" for="customRadio21">No</label>
									</div>
									<div class="form-row sr-only" id="previous_employer_extra">
										<div class="form-group col-md-6">
											<label for="" class="main-label">If so, the agreement is with</label>
											<input name="agreement_with" type="text" class="form-control" id="agreement_with">
										</div>
										<div class="form-group col-md-6">
											<label for="" class="main-label">For the duration of</label>
											<input name="agreement_duration" type="text" class="form-control" id="agreement_duration">
										</div>
										<div class="form-group col-md-6">
											<label for="" class="main-label">Starting on</label>
											<input name="agreement_starting" type="text" class="form-control" id="agreement_starting">
										</div>
										<div class="form-group col-md-6">
											<label for="" class="main-label">And ending on</label>
											<input name="agreement_ending" type="text" class="form-control" id="agreement_ending">
										</div>
									</div>
								</div>
							</div>
							<!-- Step Three End -->

							<!-- Step Four Start -->
							<div class="tab step-four">
								<h2 class="form-step-title">Education</h2>
								<div class="form-group">
									<label for="" class="main-label">Graduated from (check all that apply)</label>
									<div class="custom-control custom-checkbox">
										<input type="checkbox" id="customCheckbox5" name="graduated_from[]" value="High School" class="custom-control-input">
										<label class="custom-control-label" for="customCheckbox5">High School</label>
									</div>
									<div class="custom-control custom-checkbox">
										<input type="checkbox" id="customCheckbox6" name="graduated_from[]" value="Technical School" class="custom-control-input">
										<label class="custom-control-label" for="customCheckbox6">Technical School</label>
									</div>
									<div class="custom-control custom-checkbox">
										<input type="checkbox" id="customCheckbox7" name="graduated_from[]" value="College / University" class="custom-control-input">
										<label class="custom-control-label" for="customCheckbox7">College / University</label>
									</div>
								</div>
								<div class="form-group">
									<label for="" class="main-label">What degrees/majors did you obtained or programs did you study?</label>
									<input type="text" name="degree_obtained" class="form-control">
								</div>
								<div class="form-group">
									<label for="" class="main-label">Other education or training</label>
									<input type="text" name="other_training" class="form-control">
								</div>
								<div class="form-group">
									<label for="" class="main-label">Military Experience</label>
									<div class="custom-control custom-radio">
										<input type="radio" id="customRadio22" name="military_experience" value="Yes" class="custom-control-input">
										<label class="custom-control-label" for="customRadio22">Yes</label>
									</div>
									<div class="custom-control custom-radio">
										<input type="radio" id="customRadio23" name="military_experience" value="No" class="custom-control-input" checked>
										<label class="custom-control-label" for="customRadio23">No</label>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-4">
										<label for="" class="main-label">Dates Served</label>
										<input type="text" name="dates_served" class="form-control">
									</div>
									<div class="form-group col-md-4">
										<label for="" class="main-label">Branch of Service</label>
										<input type="text" name="branch_of_service" class="form-control">
									</div>
									<div class="form-group col-md-4">
										<label for="" class="main-label">Rank at Discharge</label>
										<input type="text" name="rank_at_discharge" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="main-label">Do You Currently Hold a Valid Driver's License?</label>
									<div class="custom-control custom-radio">
										<input type="radio" id="customRadio24" name="driver_license" value="Yes" class="custom-control-input">
										<label class="custom-control-label" for="customRadio24">Yes</label>
									</div>
									<div class="custom-control custom-radio">
										<input type="radio" id="customRadio25" name="driver_license" value="No" class="custom-control-input" checked>
										<label class="custom-control-label" for="customRadio25">No</label>
									</div>
								</div>
								<div class="form-group">
									<label for="" class="main-label">Has your license ever been suspended or revoked?</label>
									<div class="custom-control custom-radio">
										<input type="radio" id="customRadio26" name="license_revoked" value="Yes" class="custom-control-input custom-license-suspend">
										<label class="custom-control-label" for="customRadio26">Yes</label>
									</div>
									<div class="custom-control custom-radio">
										<input type="radio" id="customRadio27" name="license_revoked" value="No" class="custom-control-input custom-license-suspend" checked>
										<label class="custom-control-label" for="customRadio27">No</label>
									</div>
									<div class="form-group sr-only" id="license_extra">
										<label for="" class="main-label">If yes please explain</label>
										<textarea name="license_revoked_explain" class="form-control" rows="4" id="license_suspend_details"></textarea>
									</div>
								</div>
							</div>
							<!-- Step Four End -->
							
							<!-- Step Five Start -->
							<div class="tab step-five">
								<h2 class="form-step-title">Past Employment History</h2>
								<p class="form-step-title-helper">(Start with your most recent employer)</p>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="" class="main-label">Employer #1</label>
										<input type="text" name="emplyer1" class="form-control">
									</div>
									<div class="form-group col-md-6">
										<label for="" class="main-label">Type of business</label>
										<input type="text" name="emplyer1_business" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="main-label">Phone</label>
									<input type="text" name="emplyer1_phone" class="form-control">
								</div>
								<div class="form-group">
									<label for="inputAddress" class="main-label">Address</label>
									<input type="text" name="emplyer1_street" class="form-control">
									<small class="form-text text-muted">Street Address</small>
								</div>
								<div class="form-group">
									<input type="text" name="emplyer1_address_line2" class="form-control">
									<small class="form-text text-muted">Address line 2</small>
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<input type="text" name="emplyer1_city" class="form-control">
										<small class="form-text text-muted">City</small>
									</div>
									<div class="form-group col-md-6">
										<input type="text" name="emplyer1_state" class="form-control">
										<small class="form-text text-muted">State / Province  / Region</small>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<input type="text" name="emplyer1_zip" class="form-control">
										<small class="form-text text-muted">Zip Code</small>
									</div>
									<div class="form-group col-md-6">
										<input type="text" name="emplyer1_country" class="form-control">
										<small class="form-text text-muted">Country</small>
									</div>
								</div>								
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="" class="main-label">Position held</label>
										<input type="text" name="emplyer1_position_held" class="form-control">
									</div>
									<div class="form-group col-md-6">
										<label for="" class="main-label">Suervisor name</label>
										<input type="text" name="emplyer1_suevisor_name" class="form-control">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="" class="main-label">Date started</label>
										<input type="text" name="emplyer1_date_started" class="form-control">
									</div>
									<div class="form-group col-md-6">
										<label for="" class="main-label">Date ended</label>
										<input type="text" name="emplyer1_date_ended" class="form-control">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="" class="main-label">Wage start</label>
										<input type="text" name="emplyer1_wage_start" class="form-control">
									</div>
									<div class="form-group col-md-6">
										<label for="" class="main-label">Wage end</label>
										<input type="text" name="emplyer1_wage_end" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="main-label">Reason for leaving</label>
									<input type="text" name="emplyer1_reason_leaving" class="form-control">
								</div>
								<div class="form-group">
									<label for="" class="main-label">May we contact?</label>
									<div class="custom-control custom-radio">
										<input type="radio" id="customRadio28" name="may_contact_1" value="Yes" class="custom-control-input">
										<label class="custom-control-label" for="customRadio28">Yes</label>
									</div>
									<div class="custom-control custom-radio">
										<input type="radio" id="customRadio29" name="may_contact_1" value="No" class="custom-control-input" checked>
										<label class="custom-control-label" for="customRadio29">No</label>
									</div>
								</div>
							</div>
							<!-- Step Five End -->
							
							<!-- Step Six Start -->
							<div class="tab step-six">
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="" class="main-label">Employer #2</label>
										<input type="text" name="emplyer2" class="form-control">
									</div>
									<div class="form-group col-md-6">
										<label for="" class="main-label">Type of business</label>
										<input type="text" name="emplyer2_business" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="main-label">Phone</label>
									<input type="text" name="emplyer2_phone" class="form-control">
								</div>
								<div class="form-group">
									<label for="inputAddress" class="main-label">Address</label>
									<input type="text" name="emplyer2_street" class="form-control">
									<small class="form-text text-muted">Street Address</small>
								</div>
								<div class="form-group">
									<input type="text" name="emplyer2_address_line2" class="form-control">
									<small class="form-text text-muted">Address line 2</small>
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<input type="text" name="emplyer2_city" class="form-control">
										<small class="form-text text-muted">City</small>
									</div>
									<div class="form-group col-md-6">
										<input type="text" name="emplyer2_state" class="form-control">
										<small class="form-text text-muted">State / Province  / Region</small>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<input type="text" name="emplyer2_zip" class="form-control">
										<small class="form-text text-muted">Zip Code</small>
									</div>
									<div class="form-group col-md-6">
										<input type="text" name="emplyer2_country" class="form-control">
										<small class="form-text text-muted">County</small>
									</div>
								</div>								
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="" class="main-label">Position held</label>
										<input type="text" name="emplyer2_position_held" class="form-control">
									</div>
									<div class="form-group col-md-6">
										<label for="" class="main-label">Suervisor name</label>
										<input type="text" name="emplyer2_suevisor_name" class="form-control">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="" class="main-label">Date started</label>
										<input type="text" name="emplyer2_date_started" class="form-control">
									</div>
									<div class="form-group col-md-6">
										<label for="" class="main-label">Date ended</label>
										<input type="text" name="emplyer2_date_ended" class="form-control">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="" class="main-label">Wage start</label>
										<input type="text" name="emplyer2_wage_start" class="form-control">
									</div>
									<div class="form-group col-md-6">
										<label for="" class="main-label">Wage end</label>
										<input type="text" name="emplyer2_wage_end" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="main-label">Reason for leaving</label>
									<input type="text" name="emplyer2_reason_leaving" class="form-control">
								</div>
								<div class="form-group">
									<label for="" class="main-label">May we contact?</label>
									<div class="custom-control custom-radio">
										<input type="radio" id="customRadio30" name="may_contact_2" value="Yes" class="custom-control-input">
										<label class="custom-control-label" for="customRadio30">Yes</label>
									</div>
									<div class="custom-control custom-radio">
										<input type="radio" id="customRadio31" name="may_contact_2" value="No" class="custom-control-input" checked>
										<label class="custom-control-label" for="customRadio31">No</label>
									</div>
								</div>
							</div>
							<!-- Step Six End -->

							<!-- Step Seven Start -->
							<div class="tab step-seven">
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="" class="main-label">Employer #3</label>
										<input type="text" name="emplyer3" class="form-control">
									</div>
									<div class="form-group col-md-6">
										<label for="" class="main-label">Type of business</label>
										<input type="text" name="emplyer3_business" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="main-label">Phone</label>
									<input type="text" name="emplyer3_phone" class="form-control">
								</div>
								<div class="form-group">
									<label for="inputAddress" class="main-label">Address</label>
									<input type="text" name="emplyer3_street" class="form-control">
									<small class="form-text text-muted">Street Address</small>
								</div>
								<div class="form-group">
									<input type="text" name="emplyer3_address_line2" class="form-control">
									<small class="form-text text-muted">Address line 2</small>
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<input type="text" name="emplyer3_city" class="form-control">
										<small class="form-text text-muted">City</small>
									</div>
									<div class="form-group col-md-6">
										<input type="text" name="emplyer3_state" class="form-control">
										<small class="form-text text-muted">State / Province  / Region</small>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<input type="text" name="emplyer3_zip" class="form-control">
										<small class="form-text text-muted">Zip Code</small>
									</div>
									<div class="form-group col-md-6">
										<input type="text" name="emplyer3_country" class="form-control">
										<small class="form-text text-muted">County</small>
									</div>
								</div>								
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="" class="main-label">Position held</label>
										<input type="text" name="emplyer3_position_held" class="form-control">
									</div>
									<div class="form-group col-md-6">
										<label for="" class="main-label">Suervisor name</label>
										<input type="text" name="emplyer3_suevisor_name" class="form-control">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="" class="main-label">Date started</label>
										<input type="text" name="emplyer3_date_started" class="form-control">
									</div>
									<div class="form-group col-md-6">
										<label for="" class="main-label">Date ended</label>
										<input type="text" name="emplyer3_date_ended" class="form-control">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="" class="main-label">Wage start</label>
										<input type="text" name="emplyer3_wage_start" class="form-control">
									</div>
									<div class="form-group col-md-6">
										<label for="" class="main-label">Wage end</label>
										<input type="text" name="emplyer3_wage_end" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="main-label">Reason for leaving</label>
									<input type="text" name="emplyer3_reason_leaving" class="form-control">
								</div>
								<div class="form-group">
									<label for="" class="main-label">May we contact?</label>
									<div class="custom-control custom-radio">
										<input type="radio" id="customRadio32" name="may_contact_3" value="Yes" class="custom-control-input">
										<label class="custom-control-label" for="customRadio32">Yes</label>
									</div>
									<div class="custom-control custom-radio">
										<input type="radio" id="customRadio33" name="may_contact_3" value="No" class="custom-control-input" checked>
										<label class="custom-control-label" for="customRadio33">No</label>
									</div>
								</div>
							</div>
							<!-- Step Seven End -->

							<!-- Step Eight Start -->
							<div class="tab step-eight">
								<div class="form-group">
									<label for="" class="main-label">From (check all that apply)</label>
									<div class="custom-control custom-checkbox">
										<input type="checkbox" id="customCheckbox8" name="agreement" value="Agreements" class="custom-control-input required" required>
										<label class="custom-control-label" for="customCheckbox8">I certify that the facts contained in this application are true and complete to the best of my knowledge. I understand that if I am employed, any false statements on this application may be grounds for dismissal. I further certify that I have completed this application myself and understand that any omission or falsification on this application by myself maybe grounds for discharge regardless of time elapsed before discovery of omission/falsification. I authorize investigation of all statements contained in this application. I also grant permission to contact all references listed above, and authorize them to release all information concerning my previous employment and any other pertinent information these references might have, personal or otherwise. I release all parties from all liability for any damage that may result from furnishing this information to you. I understand and agree that INFINITY PROTECTION. may obtain or have prepared a consumer/investigative consumer report concerning my prior employment, military record, education, credit worthiness, or credit standing, credit capacity, character, general reputation, personal characteristics, or criminal background. By signing below, I authorize INFINITY PROTECTION to obtain such a report. I understand and agree that I may be asked to submit to pre-employment tests (including a drug test) upon a conditional offer of employment. I understand and agree that, if hired, my employment is for no definite period and may be terminated at any time and without prior notice. I understand that nothing in this application constitutes an employment contract. If employed, I will abide by all INFINITY PROTECTION, rules and procedures</label>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="" class="main-label">Today's date<span>*</span></label>
										<input type="text" name="todays_date" class="form-control required" value="<?php echo date('d M Y');?>" required>
									</div>
									<div class="form-group col-md-6">
										<label for="" class="main-label">Type Your Full Legal Name<span>*</span></label>
										<input type="text" name="full_name" class="form-control required" required>
									</div>
								</div>
								<div class="form-group">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" id="customCheckbox9" name="form_fill" value="Form is filled by me" class="custom-control-input required" required>
										<label class="custom-control-label" for="customCheckbox9">I hereby certify that this is my legal name and all information above is true and this application was fully completed by me and I (personally) completed this application.</label>
									</div>
								</div>
							</div>
							<!-- Step Eight End -->

							<div class="text-right">
								<button type="button" id="prevBtn" class="btn my-btn my-btn-outline" onclick="nextPrev(-1)">Previous</button>
								<button type="button" id="nextBtn" class="btn my-btn" onclick="nextPrev(1)">Next</button>
							</div>

							<div class="text-center">
								<span class="step"></span>
								<span class="step"></span>
								<span class="step"></span>
								<span class="step"></span>
								<span class="step"></span>
								<span class="step"></span>
								<span class="step"></span>
								<span class="step"></span>
							</div>
						</form>
					</div>
				</div>

			</div><!-- //.row -->

		</div><!-- //.container -->
	</section><!-- //Section About End -->





	<!-- jQuery -->
	<script src="{{asset('frontend/js/jquery-3.5.1.min.js')}}"></script>

	<!-- Bootstrap Bundle JS -->
	<script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>

	<!-- Theme JS -->
	<script src="{{asset('frontend/js/theme.js')}}"></script>


	<!-- You can deleted it while working with Laravel -->
	<script src="assets/js/jquery-3.5.1.min.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/js/theme.js"></script>


	<script>
		var currentTab = 0; // Current tab is set to be the first tab (0)
		showTab(currentTab); // Display the current tab
		
		function showTab(n) {
		  // This function will display the specified tab of the form...
		  var x = document.getElementsByClassName("tab");
		  x[n].style.display = "block";
		  //... and fix the Previous/Next buttons:
		  if (n == 0) {
			document.getElementById("prevBtn").style.display = "none";
		  } else {
			document.getElementById("prevBtn").style.display = "inline";
		  }
		  if (n == (x.length - 1)) {
			document.getElementById("nextBtn").innerHTML = "Send Application";
			document.getElementById("nextBtn").setAttribute("disabled", "1");
		  } else {
			document.getElementById("nextBtn").innerHTML = "Next";
			document.getElementById("nextBtn").removeAttribute("disabled");
		  }
		  //... and run a function that will display the correct step indicator:
		  fixStepIndicator(n)
		}
		
		function nextPrev(n) {
		  // This function will figure out which tab to display
		  var x = document.getElementsByClassName("tab");
		  // Exit the function if any field in the current tab is invalid:
		  if (n == 1 && !validateForm()) return false;
		  // Hide the current tab:
		  x[currentTab].style.display = "none";
		  // Increase or decrease the current tab by 1:
		  currentTab = currentTab + n;
		  // if you have reached the end of the form...
		  if (currentTab >= x.length) {
			// ... the form gets submitted:
			document.getElementById("regForm").submit();
			return false;
		  }
		  // Otherwise, display the correct tab:
		  showTab(currentTab);
		}
		
		function validateForm() {
		  // This function deals with validation of the form fields
		  var x, y, i, valid = true;
		  x = document.getElementsByClassName("tab");
		  y = x[currentTab].getElementsByClassName("required");
		  // A loop that checks every input field in the current tab:
		  for (i = 0; i < y.length; i++) {
			// If a field is empty...
			if (y[i].value == "") {
			  // add an "invalid" class to the field:
			  y[i].className += " invalid";
			  // and set the current valid status to false
			  valid = false;
			}
		  }
		  // If the valid status is true, mark the step as finished and valid:
		  if (valid) {
			document.getElementsByClassName("step")[currentTab].className += " finish";
		  }
		  return valid; // return the valid status
		}
		
		function fixStepIndicator(n) {
		  // This function removes the "active" class of all steps...
		  var i, x = document.getElementsByClassName("step");
		  for (i = 0; i < x.length; i++) {
			x[i].className = x[i].className.replace(" active", "");
		  }
		  //... and adds the "active" class on the current step:
		  x[n].className += " active";
		}
	</script>

	
	<script>
	$(document).ready(function(){
	  $('.required').blur(function()
		{
		    if( $(this).val().length === 0 ) {
		        $(this).addClass('invalid');
		    }else{
		    	 $(this).removeClass('invalid');
		    }
		});
		
		
		// If Yes then do something
		$("input[type='radio'].armed-custom-input").click(function() {
			if($(this).is(':checked')) {
				if ($(this).val() == "Yes") {
					$("#armed_license_no").attr("required", "1");
					$("#armed_license_expire_date").attr("required", "1");
					$("#armed_extra").removeClass("sr-only");
					$("#armed_license_no").addClass("required");
					$("#armed_license_expire_date").addClass("required");
				} else {
					$("#armed_license_no").removeAttr("required");
					$("#armed_license_expire_date").removeAttr("required");
					$("#armed_extra").addClass("sr-only");
					$("#armed_license_no").removeClass("required");
					$("#armed_license_expire_date").removeClass("required");
				}
			}
		});

		// If Yes then do something
		$("input[type='radio'].unarmed-custom-input").click(function() {
			if($(this).is(':checked')) {
				if ($(this).val() == "Yes") {
					$("#unarmed_license_no").attr("required", "1");
					$("#unarmed_license_expire_date").attr("required", "1");
					$("#unarmed_extra").removeClass("sr-only");
					$("#unarmed_license_no").addClass("required");
					$("#unarmed_license_expire_date").addClass("required");
				} else {
					$("#unarmed_license_no").removeAttr("required");
					$("#unarmed_license_expire_date").removeAttr("required");
					$("#unarmed_extra").addClass("sr-only");
					$("#unarmed_license_no").removeClass("required");
					$("#unarmed_license_expire_date").removeClass("required");
				}
			}
		});

		// If Yes then do something
		$("input[type='radio'].custom-worked-school").click(function() {
			if($(this).is(':checked')) {
				if ($(this).val() == "Yes") {
					$("#worked_another_school").attr("required", "1");
					$("#worked_school_extra").removeClass("sr-only");
					$("#worked_another_school").addClass("required");
				} else {
					$("#worked_another_school").removeAttr("required");
					$("#worked_school_extra").addClass("sr-only");
					$("#worked_another_school").removeClass("required");
				}
			}
		});

		// If Yes then do something
		$("input[type='radio'].custom-crime-input").click(function() {
			if($(this).is(':checked')) {
				if ($(this).val() == "Yes") {
					$("#crime_details").attr("required", "1");
					$("#crime_extra").removeClass("sr-only");
					$("#crime_details").addClass("required");
				} else {
					$("#crime_details").removeAttr("required");
					$("#crime_extra").addClass("sr-only");
					$("#crime_details").removeClass("required");
				}
			}
		});

		// If Yes then do something
		$("input[type='radio'].custom-previous-employer").click(function() {
			if($(this).is(':checked')) {
				if ($(this).val() == "Yes") {
					$("#agreement_with").attr("required", "1");
					$("#agreement_duration").attr("required", "1");
					$("#agreement_starting").attr("required", "1");
					$("#agreement_ending").attr("required", "1");
					$("#previous_employer_extra").removeClass("sr-only");
					$("#agreement_with").addClass("required");
					$("#agreement_duration").addClass("required");
					$("#agreement_starting").addClass("required");
					$("#agreement_ending").addClass("required");
				} else {
					$("#agreement_with").removeAttr("required", "1");
					$("#agreement_duration").removeAttr("required", "1");
					$("#agreement_starting").removeAttr("required", "1");
					$("#agreement_ending").removeAttr("required", "1");
					$("#previous_employer_extra").addClass("sr-only");
					$("#agreement_with").removeClass("required");
					$("#agreement_duration").removeClass("required");
					$("#agreement_starting").removeClass("required");
					$("#agreement_ending").removeClass("required");
				}
			}
		});

		// If Yes then do something
		$("input[type='radio'].custom-license-suspend").click(function() {
			if($(this).is(':checked')) {
				if ($(this).val() == "Yes") {
					$("#license_suspend_details").attr("required", "1");
					$("#license_extra").removeClass("sr-only");
					$("#license_suspend_details").addClass("required");
				} else {
					$("#license_suspend_details").removeAttr("required");
					$("#license_extra").addClass("sr-only");
					$("#license_suspend_details").removeClass("required");
				}
			}
		});

		// required checkbox1
		$(document).on('change', '#customCheckbox8', function() {
        	if(this.checked && $('#customCheckbox9').is(':checked')) {
	          $("#nextBtn").removeAttr("disabled");      
	        } else {
	            $("#nextBtn").attr("disabled","1");  
	        }
	    });

		 // required checkbox2
		 $(document).on('change', '#customCheckbox9', function() {
        	if(this.checked && $('#customCheckbox8').is(':checked')) {
	        	$("#nextBtn").removeAttr("disabled"); 
	        } else {
	            $("#nextBtn").attr("disabled","1");  
	        }
	    });

	});
	</script>
	
</body>
</html>