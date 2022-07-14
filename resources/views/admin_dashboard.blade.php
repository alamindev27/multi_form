@extends('head')
@section('maincontent')

<section role="main" class="content-body">
	<header class="page-header">
		<h2>Admin Dashboard</h2>
	
		<div class="right-wrapper text-right">
			<ol class="breadcrumbs">
				<li>
					<a href="{{route('dashboard')}}">
						<i class="fas fa-home"></i>
					</a>
				</li>
				<li><span>Pages</span></li>
				<li><span>Admin Dashboard</span></li>
			</ol>
	
			<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
		</div>
	</header>

	<!-- start: page -->
	<div class="row">
      <div class="col-md-12">
         <section class="card">
            <header class="card-header bg-theme">
               <div class="card-actions">
                  <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                  <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
               </div>
   
               <h2 class="card-title text-center color-theme">Application List</h2>
            </header>
            <div class="card-body">
               <div id="datatable-default_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                  <div class="table-responsive">
                     <table class="table table-bordered table-striped" id="datatable-default">
                        <thead align="center">
                            <tr>
                                
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>City</th>
                                <th>State</th>
                                <th>Country</th>
                                <th>Armed</th>
                                <th>Unarmd</th>
                                <th>Date</th>                         
                                <th>Action</th>
                                
                            </tr>
                        </thead>
                        <tbody align="center">
                            @foreach($applications as $key => $application)
                                <tr>
                                    <td>{{$application->fname}} {{$application->lname}}</td>
                                    <td>{{$application->email}}</td>
                                    <td>{{$application->phone}}</td>
                                    <td>{{$application->city}}</td>
                                    <td>{{$application->state}}</td>
                                    <td>{{$application->country}}</td>
                                    <td>{{$application->armed_license}}</td>
                                    <td>{{$application->unarmed_license}}</td>
                                    <td>{{$application->todays_date}}</td>
                                    <td  class="center">
                                      <a type="button" data-toggle="modal" data-target=".newcat{{$key}}" class="text-success"><i class="fa fa-file"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        
                            
                        </tbody>
                    </table>
                  </div>
               </div>
            </div>
         </section>
      </div>
  </div>

	<!-- end: page -->
</section>

@foreach($applications as $key => $application)
    
    <!-- Modal -->
    <div class="modal fade newcat{{$key}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
             <div class="modal-header">
                <h2 class="modal-title text-center" id="exampleModalLongTitle">Job Application Details</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
             </div>

             <div class="modal-body">

                <table class="table table-striped">
                    
                  <tbody>
                    <tr>
                      <th scope="col">Name</th>
                      <td>{{$application->fname}} {{$application->lname}}</td>
                    </tr>
                    <tr>
                      <th>Address</th>
                      <td>{{$application->address}}</td>
                    </tr>
                     <tr>
                      <th>Address line 2</th>
                      <td>{{$application->address_line2}}</td>
                    </tr>
                     <tr>
                      <th>City</th>
                      <td>{{$application->city}}</td>
                    </tr>
                     <tr>
                      <th>State/Province/Region</th>
                      <td>{{$application->state}}</td>
                    </tr>
                     <tr>
                      <th>Zip Code</th>
                      <td>{{$application->zip}}</td>
                    </tr>
                     <tr>
                      <th>Country</th>
                      <td>{{$application->country}}</td>
                    </tr>
                     <tr>
                      <th>Phone </th>
                      <td>{{$application->phone}}</td>
                    </tr>
                     <tr>
                      <th>Alternative Phone</th>
                      <td>{{$application->alternet_phone}}</td>
                    </tr>
                     <tr>
                      <th>Email</th>
                      <td>{{$application->email}}</td>
                    </tr>
                     <tr>
                      <th>How did you find us?</th>
                      <td>{{$application->found}}</td>
                    </tr>
                     <tr>
                      <th>Do you currently have a State issued Security License?</th>
                      <td>{{$application->current_security_license}}</td>
                    </tr>
                     <tr>
                      <th>Do you have armed License?</th>
                      <td>{{$application->armed_license}}</td>
                    </tr>
                     <tr>
                      <th>If yes, license #</th>
                      <td>{{$application->armlicense}}</td>
                    </tr>
                     <tr>
                      <th>Expire date</th>
                      <td>{{$application->armexp_date}}</td>
                    </tr>
                     <tr>
                      <th>Do you have unarmed License?</th>
                      <td>{{$application->unarmed_license}}</td>
                    </tr>
                     <tr>
                      <th>If yes, license #</th>
                      <td>{{$application->unarmlicense}}</td>
                    </tr>
                     <tr>
                      <th>Expire date</th>
                      <td>{{$application->unarmexp_date}}</td>
                    </tr>
                     <tr>
                      <th>Are you 18 years old or older?</th>
                      <td>{{$application->years_18}}</td>
                    </tr>
                     <tr>
                      <th>Are you legally eligible to work in the U.S.?</th>
                      <td>{{$application->eligible_usa}}</td>
                    </tr>
                     <tr>
                      <th>Have you ever worked or attended school under another name?</th>
                      <td>{{$application->worked_school}}</td>
                    </tr>
                     <tr>
                      <th>If so, under what name?</th>
                      <td> </td>
                    </tr>
                     <tr>
                      <th>Have you ever worked for this company?</th>
                      <td>{{$application->worked_company}}</td>
                    </tr>
                     <tr>
                      <th>Have you ever been convicted of a crime?</th>
                      <td>{{$application->crime}}</td>
                    </tr>
                     <tr>
                      <th>If yes, give details, including date(s)</th>
                      <td>{{$application->crime_details}}</td>
                    </tr>
                     <tr>
                      <th>Position Desired</th>
                      <td>{{$application->desired_position2}}</td>
                    </tr>
                     <tr>
                      <th>Date you can start</th>
                      <td>{{$application->date_start}}</td>
                    </tr>
                     <tr>
                      <th>Are you willing to work </th>
                      <td> </td>
                    </tr> 
                    <tr>
                      <th>Please identify any days and/or hours you are not available to work</th>
                      <td>{{$application->not_available_to_work}}</td>
                    </tr>
                    <tr>
                      <th>How did you learn about INFINITY PROTECTION Security (please be detailed)?</th>
                      <td>{{$application->learncompnay}}</td>
                    </tr>
                    <tr>
                      <th>Are you currently under a non-compete agreement with a previous employer?</th>
                      <td>{{$application->non_compete}}</td>
                    </tr>
                    <tr>
                      <th>If so, the agreement is with</th>
                      <td>{{$application->agreement_with}}</td>
                    </tr>
                    <tr>
                      <th>For the duration of</th>
                      <td>{{$application->agreement_duration}}</td>
                    </tr>
                    <tr>
                      <th>Starting on</th>
                      <td>{{$application->agreement_starting}}</td>
                    </tr>
                    <tr>
                      <th>And ending on</th>
                      <td>{{$application->agreement_ending}}</td>
                    </tr>
                    <tr>
                      <th>Graduated from</th>
                      <td></td>
                    </tr>
                    <tr>
                      <th>What degrees/majors did you obtained or programs did you study?</th>
                      <td>{{$application->degree_obtained}}</td>
                    </tr>
                    <tr>
                      <th>Other education or training</th>
                      <td>{{$application->other_training}}</td>
                    </tr>
                    <tr>
                      <th>Military Experience</th>
                      <td>{{$application->military_experience}}</td>
                    </tr>
                    <tr>
                      <th>Dates Served</th>
                      <td>{{$application->dates_served}}</td>
                    </tr>
                    <tr>
                      <th>Branch of Service</th>
                      <td>{{$application->branch_of_service}}</td>
                    </tr>
                    <tr>
                      <th>Rank at Discharge</th>
                      <td>{{$application->rank_at_discharge}}</td>
                    </tr>
                    <tr>
                      <th>Do You Currently Hold a Valid Driver's License?</th>
                      <td>{{$application->driver_license}}</td>
                    </tr>
                    <tr>
                      <th>Has your license ever been suspended or revoked?</th>
                      <td>{{$application->license_revoked}}</td>
                    </tr>
                    <tr>
                      <th>If yes please explain</th>
                      <td>{{$application->license_revoked_explain}}</td>
                    </tr>

                    <tr>
                      <th>Employer #1</th>
                      <td>{{$application->emplyer1}}</td>
                    </tr>
                    <tr>
                      <th>Type of business</th>
                      <td>{{$application->emplyer1_business}}</td>
                    </tr>
                    <tr>
                      <th>Phone</th>
                      <td>{{$application->emplyer1_phone}}</td>
                    </tr>
                    <tr>
                      <th>Street Address</th>
                      <td>{{$application->emplyer1_street}}</td>
                    </tr>
                    <tr>
                      <th>Address line 2</th>
                      <td>{{$application->emplyer1_address_line2}}</td>
                    </tr>
                    <tr>
                      <th>City</th>
                      <td>{{$application->emplyer1_city}}</td>
                    </tr>
                    <tr>
                      <th>State / Province / Region</th>
                      <td>{{$application->emplyer1_state}}</td>
                    </tr>
                    <tr>
                      <th>Zip Code</th>
                      <td>{{$application->emplyer1_zip}}</td>
                    </tr>
                     <tr>
                      <th>Country</th>
                      <td>{{$application->emplyer1_country}}</td>
                    </tr>
                    <tr>
                      <th>Position held</th>
                      <td>{{$application->emplyer1_position_held}}</td>
                    </tr>
                    <tr>
                      <th>Suervisor name</th>
                      <td>{{$application->emplyer1_suevisor_name}}</td>
                    </tr>
                    <tr>
                      <th>Date started</th>
                      <td>{{$application->emplyer1_date_started}}</td>
                    </tr>
                    <tr>
                      <th>Date ended</th>
                      <td>{{$application->emplyer1_date_ended}}</td>
                    </tr>
                    <tr>
                      <th>Wage start</th>
                      <td>{{$application->emplyer1_wage_start}}</td>
                    </tr>
                    <tr>
                      <th>Wage end</th>
                      <td>{{$application->emplyer1_wage_end}}</td>
                    </tr>
                    <tr>
                      <th>Reason for leaving</th>
                      <td>{{$application->emplyer1_reason_leaving}}</td>
                    </tr>
                    <tr>
                      <th>May we contact?</th>
                      <td>{{$application->may_contact_1}}</td>
                    </tr>


                    <tr>
                      <th>Employer #1</th>
                      <td>{{$application->emplyer2}}</td>
                    </tr>
                    <tr>
                      <th>Type of business</th>
                      <td>{{$application->emplyer2_business}}</td>
                    </tr>
                    <tr>
                      <th>Phone</th>
                      <td>{{$application->emplyer2_phone}}</td>
                    </tr>
                    <tr>
                      <th>Street Address</th>
                      <td>{{$application->emplyer2_street}}</td>
                    </tr>
                    <tr>
                      <th>Address line 2</th>
                      <td>{{$application->emplyer2_address_line2}}</td>
                    </tr>
                    <tr>
                      <th>City</th>
                      <td>{{$application->emplyer2_city}}</td>
                    </tr>
                    <tr>
                      <th>State / Province / Region</th>
                      <td>{{$application->emplyer2_state}}</td>
                    </tr>
                    <tr>
                      <th>Zip Code</th>
                      <td>{{$application->emplyer2_zip}}</td>
                    </tr>
                     <tr>
                      <th>Country</th>
                      <td>{{$application->emplyer2_country}}</td>
                    </tr>
                    <tr>
                      <th>Position held</th>
                      <td>{{$application->emplyer2_position_held}}</td>
                    </tr>
                    <tr>
                      <th>Suervisor name</th>
                      <td>{{$application->emplyer2_suevisor_name}}</td>
                    </tr>
                    <tr>
                      <th>Date started</th>
                      <td>{{$application->emplyer2_date_started}}</td>
                    </tr>
                    <tr>
                      <th>Date ended</th>
                      <td>{{$application->emplyer2_date_ended}}</td>
                    </tr>
                    <tr>
                      <th>Wage start</th>
                      <td>{{$application->emplyer2_wage_start}}</td>
                    </tr>
                    <tr>
                      <th>Wage end</th>
                      <td>{{$application->emplyer2_wage_end}}</td>
                    </tr>
                    <tr>
                      <th>Reason for leaving</th>
                      <td>{{$application->emplyer2_reason_leaving}}</td>
                    </tr>
                    <tr>
                      <th>May we contact?</th>
                      <td>{{$application->may_contact_1}}</td>
                    </tr>


                    <tr>
                      <th>Employer #3</th>
                      <td>{{$application->emplyer3}}</td>
                    </tr>
                    <tr>
                      <th>Type of business</th>
                      <td>{{$application->emplyer3_business}}</td>
                    </tr>
                    <tr>
                      <th>Phone</th>
                      <td>{{$application->emplyer3_phone}}</td>
                    </tr>
                    <tr>
                      <th>Street Address</th>
                      <td>{{$application->emplyer3_street}}</td>
                    </tr>
                    <tr>
                      <th>Address line 2</th>
                      <td>{{$application->emplyer3_address_line2}}</td>
                    </tr>
                    <tr>
                      <th>City</th>
                      <td>{{$application->emplyer3_city}}</td>
                    </tr>
                    <tr>
                      <th>State / Province / Region</th>
                      <td>{{$application->emplyer3_state}}</td>
                    </tr>
                    <tr>
                      <th>Zip Code</th>
                      <td>{{$application->emplyer3_zip}}</td>
                    </tr>
                     <tr>
                      <th>Country</th>
                      <td>{{$application->emplyer3_country}}</td>
                    </tr>
                    <tr>
                      <th>Position held</th>
                      <td>{{$application->emplyer3_position_held}}</td>
                    </tr>
                    <tr>
                      <th>Suervisor name</th>
                      <td>{{$application->emplyer3_suevisor_name}}</td>
                    </tr>
                    <tr>
                      <th>Date started</th>
                      <td>{{$application->emplyer3_date_started}}</td>
                    </tr>
                    <tr>
                      <th>Date ended</th>
                      <td>{{$application->emplyer3_date_ended}}</td>
                    </tr>
                    <tr>
                      <th>Wage start</th>
                      <td>{{$application->emplyer3_wage_start}}</td>
                    </tr>
                    <tr>
                      <th>Wage end</th>
                      <td>{{$application->emplyer3_wage_end}}</td>
                    </tr>
                    <tr>
                      <th>Reason for leaving</th>
                      <td>{{$application->emplyer3_reason_leaving}}</td>
                    </tr>
                    <tr>
                      <th>May we contact?</th>
                      <td>{{$application->may_contact_3}}</td>
                    </tr>
                    <tr>
                      <th>Today's date</th>
                      <td>{{$application->todays_date}}</td>
                    </tr>
                    
                  </tbody>
                </table>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
        </div>
      </div>
    </div>
  <!-- modal -->
    
@endforeach


@endsection