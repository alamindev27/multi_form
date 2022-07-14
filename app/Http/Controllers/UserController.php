<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use DB;
use DateTime;

class UserController extends Controller {



	public function check_login(Request $request){
		

		if ($request->session()->has('user_email')) {
		 return redirect()->route('dashboard');
		}
		if ($request->isMethod('post')) {

			$email=$request->input('email');
			$password=$request->input('password');

			if (empty($email) && empty($password)) {
				Session::flash('error','Fields should not be empty!');
				return redirect()->route('login_default');
			}

			$verify_users=DB::select('SELECT * FROM (admins) WHERE email=?',[$email]);
			if($verify_users){
				foreach ($verify_users as $verify_user) {

					if ($verify_users && password_verify($password, $verify_user->password)) {
						$request->session()->put('user_email', $verify_user->email);
						$request->session()->put('name', $verify_user->name);
						$request->session()->put('user_id', $verify_user->id);
						return redirect()->route('dashboard');

					} else {
						Session::flash('error','Username or password incorrect');
						return redirect()->route('login_default');
					}	
				}
			}else{
				Session::flash('error','User Not Found!');
				return redirect()->route('login_default');
			}

		} else{
			Session::flash('error','Login Please!');
			 return redirect()->route('login_default');
		}







	}



	public function logout(Request $request){

		$request->session()->forget('user_email');
		$request->session()->forget('user_id');
		$request->session()->forget('name');
		Session::flash('message','Logout Successful');
		return redirect()->route('login_default');
	}


	public function joinnow(Request $request){

			if ($request->isMethod('post') && !empty($request->input('email'))) {
				$email=$request->input('email');
				// $invitee=DB::select('SELECT * FROM (admins) WHERE email=?',[$email]);
				$invitee = DB::table('admins')->where('email',$email)->first();

				if ($invitee) {
					return view('joinnow', compact(['invitee']));
				}else{
					Session::flash('error','Invitee not found!');
					return redirect()->route('login_default');
				}

				// $invitee_details = DB::table('admins')->where('email','1')->first();
			}else{
					Session::flash('error','Inviter email should not be empty!');
					return redirect()->route('login_default');
				}

		}



	public function lost_password(Request $request){
			return view('lost_password');
		}


		public function check_lostpassword(Request $request){

			if ($request->isMethod('post') && !empty($request->input('email'))) {
				$email=$request->input('email');
				if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
			        Session::flash('error','Invalid email format!');
					return redirect()->route('lost_password');
			    }
				// $invitee=DB::select('SELECT * FROM (admins) WHERE email=?',[$email]);
				$checkemail = DB::table('admins')->where('email',$email)->first();

				if ($checkemail) {
					$reset_token = sha1(time() . $email . $_SERVER['REMOTE_ADDR']);
					$update_status=DB::update('UPDATE admins SET reset_token=? WHERE email=?',[$reset_token,$email]);
					if ($update_status) {
						//email
			            $to = $email;

					    $subject = 'Contact By ';

					    $headers = "From: Password Reset <support@livinglegacyinternationalcollective.com> \r\n";
					    $headers .= "Reply-To: support@livinglegacyinternationalcollective.com\r\n";
					    $headers .= "MIME-Version: 1.0\r\n";
					    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

					    $message = '<html><body>';
					    $message .= '<br/><br/><strong>Hello, '.$checkemail->name.' ! </strong> <br/><br/>You recently requested to reset your password for your living ligacy account. Click the button below to reset it. <br/>
					    	<p><a href="'.url("/reset_password/$reset_token").'">Click to reset your password!</a></p>
					    	If you did not request a password reset, please ignore this email or reply to let us know.<br/>
					    	If you are having trouble clicking the password reset button copy and past the URL below into your web browser<br/>

					    	'.url("/reset_password/$reset_token").'<br/><br/>

					    	Thanks<br>
					    	Living Ligacy Team
					    ';
					    $message .= '<table rules="all" style="border:none" cellpadding="10">';
					    
					    

					    $message .= "</table>";
					    $message .= "</body><br/><br/></html>"; 

					    

					    if(mail($to, $subject, $message, $headers)){
					       Session::flash('message','Instruction is sent to your email. Check inbox/spam');
							return redirect()->route('lost_password');
					        
					    }else{
					       
					        $errors[] = 'Unknown Error Occurred!';
					    }
					}
				}else{
					Session::flash('error','User not found!');
					return redirect()->route('lost_password');
				}

				// $invitee_details = DB::table('admins')->where('email','1')->first();
			}else{
					Session::flash('error','Email should not be empty!');
					return redirect()->route('lost_password');
				}

		}






		public function reset_password(Request $request,$reset_token){
			if ($request->isMethod('get') && !empty($reset_token)) {
				return view('reset_password', compact(['reset_token']));
			}else{
				Session::flash('error','Invalid token! Reset again!');
				return redirect()->route('lost_password');
			}

		}



		public function reset_password_check(Request $request){
			if ($request->isMethod('post') && !empty($request->input('reset_token'))) {
				$password = $request->input('password');
			    $pwd_confirm = $request->input('confirm_password');
			    $reset_token = $request->input('reset_token');
			   
			    // validate
			    if (!empty($pwd_confirm) && !empty($password) && $password!=$pwd_confirm) {
					Session::flash('error','Password not match!');
					return redirect('reset_password/'.$reset_token);
					
					
				}else{
				    $uppercase = preg_match('@[A-Z]@', $password);
					$lowercase = preg_match('@[a-z]@', $password);
					$number    = preg_match('@[0-9]@', $password);

					if(!$uppercase && !$lowercase || !$number || strlen($password) < 8) {
					  
					  Session::flash('error','Password must be at least 8 charecters and contain number and letter!');
					  return redirect('reset_password/'.$reset_token);
					}

			    }
			    $password = password_hash($password, PASSWORD_BCRYPT);
			    $update_pass=DB::update('UPDATE admins SET password=? WHERE reset_token=?',[$password,$reset_token]);

			    if ($update_pass) {
			    	$update_token=DB::update('UPDATE admins SET reset_token=? WHERE reset_token=?',[NULL,$reset_token]);
			    	if ($update_token) {
			    	 Session::flash('message','Password Updated Successfully! You can login now!');
					 return redirect()->route('login_default');
			    	}
			    }else{
			    	 Session::flash('error','Invalid token! Reset again!');
					 return redirect()->route('lost_password');
			    }



			}else{
				Session::flash('error','Invalid token! Reset again!');
				return redirect()->route('lost_password');
			}

		}





	public function joinnow_save(Request $request){

		if ($request->isMethod('post') && !empty($request->input('inviter'))) {

			// catch registration info
			$inviter=$request->input('inviter');
			$inviter_id=$request->input('inviter_id');
			$name=$request->input('name');
			$email=$request->input('email');
			$phone=$request->input('phone');
			$gift_method=$request->input('gift_method');
			$gift_username=$request->input('gift_username');
			$gift_method2=$request->input('gift_method2');
			$gift_username2=$request->input('gift_username2');
			$password=$request->input('password');
			$joined_date=date('Y-m-d H:i:s');
			$email_check=DB::select('SELECT * FROM (admins) WHERE email=?',[$email]);
			// check email duplicate or not
			if($email_check){
				Session::flash('error','Email is already used');
				return redirect()->route('login_default');
			}else{
				// if email not duplicate then insert registration info
				$password = password_hash($password, PASSWORD_BCRYPT);
				$regi=DB::insert('insert into admins (inviter,name,email,password,joined_date,phone,gift_method,gift_username,gift_method2,gift_username2) values(?,?,?,?,?,?,?,?,?,?)',[$inviter,$name,$email,$password,$joined_date,$phone,$gift_method,$gift_username,$gift_method2,$gift_username2]);
				$last_user = DB::table('admins')->orderBy('id', 'DESC')->first();
				$last_user_id = $last_user->id;
				// if registration info inserted successfuly
				if($regi){
					// grab  flowers and check which flower is full and not full
					
					$flowers=DB::select('SELECT * FROM (flowers) WHERE active=?',[1]);
					// grab last flower to check if this is also full
					$last_flower = DB::table('flowers')->orderBy('id', 'DESC')->first();
					$last_flower_id = $last_flower->id;

					foreach ($flowers as $key => $flower) {
						// grab all members under individual flower
						$flower_members=DB::select('SELECT * FROM (flower_members) WHERE flower_id=?',[$flower->id]);
						// member number of individual flower
						if (count($flower_members)<9) {
							if (count($flower_members)==8) {
								$insert_to_flower=DB::insert('insert into flower_members (flower_id,user_id,inviter_id,seed,water,fire8,joined_time) values(?,?,?,?,?,?,?)',[$flower->id,$last_user_id,$inviter_id,1,0,1,date('Y-m-d H:i:s')]);
							}else{
								$insert_to_flower=DB::insert('insert into flower_members (flower_id,user_id,inviter_id,seed,water,joined_time) values(?,?,?,?,?,?)',[$flower->id,$last_user_id,$inviter_id,1,0,date('Y-m-d H:i:s')]);
							}
							
							 break;
						}

						// check if foreach loop flower id equal to last flower id
						if($flower->id==$last_flower_id){

							// grab member of last flower
							$last_flower_members=DB::select('SELECT * FROM (flower_members) WHERE flower_id=?',[$last_flower_id]);
							// grab water of last flower
							$water_of_last_flower = DB::table('flower_members')->where([['flower_id','=',$last_flower_id],['water','=',1]])->first();
							
							if(count($last_flower_members)==9 || count($last_flower_members)>9){
								// if all flowers are full then check empty water and create a new one and assign seeds
								$empty_water = DB::table('empty_waters')->orderBy('id', 'ASC')->first();

								if ($empty_water) {
									$insert_flower=DB::insert('insert into flowers (active) values(?)',[1]);

									if($insert_flower){
										$delete_empty_water=DB::delete('DELETE FROM empty_waters WHERE user_id=?',[$empty_water->user_id]);
									}

									$last_flower = DB::table('flowers')->orderBy('id', 'DESC')->first();
									$last_flower_id = $last_flower->id;
									// grab water's inviter
									$waters_inviter_email = DB::table('admins')->where('id',$empty_water->user_id)->first();
									$waters_inviter_id = DB::table('admins')->where('email',$waters_inviter_email->inviter)->first();
									// grab last water's inviter
									$last_waters_inviter_email = DB::table('admins')->where('id',$water_of_last_flower->user_id)->first();
									$last_waters_inviter_id = DB::table('admins')->where('email',$last_waters_inviter_email->email)->first();

									$insert_water_to_flower=DB::insert('insert into flower_members (flower_id,user_id,inviter_id,seed,water,joined_time) values(?,?,?,?,?,?)',[$last_flower_id,$empty_water->user_id,$waters_inviter_id->id,1,1,date('Y-m-d H:i:s')]);

									$insert_water_of_last_flower_as_seed=DB::insert('insert into flower_members (flower_id,user_id,inviter_id,seed,water,fire1,joined_time) values(?,?,?,?,?,?,?)',[$last_flower_id,$water_of_last_flower->user_id,$last_waters_inviter_id->id,1,0,1,date('Y-m-d H:i:s')]);

									$insert_seed_to_flower=DB::insert('insert into flower_members (flower_id,user_id,inviter_id,seed,water,joined_time) values(?,?,?,?,?,?)',[$last_flower_id,$last_user_id,$inviter_id,1,0,date('Y-m-d H:i:s')]);
								}else{
									$insert_seed_to_waiting_room=DB::insert('insert into waiting_room (user_id) values(?)',[$last_user_id]);

									if ($insert_seed_to_waiting_room) {
										$move_to_expire=DB::update('UPDATE admins SET expired=? WHERE id=?',[2,$last_user_id]);
										Session::flash('message','Registration successful. Please wait. You will be added to a flower momentarily');
									}
									
									return redirect()->route('login_default');
								}
								break;
							}

						}//if foreach loop id and last flower is equal
					}

					



					Session::flash('message','Registration Successful');
					return redirect()->route('login_default');
				}
				// if registration info inserted unsuccessfuly
				else{
					Session::flash('error','Registration Not Successful');
					return redirect()->route('login_default');
				}
			}

		}else{
            Session::flash('error','Fields should not be empty!');
			return redirect()->route('login_default');
		}

	}




}

?>