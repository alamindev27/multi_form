<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use DB;
use DateTime;
use Mail;
use App\Http\Controllers\Controller;

class DashboardController extends Controller {


   	// dashboard page protection
	public function dashboard(Request $request){
		
		if ($request->session()->has('user_email')) {
			$email = Session::get('user_email');
			$user_id = Session::get('user_id');
			$user_details = DB::table('admins')->where('email',$email)->first();
		   	if($user_details->role=="admin"){
		   		$applications=DB::select('SELECT * FROM (applications)');
		   		return view('admin_dashboard', compact(['user_details','applications']));
		   	}else{
		   		return view('dashboard', compact(['user_details','user_id']));
		   	}
		}else{
			Session::flash('error','You are not loged in');
			return redirect()->route('login_default');
		}
	}


	
	 	// save application
	public function save_application(Request $request){
		
		if ($request->isMethod('post') && !empty($request->input('fname'))) {

			if(!empty($request->input('fname'))){
			  $fname=$request->input('fname');
			}else{
			  $fname='';
			}

			if(!empty($request->input('lname'))){
			  $lname=$request->input('lname');
			}else{
			  $lname='';
			}

			if(!empty($request->input('address'))){
			  $address=$request->input('address');
			}else{
			  $address='';
			}

			if(!empty($request->input('address_line2'))){
			  $address_line2=$request->input('address_line2');
			}else{
			  $address_line2='';
			}

			if(!empty($request->input('city'))){
			  $city=$request->input('city');
			}else{
			  $city='';
			}

			if(!empty($request->input('state'))){
			  $state=$request->input('state');
			}else{
			  $state='';
			}

			if(!empty($request->input('zip'))){
			  $zip=$request->input('zip');
			}else{
			  $zip='';
			}

			if(!empty($request->input('country'))){
			  $country=$request->input('country');
			}else{
			  $country='';
			}

			if(!empty($request->input('phone'))){
			  $phone=$request->input('phone');
			}else{
			  $phone='';
			}

			if(!empty($request->input('alternet_phone'))){
			  $alternet_phone=$request->input('alternet_phone');
			}else{
			  $alternet_phone='';
			}

			if(!empty($request->input('email'))){
			  $email=$request->input('email');
			}else{
			  $email='';
			}

			if(!empty($request->input('found'))){
			  $found=$request->input('found');
			}else{
			  $found='';
			}

			if(!empty($request->input('current_security_license'))){
			  $current_security_license=$request->input('current_security_license');
			}else{
			  $current_security_license='';
			}

			if(!empty($request->input('armed_license'))){
			  $armed_license=$request->input('armed_license');
			}else{
			  $armed_license='';
			}

			if(!empty($request->input('armlicense'))){
			  $armlicense=$request->input('armlicense');
			}else{
			  $armlicense='';
			}

			if(!empty($request->input('armexp_date'))){
			  $armexp_date=$request->input('armexp_date');
			}else{
			  $armexp_date='';
			}

			if(!empty($request->input('unarmed_license'))){
			  $unarmed_license=$request->input('unarmed_license');
			}else{
			  $unarmed_license='';
			}

			if(!empty($request->input('unarmlicense'))){
			  $unarmlicense=$request->input('unarmlicense');
			}else{
			  $unarmlicense='';
			}

			if(!empty($request->input('unarmexp_date'))){
			  $unarmexp_date=$request->input('unarmexp_date');
			}else{
			  $unarmexp_date='';
			}

			if(!empty($request->input('years_18'))){
			  $years_18=$request->input('years_18');
			}else{
			  $years_18='';
			}

			if(!empty($request->input('eligible_usa'))){
			  $eligible_usa=$request->input('eligible_usa');
			}else{
			  $eligible_usa='';
			}

			if(!empty($request->input('worked_school'))){
			  $worked_school=$request->input('worked_school');
			}else{
			  $worked_school='';
			}

			if(!empty($request->input('worked_company'))){
			  $worked_company=$request->input('worked_company');
			}else{
			  $worked_company='';
			}

			if(!empty($request->input('crime'))){
			  $crime=$request->input('crime');
			}else{
			  $crime='';
			}

			if(!empty($request->input('crime_details'))){
			  $crime_details=$request->input('crime_details');
			}else{
			  $crime_details='';
			}

			if(!empty($request->input('desired_position2'))){
			  $desired_position2=$request->input('desired_position2');
			}else{
			  $desired_position2='';
			}

			if(!empty($request->input('date_start'))){
			  $date_start=$request->input('date_start');
			}else{
			  $date_start='';
			}

			

			if(!empty($request->input('not_available_to_work'))){
			  $not_available_to_work=$request->input('not_available_to_work');
			}else{
			  $not_available_to_work='';
			}

			if(!empty($request->input('learncompnay'))){
			  $learncompnay=$request->input('learncompnay');
			}else{
			  $learncompnay='';
			}

			if(!empty($request->input('non_compete'))){
			  $non_compete=$request->input('non_compete');
			}else{
			  $non_compete='';
			}

			if(!empty($request->input('agreement_with'))){
			  $agreement_with=$request->input('agreement_with');
			}else{
			  $agreement_with='';
			}

			if(!empty($request->input('agreement_duration'))){
			  $agreement_duration=$request->input('agreement_duration');
			}else{
			  $agreement_duration='';
			}

			if(!empty($request->input('agreement_starting'))){
			  $agreement_starting=$request->input('agreement_starting');
			}else{
			  $agreement_starting='';
			}

			if(!empty($request->input('agreement_ending'))){
			  $agreement_ending=$request->input('agreement_ending');
			}else{
			  $agreement_ending='';
			}

			if(!empty($request->input('degree_obtained'))){
			  $degree_obtained=$request->input('degree_obtained');
			}else{
			  $degree_obtained='';
			}

			if(!empty($request->input('other_training'))){
			  $other_training=$request->input('other_training');
			}else{
			  $other_training='';
			}

			if(!empty($request->input('military_experience'))){
			  $military_experience=$request->input('military_experience');
			}else{
			  $military_experience='';
			}

			if(!empty($request->input('dates_served'))){
			  $dates_served=$request->input('dates_served');
			}else{
			  $dates_served='';
			}

			if(!empty($request->input('branch_of_service'))){
			  $branch_of_service=$request->input('branch_of_service');
			}else{
			  $branch_of_service='';
			}

			if(!empty($request->input('rank_at_discharge'))){
			  $rank_at_discharge=$request->input('rank_at_discharge');
			}else{
			  $rank_at_discharge='';
			}

			if(!empty($request->input('driver_license'))){
			  $driver_license=$request->input('driver_license');
			}else{
			  $driver_license='';
			}

			if(!empty($request->input('license_revoked'))){
			  $license_revoked=$request->input('license_revoked');
			}else{
			  $license_revoked='';
			}

			if(!empty($request->input('license_revoked_explain'))){
			  $license_revoked_explain=$request->input('license_revoked_explain');
			}else{
			  $license_revoked_explain='';
			}

			if(!empty($request->input('emplyer1'))){
			  $emplyer1=$request->input('emplyer1');
			}else{
			  $emplyer1='';
			}

			if(!empty($request->input('emplyer1_business'))){
			  $emplyer1_business=$request->input('emplyer1_business');
			}else{
			  $emplyer1_business='';
			}

			if(!empty($request->input('emplyer1_phone'))){
			  $emplyer1_phone=$request->input('emplyer1_phone');
			}else{
			  $emplyer1_phone='';
			}

			if(!empty($request->input('emplyer1_street'))){
			  $emplyer1_street=$request->input('emplyer1_street');
			}else{
			  $emplyer1_street='';
			}

			if(!empty($request->input('emplyer1_address_line2'))){
			  $emplyer1_address_line2=$request->input('emplyer1_address_line2');
			}else{
			  $emplyer1_address_line2='';
			}

			if(!empty($request->input('emplyer1_city'))){
			  $emplyer1_city=$request->input('emplyer1_city');
			}else{
			  $emplyer1_city='';
			}

			if(!empty($request->input('emplyer1_state'))){
			  $emplyer1_state=$request->input('emplyer1_state');
			}else{
			  $emplyer1_state='';
			}

			if(!empty($request->input('emplyer1_zip'))){
			  $emplyer1_zip=$request->input('emplyer1_zip');
			}else{
			  $emplyer1_zip='';
			}

			if(!empty($request->input('emplyer1_country'))){
			  $emplyer1_country=$request->input('emplyer1_country');
			}else{
			  $emplyer1_country='';
			}

			if(!empty($request->input('emplyer1_position_held'))){
			  $emplyer1_position_held=$request->input('emplyer1_position_held');
			}else{
			  $emplyer1_position_held='';
			}

			if(!empty($request->input('emplyer1_suevisor_name'))){
			  $emplyer1_suevisor_name=$request->input('emplyer1_suevisor_name');
			}else{
			  $emplyer1_suevisor_name='';
			}

			if(!empty($request->input('emplyer1_date_started'))){
			  $emplyer1_date_started=$request->input('emplyer1_date_started');
			}else{
			  $emplyer1_date_started='';
			}

			if(!empty($request->input('emplyer1_date_ended'))){
			  $emplyer1_date_ended=$request->input('emplyer1_date_ended');
			}else{
			  $emplyer1_date_ended='';
			}

			if(!empty($request->input('emplyer1_wage_start'))){
			  $emplyer1_wage_start=$request->input('emplyer1_wage_start');
			}else{
			  $emplyer1_wage_start='';
			}

			if(!empty($request->input('emplyer1_wage_end'))){
			  $emplyer1_wage_end=$request->input('emplyer1_wage_end');
			}else{
			  $emplyer1_wage_end='';
			}

			if(!empty($request->input('emplyer1_reason_leaving'))){
			  $emplyer1_reason_leaving=$request->input('emplyer1_reason_leaving');
			}else{
			  $emplyer1_reason_leaving='';
			}

			if(!empty($request->input('may_contact_1'))){
			  $may_contact_1=$request->input('may_contact_1');
			}else{
			  $may_contact_1='';
			}

			if(!empty($request->input('emplyer2'))){
			  $emplyer2=$request->input('emplyer2');
			}else{
			  $emplyer2='';
			}

			if(!empty($request->input('emplyer2_business'))){
			  $emplyer2_business=$request->input('emplyer2_business');
			}else{
			  $emplyer2_business='';
			}

			if(!empty($request->input('emplyer2_phone'))){
			  $emplyer2_phone=$request->input('emplyer2_phone');
			}else{
			  $emplyer2_phone='';
			}

			if(!empty($request->input('emplyer2_street'))){
			  $emplyer2_street=$request->input('emplyer2_street');
			}else{
			  $emplyer2_street='';
			}

			if(!empty($request->input('emplyer2_address_line2'))){
			  $emplyer2_address_line2=$request->input('emplyer2_address_line2');
			}else{
			  $emplyer2_address_line2='';
			}

			if(!empty($request->input('emplyer2_city'))){
			  $emplyer2_city=$request->input('emplyer2_city');
			}else{
			  $emplyer2_city='';
			}

			if(!empty($request->input('emplyer2_state'))){
			  $emplyer2_state=$request->input('emplyer2_state');
			}else{
			  $emplyer2_state='';
			}

			if(!empty($request->input('emplyer2_zip'))){
			  $emplyer2_zip=$request->input('emplyer2_zip');
			}else{
			  $emplyer2_zip='';
			}

			if(!empty($request->input('emplyer2_country'))){
			  $emplyer2_country=$request->input('emplyer2_country');
			}else{
			  $emplyer2_country='';
			}

			if(!empty($request->input('emplyer2_position_held'))){
			  $emplyer2_position_held=$request->input('emplyer2_position_held');
			}else{
			  $emplyer2_position_held='';
			}

			if(!empty($request->input('emplyer2_suevisor_name'))){
			  $emplyer2_suevisor_name=$request->input('emplyer2_suevisor_name');
			}else{
			  $emplyer2_suevisor_name='';
			}

			if(!empty($request->input('emplyer2_date_started'))){
			  $emplyer2_date_started=$request->input('emplyer2_date_started');
			}else{
			  $emplyer2_date_started='';
			}

			if(!empty($request->input('emplyer2_date_ended'))){
			  $emplyer2_date_ended=$request->input('emplyer2_date_ended');
			}else{
			  $emplyer2_date_ended='';
			}

			if(!empty($request->input('emplyer2_wage_start'))){
			  $emplyer2_wage_start=$request->input('emplyer2_wage_start');
			}else{
			  $emplyer2_wage_start='';
			}

			if(!empty($request->input('emplyer2_wage_end'))){
			  $emplyer2_wage_end=$request->input('emplyer2_wage_end');
			}else{
			  $emplyer2_wage_end='';
			}

			if(!empty($request->input('emplyer2_reason_leaving'))){
			  $emplyer2_reason_leaving=$request->input('emplyer2_reason_leaving');
			}else{
			  $emplyer2_reason_leaving='';
			}

			if(!empty($request->input('may_contact_2'))){
			  $may_contact_2=$request->input('may_contact_2');
			}else{
			  $may_contact_2='';
			}

			if(!empty($request->input('emplyer3'))){
			  $emplyer3=$request->input('emplyer3');
			}else{
			  $emplyer3='';
			}

			if(!empty($request->input('emplyer3_business'))){
			  $emplyer3_business=$request->input('emplyer3_business');
			}else{
			  $emplyer3_business='';
			}

			if(!empty($request->input('emplyer3_phone'))){
			  $emplyer3_phone=$request->input('emplyer3_phone');
			}else{
			  $emplyer3_phone='';
			}

			if(!empty($request->input('emplyer3_street'))){
			  $emplyer3_street=$request->input('emplyer3_street');
			}else{
			  $emplyer3_street='';
			}

			if(!empty($request->input('emplyer3_address_line2'))){
			  $emplyer3_address_line2=$request->input('emplyer3_address_line2');
			}else{
			  $emplyer3_address_line2='';
			}

			if(!empty($request->input('emplyer3_city'))){
			  $emplyer3_city=$request->input('emplyer3_city');
			}else{
			  $emplyer3_city='';
			}

			if(!empty($request->input('emplyer3_state'))){
			  $emplyer3_state=$request->input('emplyer3_state');
			}else{
			  $emplyer3_state='';
			}

			if(!empty($request->input('emplyer3_zip'))){
			  $emplyer3_zip=$request->input('emplyer3_zip');
			}else{
			  $emplyer3_zip='';
			}

			if(!empty($request->input('emplyer3_country'))){
			  $emplyer3_country=$request->input('emplyer3_country');
			}else{
			  $emplyer3_country='';
			}

			if(!empty($request->input('emplyer3_position_held'))){
			  $emplyer3_position_held=$request->input('emplyer3_position_held');
			}else{
			  $emplyer3_position_held='';
			}

			if(!empty($request->input('emplyer3_suevisor_name'))){
			  $emplyer3_suevisor_name=$request->input('emplyer3_suevisor_name');
			}else{
			  $emplyer3_suevisor_name='';
			}

			if(!empty($request->input('emplyer3_date_started'))){
			  $emplyer3_date_started=$request->input('emplyer3_date_started');
			}else{
			  $emplyer3_date_started='';
			}

			if(!empty($request->input('emplyer3_date_ended'))){
			  $emplyer3_date_ended=$request->input('emplyer3_date_ended');
			}else{
			  $emplyer3_date_ended='';
			}

			if(!empty($request->input('emplyer3_wage_start'))){
			  $emplyer3_wage_start=$request->input('emplyer3_wage_start');
			}else{
			  $emplyer3_wage_start='';
			}

			if(!empty($request->input('emplyer3_wage_end'))){
			  $emplyer3_wage_end=$request->input('emplyer3_wage_end');
			}else{
			  $emplyer3_wage_end='';
			}

			if(!empty($request->input('emplyer3_reason_leaving'))){
			  $emplyer3_reason_leaving=$request->input('emplyer3_reason_leaving');
			}else{
			  $emplyer3_reason_leaving='';
			}

			if(!empty($request->input('may_contact_3'))){
			  $may_contact_3=$request->input('may_contact_3');
			}else{
			  $may_contact_3='';
			}

			if(!empty($request->input('agreement'))){
			  $agreement=$request->input('agreement');
			}else{
			  $agreement='';
			}

			if(!empty($request->input('todays_date'))){
			  $todays_date=$request->input('todays_date');
			}else{
			  $todays_date='';
			}





			$regi_task=DB::insert('insert into applications (fname,lname,address,address_line2,city,state,zip,country,phone,alternet_phone,email,found,current_security_license,armed_license,armlicense,armexp_date,unarmed_license,unarmlicense,unarmexp_date,years_18,eligible_usa,worked_school,worked_company,crime,crime_details,desired_position2,date_start,not_available_to_work,learncompnay,non_compete,agreement_with,agreement_duration,agreement_starting,agreement_ending,degree_obtained,other_training,military_experience,dates_served,branch_of_service,rank_at_discharge,driver_license,license_revoked,license_revoked_explain,emplyer1,emplyer1_business,emplyer1_phone,emplyer1_street,emplyer1_address_line2,emplyer1_city,emplyer1_state,emplyer1_zip,emplyer1_country,emplyer1_position_held,emplyer1_suevisor_name,emplyer1_date_started,emplyer1_date_ended,emplyer1_wage_start,emplyer1_wage_end,emplyer1_reason_leaving,may_contact_1,emplyer2,emplyer2_business,emplyer2_phone,emplyer2_street,emplyer2_address_line2,emplyer2_city,emplyer2_state,emplyer2_zip,emplyer2_country,emplyer2_position_held,emplyer2_suevisor_name,emplyer2_date_started,emplyer2_date_ended,emplyer2_wage_start,emplyer2_wage_end,emplyer2_reason_leaving,may_contact_2,emplyer3,emplyer3_business,emplyer3_phone,emplyer3_street,emplyer3_address_line2,emplyer3_city,emplyer3_state,emplyer3_zip,emplyer3_country,emplyer3_position_held,emplyer3_suevisor_name,emplyer3_date_started,emplyer3_date_ended,emplyer3_wage_start,emplyer3_wage_end,emplyer3_reason_leaving,may_contact_3,agreement,todays_date) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)',[$fname,$lname,$address,$address_line2,$city,$state,$zip,$country,$phone,$alternet_phone,$email,$found,$current_security_license,$armed_license,$armlicense,$armexp_date,$unarmed_license,$unarmlicense,$unarmexp_date,$years_18,$eligible_usa,$worked_school,$worked_company,$crime,$crime_details,$desired_position2,$date_start,$not_available_to_work,$learncompnay,$non_compete,$agreement_with,$agreement_duration,$agreement_starting,$agreement_ending,$degree_obtained,$other_training,$military_experience,$dates_served,$branch_of_service,$rank_at_discharge,$driver_license,$license_revoked,$license_revoked_explain,$emplyer1,$emplyer1_business,$emplyer1_phone,$emplyer1_street,$emplyer1_address_line2,$emplyer1_city,$emplyer1_state,$emplyer1_zip,$emplyer1_country,$emplyer1_position_held,$emplyer1_suevisor_name,$emplyer1_date_started,$emplyer1_date_ended,$emplyer1_wage_start,$emplyer1_wage_end,$emplyer1_reason_leaving,$may_contact_1,$emplyer2,$emplyer2_business,$emplyer2_phone,$emplyer2_street,$emplyer2_address_line2,$emplyer2_city,$emplyer2_state,$emplyer2_zip,$emplyer2_country,$emplyer2_position_held,$emplyer2_suevisor_name,$emplyer2_date_started,$emplyer2_date_ended,$emplyer2_wage_start,$emplyer2_wage_end,$emplyer2_reason_leaving,$may_contact_2,$emplyer3,$emplyer3_business,$emplyer3_phone,$emplyer3_street,$emplyer3_address_line2,$emplyer3_city,$emplyer3_state,$emplyer3_zip,$emplyer3_country,$emplyer3_position_held,$emplyer3_suevisor_name,$emplyer3_date_started,$emplyer3_date_ended,$emplyer3_wage_start,$emplyer3_wage_end,$emplyer3_reason_leaving,$may_contact_3,$agreement,$todays_date]);

			if ($regi_task) {

 					$to = 'test@test.com';
				    $subject = 'New Job Application!';

				    $headers = "From:test.com/ ! <test@test.com> \r\n";
				    $headers .= "CC: test@test.com \r\n";
				    $headers .= "MIME-Version: 1.0\r\n";
				    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

				    $message = '<html><body>';
				    $message .= '<br/><br/><strong>Hello Admin, </strong><br/><br/>You have a new job application!<br/>'.
					    '<br/><strong>fname:</strong> '.$fname.
						'<br/><strong>lname:</strong> '.$lname.
						'<br/><strong>address:</strong> '.$address.
						'<br/><strong>address_line2:</strong> '.$address_line2.
						'<br/><strong>city:</strong> '.$city.
						'<br/><strong>state:</strong> '.$state.
						'<br/><strong>zip:</strong> '.$zip.
						'<br/><strong>country:</strong> '.$country.
						'<br/><strong>phone:</strong> '.$phone.
						'<br/><strong>alternet_phone:</strong> '.$alternet_phone.
						'<br/><strong>email:</strong> '.$email.
						'<br/><strong>found:</strong> '.$found.
						'<br/><strong>current_security_license:</strong> '.$current_security_license.
						'<br/><strong>armed_license:</strong> '.$armed_license.
						'<br/><strong>armlicense:</strong> '.$armlicense.
						'<br/><strong>armexp_date:</strong> '.$armexp_date.
						'<br/><strong>unarmed_license:</strong> '.$unarmed_license.
						'<br/><strong>unarmlicense:</strong> '.$unarmlicense.
						'<br/><strong>unarmexp_date:</strong> '.$unarmexp_date.
						'<br/><strong>years_18:</strong> '.$years_18.
						'<br/><strong>eligible_usa:</strong> '.$eligible_usa.
						'<br/><strong>worked_school:</strong> '.$worked_school.
						'<br/><strong>worked_company:</strong> '.$worked_company.
						'<br/><strong>crime:</strong> '.$crime.
						'<br/><strong>crime_details:</strong> '.$crime_details.
						'<br/><strong>desired_position2:</strong> '.$desired_position2.
						'<br/><strong>date_start:</strong> '.$date_start.
						'<br/><strong>not_available_to_work:</strong> '.$not_available_to_work.
						'<br/><strong>learncompnay:</strong> '.$learncompnay.
						'<br/><strong>non_compete:</strong> '.$non_compete.
						'<br/><strong>agreement_with:</strong> '.$agreement_with.
						'<br/><strong>agreement_duration:</strong> '.$agreement_duration.
						'<br/><strong>agreement_starting:</strong> '.$agreement_starting.
						'<br/><strong>agreement_ending:</strong> '.$agreement_ending.
						'<br/><strong>degree_obtained:</strong> '.$degree_obtained.
						'<br/><strong>other_training:</strong> '.$other_training.
						'<br/><strong>military_experience:</strong> '.$military_experience.
						'<br/><strong>dates_served:</strong> '.$dates_served.
						'<br/><strong>branch_of_service:</strong> '.$branch_of_service.
						'<br/><strong>rank_at_discharge:</strong> '.$rank_at_discharge.
						'<br/><strong>driver_license:</strong> '.$driver_license.
						'<br/><strong>license_revoked:</strong> '.$license_revoked.
						'<br/><strong>license_revoked_explain:</strong> '.$license_revoked_explain.
						'<br/><strong>emplyer1:</strong> '.$emplyer1.
						'<br/><strong>emplyer1_business:</strong> '.$emplyer1_business.
						'<br/><strong>emplyer1_phone:</strong> '.$emplyer1_phone.
						'<br/><strong>emplyer1_street:</strong> '.$emplyer1_street.
						'<br/><strong>emplyer1_address_line2:</strong> '.$emplyer1_address_line2.
						'<br/><strong>emplyer1_city:</strong> '.$emplyer1_city.
						'<br/><strong>emplyer1_state:</strong> '.$emplyer1_state.
						'<br/><strong>emplyer1_zip:</strong> '.$emplyer1_zip.
						'<br/><strong>emplyer1_country:</strong> '.$emplyer1_country.
						'<br/><strong>emplyer1_position_held:</strong> '.$emplyer1_position_held.
						'<br/><strong>emplyer1_suevisor_name:</strong> '.$emplyer1_suevisor_name.
						'<br/><strong>emplyer1_date_started:</strong> '.$emplyer1_date_started.
						'<br/><strong>emplyer1_date_ended:</strong> '.$emplyer1_date_ended.
						'<br/><strong>emplyer1_wage_start:</strong> '.$emplyer1_wage_start.
						'<br/><strong>emplyer1_wage_end:</strong> '.$emplyer1_wage_end.
						'<br/><strong>emplyer1_reason_leaving:</strong> '.$emplyer1_reason_leaving.
						'<br/><strong>may_contact_1:</strong> '.$may_contact_1.
						'<br/><strong>emplyer2:</strong> '.$emplyer2.
						'<br/><strong>emplyer2_business:</strong> '.$emplyer2_business.
						'<br/><strong>emplyer2_phone:</strong> '.$emplyer2_phone.
						'<br/><strong>emplyer2_street:</strong> '.$emplyer2_street.
						'<br/><strong>emplyer2_address_line2:</strong> '.$emplyer2_address_line2.
						'<br/><strong>emplyer2_city:</strong> '.$emplyer2_city.
						'<br/><strong>emplyer2_state:</strong> '.$emplyer2_state.
						'<br/><strong>emplyer2_zip:</strong> '.$emplyer2_zip.
						'<br/><strong>emplyer2_country:</strong> '.$emplyer2_country.
						'<br/><strong>emplyer2_position_held:</strong> '.$emplyer2_position_held.
						'<br/><strong>emplyer2_suevisor_name:</strong> '.$emplyer2_suevisor_name.
						'<br/><strong>emplyer2_date_started:</strong> '.$emplyer2_date_started.
						'<br/><strong>emplyer2_date_ended:</strong> '.$emplyer2_date_ended.
						'<br/><strong>emplyer2_wage_start:</strong> '.$emplyer2_wage_start.
						'<br/><strong>emplyer2_wage_end:</strong> '.$emplyer2_wage_end.
						'<br/><strong>emplyer2_reason_leaving:</strong> '.$emplyer2_reason_leaving.
						'<br/><strong>may_contact_2:</strong> '.$may_contact_2.
						'<br/><strong>emplyer3:</strong> '.$emplyer3.
						'<br/><strong>emplyer3_business:</strong> '.$emplyer3_business.
						'<br/><strong>emplyer3_phone:</strong> '.$emplyer3_phone.
						'<br/><strong>emplyer3_street:</strong> '.$emplyer3_street.
						'<br/><strong>emplyer3_address_line2:</strong> '.$emplyer3_address_line2.
						'<br/><strong>emplyer3_city:</strong> '.$emplyer3_city.
						'<br/><strong>emplyer3_state:</strong> '.$emplyer3_state.
						'<br/><strong>emplyer3_zip:</strong> '.$emplyer3_zip.
						'<br/><strong>emplyer3_country:</strong> '.$emplyer3_country.
						'<br/><strong>emplyer3_position_held:</strong> '.$emplyer3_position_held.
						'<br/><strong>emplyer3_suevisor_name:</strong> '.$emplyer3_suevisor_name.
						'<br/><strong>emplyer3_date_started:</strong> '.$emplyer3_date_started.
						'<br/><strong>emplyer3_date_ended:</strong> '.$emplyer3_date_ended.
						'<br/><strong>emplyer3_wage_start:</strong> '.$emplyer3_wage_start.
						'<br/><strong>emplyer3_wage_end:</strong> '.$emplyer3_wage_end.
						'<br/><strong>emplyer3_reason_leaving:</strong> '.$emplyer3_reason_leaving.
						'<br/><strong>may_contact_3:</strong> '.$may_contact_3.
						'<br/><strong>agreement:</strong> '.$agreement.
						'<br/><strong>todays_date:</strong> '.$todays_date

				    	;
				    $message .= '<table rules="all" style="border:none" cellpadding="10">';

				    $message .= "</table>";
				    $message .= "</body><br/><br/></html>"; 

				    if(mail($to, $subject, $message, $headers)){				       
				      Session::flash('message','Thank you for submitting your application, your application will be reviewed and if approved, You will receive an email within 72 hours. REMEMBER to check your spam mail. If you do not receive an email please call us at 0000000.');
				    }


				
				return redirect()->back();
			}


		}else{
			return redirect()->route('index');
		}
	}



	// all users for admin
	public function all_users(Request $request){
		
		if ($request->session()->has('user_email')) {
			$email = Session::get('user_email');
			$user_details = DB::table('admins')->where('email',$email)->first();
		   	if($user_details->role=="admin"){
		   		$total_users=DB::select('SELECT * FROM (admins)');
		   		return view('all_users', compact(['user_details','total_users']));
		   	}else{
		   		return redirect()->route('dashboard');
		   	}
		}else{
			Session::flash('error','You are not loged in');
			return redirect()->route('login_default');
		}
	}



	public function joinnow_save(Request $request){

		if ($request->session()->has('user_email')) {
			$email = Session::get('user_email');
			$user_details = DB::table('admins')->where('email',$email)->first();
		   	if($user_details->role=="admin" || $user_details->permission==1){
		   		if ($request->isMethod('post') && !empty($request->input('email'))) {
		   			$permission=$request->input('permission');
		   			$name=$request->input('name');
					$email=$request->input('email');
					$phone=$request->input('phone');
					$password=$request->input('password');
					$role=$request->input('role');
					$joined_date=date('Y-m-d H:i:s');
					$email_check=DB::select('SELECT * FROM (admins) WHERE email=?',[$email]);
					// check email duplicate or not
					if($email_check){
						Session::flash('error','Email is already used');
						return redirect()->route('users');
					}else{
						$password = password_hash($password, PASSWORD_BCRYPT);
						$regi=DB::insert('insert into admins (permission,name,email,password,joined_date,phone,role) values(?,?,?,?,?,?,?)',[$permission,$name,$email,$password,$joined_date,$phone,$role]);
						if ($regi) {
							Session::flash('message','Account created successfully');
							return redirect()->route('users');
						}else{
							Session::flash('error','Not successful!');
							return redirect()->route('users');
						}
					}
				}else{
					Session::flash('error','Something Went Wrong');
					return redirect()->route('users');
				}
		   	}else{
		   		Session::flash('error','You are not permitted to create account!');
		   		return redirect()->route('dashboard');
		   	}
		}else{
			Session::flash('error','You are not loged in');
			return redirect()->route('login_default');
		}

		
	}




	public function joinnow_update(Request $request){

		if ($request->session()->has('user_email')) {
			$email = Session::get('user_email');
			$user_details = DB::table('admins')->where('email',$email)->first();
		   	if($user_details->role=="admin" || $user_details->permission==1){
		   		if ($request->isMethod('post') && !empty($request->input('name'))) {
		   			$id=$request->input('id');
		   			$permission=$request->input('permission');
		   			$name=$request->input('name');
					
					$phone=$request->input('phone');
					
					$role=$request->input('role');
					
					
						$update_user=DB::update('UPDATE admins SET permission=?,name=?,phone=?,role=? WHERE id=?',[$permission,$name,$phone,$role,$id]);
						if ($update_user) {
							Session::flash('message','Account updated successfully');
							return redirect()->route('users');
						}else{
							Session::flash('error','Not successful!');
							return redirect()->route('users');
						}
					
				}else{
					Session::flash('error','Something Went Wrong');
					return redirect()->route('users');
				}
		   	}else{
		   		Session::flash('error','You are not permitted to create account!');
		   		return redirect()->route('dashboard');
		   	}
		}else{
			Session::flash('error','You are not loged in');
			return redirect()->route('login_default');
		}

		
	}

 

	//delete_slider
	public function delete_user(Request $request,$id){
		if ($request->session()->has('user_email')) {
			$email = Session::get('user_email');
			$user_details = DB::table('admins')->where('email',$email)->first();
			if($user_details->role=="admin" || $user_details->permission==1){
				$delete_user=DB::delete('DELETE FROM admins WHERE id=?',[$id]);
		   		Session::flash('message','User successfully deleted');
		   		return redirect()->route('users');
			}else{
				Session::flash('error','You cannot delete user');
		   		return redirect()->route('users');
			}

		  
		  
		}else{
			Session::flash('message','You are not loged in');
			return redirect()->route('login_default');
		}
	}
	//delete_slider



	


	// 	// active_unpaid_fires for admin
	// public function active_unpaid_water(Request $request){
	// 	if ($request->session()->has('user_email')) {
	// 		$email = Session::get('user_email');
	// 		$user_details = DB::table('admins')->where('email',$email)->first();
	// 	   	if($user_details->role=="admin"){
	// 	   		$active_unpaid_water =  DB::table('flower_members')->where([['paid','=',0],['water','=',1],['active','=',1]])->get();
	// 	   		return view('active_unpaid_water', compact(['user_details','active_unpaid_water']));
	// 	   	}else{
	// 	   		return redirect()->route('dashboard');
	// 	   	}
	// 	}else{
	// 		Session::flash('error','You are not loged in');
	// 		return redirect()->route('login_default');
	// 	}
	// }




	


	
	


	









		// show profile
	public function profile(Request $request){
		
		if ($request->session()->has('user_email')) {
			$email = Session::get('user_email');
			$user_id = Session::get('user_id');
			$user_details = DB::table('admins')->where('email',$email)->first();
			

			return view('profile', compact(['user_details']));		    
		}else{
			Session::flash('error','You are not loged in');
			return redirect()->route('login_default');
		}
	}// show profile




	// save_member

	public function save_profile(Request $request){
				
		if ($request->session()->has('user_email')) {

				if ($request->isMethod('post') && !empty($request->input('current_pwd'))) {

				$current_pwd=$request->input('current_pwd');
				$pwd=$request->input('pwd');
				$pwd_confirm=$request->input('pwd_confirm');

				$user_id=Session::get('user_id');
				
				$admin = DB::table('admins')->where('id',$user_id)->first();
				 
		      	if(password_verify($current_pwd, $admin->password)){

				if (!empty($pwd_confirm) && !empty($pwd) && $pwd!=$pwd_confirm) {
					
					Session::flash('error','New Password not match!');
					 return redirect()->route('profile');
				}else{

					$uppercase = preg_match('@[A-Z]@', $pwd);
					$lowercase = preg_match('@[a-z]@', $pwd);
					$number    = preg_match('@[0-9]@', $pwd);

					if(!$uppercase && !$lowercase || !$number || strlen($pwd) < 8) {
					 
					  Session::flash('error','Password must be at least 8 charecters and contain number and letter!');
					   return redirect()->route('profile');
					}

				}

			}else{
				
				 Session::flash('error','Current Password wrong!');
				 return redirect()->route('profile');
			}


				$pwd = password_hash($pwd, PASSWORD_BCRYPT);
        		$update=DB::update('UPDATE admins SET password=? WHERE id=?',[$pwd,$user_id]);
				
				if($update){
					Session::flash('message','Password changed successfully');
					return redirect()->route('profile');
				}else{
					Session::flash('error','Password changes not successful');
					return redirect()->route('profile');
				}
				

		}elseif($request->isMethod('post') && !empty($request->input('text_color'))){
			$text_color=$request->input('text_color');
			$bg_color1=$request->input('bg_color1');
			$bg_color2=$request->input('bg_color2');
			$user_id=Session::get('user_id');
			$update=DB::update('UPDATE admins SET text_color=?,bg_color1=?,bg_color2=? WHERE id=?',[$text_color,$bg_color1,$bg_color2,$user_id]);
			
			Session::flash('message','Color Updated!');
			return redirect()->route('profile');
			
				
		}elseif($request->isMethod('post') && !empty($request->input('gift_method'))){
			$gift_method=$request->input('gift_method');
			$gift_username=$request->input('gift_username');
			$gift_method2=$request->input('gift_method2');
			$gift_username2=$request->input('gift_username2');
			$comment=$request->input('comment');			
			$user_id=Session::get('user_id');
			$update=DB::update('UPDATE admins SET gift_method=?,gift_username=?,gift_method2=?,gift_username2=?,comment=? WHERE id=?',[$gift_method,$gift_username,$gift_method2,$gift_username2,$comment,$user_id]);
			
			Session::flash('message','Gift method Updated!');
			return redirect()->route('profile');
			
				
		}elseif($request->isMethod('post') && !empty($request->input('profilepic'))){
			$image = $request->img;
			if(!empty($image)){
			$name = time().'.'.$image->getClientOriginalExtension();
			$destinationPath = public_path('owner/profile-image');
			$image->move($destinationPath, $name);
			$image_url = 'owner/profile-image/' . $name;
			}else{
		        	$image_url="";
		        }
			$user_id=Session::get('user_id');
			$update=DB::update('UPDATE admins SET image=? WHERE id=?',[$image_url,$user_id]);
			
			Session::flash('message','Profile picture updated!');
			return redirect()->route('profile');
			
		}else{
            Session::flash('error','Fields cannot be empty');
			return redirect()->route('profile');
		}

		    
		}else{
			Session::flash('error','You are not loged in');
			return redirect()->route('login_default');
		}

	}//save_member
	
	
	
	
	
	




	// Cronjob
	public function cronjob(Request $request){
			
		$tasks = DB::table('tasks')->where('mail_sent',0)->get();
	
		if ($tasks) {
			foreach ($tasks as $key => $task) {

				$dateo=$task->timeframe.' '.$task->time;

				

				$date_close = (new DateTime($dateo))->modify('-15 minutes');

				

				$joined = strtotime($date_close->format('Y-m-d H:i:s a'));

				$limit=strtotime(date('Y-m-d H:i:s a'));

				if($joined<$limit){
					
					echo "yes";
					DB::update('UPDATE tasks SET mail_sent=? WHERE id=?',[1,$task->id]);
				}else{
					echo 'no';
				}						
				
			}
		}
		// Delete unpaid fire finish

		
	}







}



?>
