<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use DB;
use DataTables;
use Carbon\Carbon;
use Image;

class adminController extends Controller
{
	public function admindashboard(){
		return view('admin.admindashboard');
	}
	public function userlist(){
		if(session()->get("email")){
			$task = DB::table('users')
			->join('role','role.role_id','=','users.role_id')
			->where('status_id','=',1)
			->select('users.*','role.role_name')
			->get();
			return view('admin.userlist',['data' => $task]);
		}else{
			return redirect('/')->with('message','Session Expired! Please Login Again.');
		}
	}
	public function adduser(){
		return view('admin.adduser');
	}
	public function submitadduser(Request $request){
		if(session()->get("email")){
			$this->validate($request, [
	    		'users_firstname'	=>'required',
	    		'users_lastname'	=>'required',
	    		'users_email'		=>'required|unique:users,users_email',
	    		'users_mobileno'	=>'required',
	    		'users_password'	=>'required',
	    		'role_id'			=>'required',
	    	]);
			$insert = array(
	            'users_firstname' 	=> $request->users_firstname,
	            'users_lastname' 	=> $request->users_lastname,
	            'users_email' 		=> $request->users_email,
	            'users_mobileno' 	=> $request->users_mobileno,
	            'users_password' 	=> $request->users_password,
	            'role_id' 			=> $request->users_dob,
	            'role_id' 			=> $request->role_id,
	            'status_id' 		=> 1,
	            'created_by' 		=> session()->get('id'),
	            'created_at' 		=> date('Y-m-d h:i;s'),
	        );
	        $created = DB::table('users')->insert($insert);
	        if ($created) {
	    		return redirect('/userlist')->with('message','User Added Successfully');
	        }else{
				return redirect('/userlist')->with('message','Oops! Something Went Wrong');
	        }
    	}else{
			return redirect('/')->with('message','Session Expired! Please Login Again.');
		}
	}
	public function edituser($id){
		if(session()->get("email")){
			$task = DB::table('users')
			->where('users_id','=',$id)
			->where('status_id','=',1)
			->select('*')
			->first();
			return view('admin.edituser', ['data' => $task]);
		}else{
			return redirect('/')->with('message','Session Expired! Please Login Again.');
		}
	}
	public function submitedituser(Request $request){
		if(session()->get("email")){
			$this->validate($request, [
	    		'users_firstname'	=>'required',
	    		'users_lastname'	=>'required',
	    		'users_email'		=>'required',
	    		'users_mobileno'	=>'required',
	    		'users_password'	=>'required',
	    	]);
	    	$check = DB::table('users')
			->where('users_id','=',$request->users_id)
			->select('users_email')
			->first();
			if (isset($check->users_email)) {
				if ($check->users_email != $request->users_email) {
		    		$this->validate($request, [
		    			'users_email'		=>'unique:users,users_email',
		    		]);
		    	}
	    	}
			$dataa = array(
	            'users_firstname' 	=> $request->users_firstname,
	            'users_lastname' 	=> $request->users_lastname,
	            'users_email' 		=> $request->users_email,
	            'users_mobileno' 	=> $request->users_mobileno,
	            'users_password' 	=> $request->users_password,
	            'updated_by' 		=> session()->get('id'),
	            'updated_at' 		=> date('Y-m-d h:i;s'),
	        );
	        $updated = DB::table('users')
			->where('users_id', $request->users_id)
			->update($dataa);
	        if ($updated) {
	    		return redirect('/userlist')->with('message','User Updated Successfully');
	        }else{
				return redirect('/userlist')->with('message','Oops! Something Went Wrong');
	        }
        }else{
			return redirect('/')->with('message','Session Expired! Please Login Again.');
		}
	}
	public function deleteuser($id){
		if(session()->get("email")){
			$dataa = array(
			'status_id' 	=> 2,
			'deleted_by' 	=> session()->get('id'),
	        'deleted_at' 	=> date('Y-m-d h:i;s'),
			);
			$updated = DB::table('users')
			->where('users_id', $id)
			->update($dataa);
			 if ($updated) {
            	return redirect('/userlist')->with('message','Deleted Successfully');
            }else{
				return redirect('/userlist')->with('message','Oops! Something Went Wrong');
            }
		}else{
			return redirect('/')->with('message','Session Expired! Please Login Again.');
		}
	}
	public function personalitydatabase(){
		if(session()->get("email")){
			$task = DB::table('test')
			->where('status_id','=',1)
			->select('test_id','test_title','test_duration','test_date')
			->get();
			return view('admin.personalitydatabase', ['data' => $task]);
		}else{
			return redirect('/')->with('message','Session Expired! Please Login Again.');
		}
	}
	public function teacherstats(){
		if(session()->get("email")){
			$task = DB::table('users')
			->where('role_id','=',2)
			->where('status_id','=',1)
			->select('users_id','users_firstname')
			->get();
			return view('admin.teacherstats', ['data' => $task]);
		}else{
			return redirect('/')->with('message','Session Expired! Please Login Again.');
		}
	}
	public function testquestions(){
		if(session()->get("email")){
			return view('admin.testquestions');
		}else{
			return redirect('/')->with('message','Session Expired! Please Login Again.');
		}
	}
	public function profile(){
		$task = DB::table('users')
		->where('users_id','=',session()->get('id'))
		->where('status_id','=',1)
		->select('*')
		->first();
		return view('admin.profile',['data' => $task]);
	}
	public function submitprofile(Request $request){
		if(session()->get("email")){
			$this->validate($request, [
	    		'users_firstname'	=>'required',
	    		'users_lastname'	=>'required',
	    		'users_email'		=>'required',
	    		'users_mobileno'	=>'required',
	    		'users_password'	=>'required',
	    	]);
	    	$check = DB::table('users')
			->where('users_id','=',$request->users_id)
			->select('users_email')
			->first();
			if (isset($check->users_email)) {
				if ($check->users_email != $request->users_email) {
		    		$this->validate($request, [
		    			'users_email'		=>'unique:users,users_email',
		    		]);
		    	}
	    	}
	    	$this->validate($request, [
        		'users_picture'=>'mimes:jpeg,bmp,png|max:20024'
	        ]);
			if($request->hasFile('users_picture') && $request->users_picture->isValid()){
            	$number = rand(1,999);
				$numb = $number / 7 ;
				$extension = $request->users_picture->extension();
                $users_picture  = session()->get("email")."_".date('Y-m-d')."_.".$numb."_.".$extension;
                $users_picture = $request->users_picture->move(public_path('profileimage'),$users_picture);
				// $img->save($users_picture);
				$users_picture = session()->get("email")."_".date('Y-m-d')."_.".$numb."_.".$extension;
			}else{
	            $users_picture = 'no_image.jpg';
	        }
			$dataa = array(
	            'users_firstname' 	=> $request->users_firstname,
	            'users_lastname' 	=> $request->users_lastname,
	            'users_email' 		=> $request->users_email,
	            'users_mobileno' 	=> $request->users_mobileno,
	            'users_password' 	=> $request->users_password,
	            'users_gender' 		=> $request->users_gender,
	            'users_dob' 		=> $request->users_dob,
	            'updated_by' 		=> session()->get('id'),
	            'updated_at' 		=> date('Y-m-d h:i;s'),
	        );
        	$updated = DB::table('users')
			->where('users_id', $request->users_id)
			->update($dataa);
	        if ($users_picture != "no_image.jpg") {
	        	$pic = array(
	            	'users_picture' 	=> $users_picture,
	        	);
	        	DB::table('users')
				->where('users_id', $request->users_id)
				->update($pic);
				session()->put([
					'picture' 		=> $users_picture,
				]);
			}
	        if ($updated) {
	    		return redirect('/profile')->with('message','Profile Updated Successfully');
	        }else{
				return redirect('/profile')->with('message','Oops! Something Went Wrong');
	        }
        }else{
			return redirect('/')->with('message','Session Expired! Please Login Again.');
		}
	}
	public function quizlist(){
		if(session()->get("email")){
			$task = DB::table('quiz')
			->join('users','users.users_id','=','quiz.created_by')
			->where('quiz.status_id','=',1)
			->select('quiz.*','users.users_firstname')
			->get();
			return view('admin.quizlist', ['data' => $task]);
		 }else{
			return redirect('/')->with('message','Session Expired! Please Login Again.');
		}
	}
	public function createquiz(){
		if(session()->get("email")){
			$quiz_id = "~";
			return view('admin.createquiz',['quiz_id' => $quiz_id]);
		 }else{
			return redirect('/')->with('message','Session Expired! Please Login Again.');
		}
	}
	public function addmoretoquiz($id){
		if(session()->get("email")){
		    $details = DB::table('quizquestion')
			->where('quiz_id','=',$id)
			->where('status_id','=',1)
			->select('*')
			->get();
			return view('admin.createquiz',['details' => $details, 'quiz_id' => $id]);
		}else{
			return redirect('/')->with('message','Session Expired! Please Login Again.');
		}
	}
	public function submitquiz(Request $request){
		if(session()->get("email")){
			if ($request->quiz_id == "~") {
				$insert = array(
		            'quiz_date' 	=> date('Y-m-d'),
		            'status_id' 	=> 1,
		            'created_by' 	=> session()->get('id'),
		            'created_at' 	=> date('Y-m-d h:i;s'),
		        );
		        $created = DB::table('quiz')->insert($insert);
		        $quiz_id = DB::getPdo()->lastInsertId();
		        $insert = array(
	            'quizquestion_question' 	=> $request->quizquestion_question,
	            'quiz_id' 					=> $quiz_id,
	            'status_id' 				=> 1,
	            );
		        $created = DB::table('quizquestion')->insert($insert);
		        $quizquestion_id = DB::getPdo()->lastInsertId();
			}else{
				$quiz_id = $request->quiz_id;
				$insert = array(
	            'quizquestion_question' 	=> $request->quizquestion_question,
	            'quiz_id' 					=> $quiz_id,
	            'status_id' 				=> 1,
	            );
		        $created = DB::table('quizquestion')->insert($insert);
		        $quizquestion_id = DB::getPdo()->lastInsertId();
			}
			$images = $request->attachment;
			$index = 0 ;
	    	$filename = array();
    		foreach($images as $ima){
				$saveattachment = array();
				if ($request->has('attachment')) {
	    			$number = rand(1,999);
			        $numb = $number / 7 ;
			       	$extension = $request->attachment[$index]->getClientOriginalExtension();
		            $filename[$index] = $request->attachment[$index]->getClientOriginalName();
		            $filename[$index] = $request->attachment[$index]->move(public_path('order/'),$filename[$index]);
		            $filename[$index] = $request->attachment[$index]->getClientOriginalName();
				  	$saveattachment[] = array(
					'quizattachment_name'		=> $filename[$index],
					'quizattachment_iscorrect'	=> $request->correctanswer == $index ? $request->correctanswer : 0,
					'quizquestion_id'			=> $quizquestion_id,
					'quiz_id'					=> $quiz_id,
					'status_id' 				=> 1,
					);
			    	$index++;
	    		}
	        	DB::table('quizattachment')->insert($saveattachment);
	        }
			$redirect = "addmoretoquiz/".$quiz_id;
	      	return redirect($redirect)->with('message','Quiz Submited Successfully');
		}else{
			return redirect('/')->with('message','Session Expired! Please Login Again.');
		}
	}
	public function userstatistics(){
		if(session()->get("email")){
			$task = DB::table('users')
			->join('role','role.role_id','=','users.role_id')
			->where('users.status_id','=',1)
			->where('users.role_id','=',3)
			->select('users.*','role.role_name')
			->get();
			return view('admin.userstatistics',['data' => $task]);
		}else{
			return redirect('/')->with('message','Session Expired! Please Login Again.');
		}
	}
	public function statistics(){
		if(session()->get("email")){

			return view('admin.statistics');
		}else{
			return redirect('/')->with('message','Session Expired! Please Login Again.');
		}
	}
	public function quizdetails($id){
		if(session()->get("email")){
			 $detail = DB::table('quizquestion')
			->where('status_id','=',1)
			->where('quiz_id','=',$id)
			->orderBy('quizquestion_id','DESC')
			->select('*')
			->get();
			return view('admin.quizdetails',['detail' => $detail]);
		}else{
			return redirect('/')->with('message','Session Expired! Please Login Again.');
		}
	}
	public function oceanresultdetails(){
		if(session()->get("email")){
			return view('admin.oceanresultdetails');
		}else{
			return redirect('/')->with('message','Session Expired! Please Login Again.');
		}
	}
	public function submittestadmin(Request $request){
		if ($request->updateorsave == "save") {
			$this->validate($request, [
	    		'test_title'	    =>'required',
	    		'test_duration'	    =>'required',
	    		'test_date'		    =>'required',
	    		'test_description'	=>'required',
	    	]);
			$insert = array(
	            'test_title' 	    => $request->test_title,
	            'test_duration' 	=> $request->test_duration,
	            'test_date' 		=> $request->test_date,
	            'test_description' 	=> $request->test_description,
	            'status_id' 		=> 1,
	            'created_by' 		=> session()->get("id"),
	            'created_at' 		=> date('Y-m-d h:i;s'),
	        );
	        $created = DB::table('test')->insert($insert);
	        $test_id = DB::getPdo()->lastInsertId();
	        if (session()->get('role_id') == 1) {
	        	$questiontoken=1;
	        }else{
	        	$questiontoken=101;
	        }
	        $answerindex=1;
	        for ($i=1; $i < 61; $i++) {
	        	$questionname = "que".$i;
	        	$correctanswername = "rd".$i;
	        	$questions = array(
	                'testquestions_token'    	=> $questiontoken,
	                'testquestions_question'    => $request->$questionname,
	                'test_id' 	                => $test_id,
	                'status_id' 		        => 1,
	            );
	            DB::table('testquestions')->insert($questions);
	            $question_id = DB::getPdo()->lastInsertId();
	            $optarray = array(
	            	'0' => "A",
	            	'1' => 'B',
	            	'2' => 'C',
	            	'3' => 'D',
	            	'4' => 'E'
	        	);
	        	foreach ($optarray as $optarrays) {
	        		$answername = "ans".$answerindex;
	        		if (isset($request->$correctanswername)) {
	        			if ($request->$correctanswername == $answerindex) {
	        				$iscorrectoption = 1;	
	        			}else{
	        				$iscorrectoption = 0;
	        			}
	        		}else{
			         	$iscorrectoption = 0;
			        }
		        	$testoption = array(
		                'testanswers_answer'    => $request->$answername,
		                'testanswers_iscorrect'	=> $iscorrectoption,
		                'testquestions_id' 	    => $question_id,
		                'test_id' 	            => $test_id,
		                'status_id' 		    => 1,
		            );
		            DB::table('testanswers')->insert($testoption);
		            $answerindex++;
		        }
		        $questiontoken++;
	        }
			return redirect('/testlist')->with('message','Test Created Successfully');
		}else{
			$basic = array(
	            'test_title' 	    => $request->test_title,
	            'test_duration' 	=> $request->test_duration,
	            'test_date' 		=> $request->test_date,
	            'test_description' 	=> $request->test_description,
	            'updated_by' 		=> session()->get("id"),
	            'updated_at' 		=> date('Y-m-d h:i;s'),
	        );
	        $updated = DB::table('test')
			->where('test_id', $request->hdntestid)
			->update($basic);
	        $test_id = $request->hdntestid;
	        $answerindex=1;
	        $f = DB::table('testquestions')
			->where('status_id','=',1)
			->where('test_id', $request->hdntestid)
			->select('testquestions_id')
			->first();
			$f = $f->testquestions_id;
	        $l = DB::table('testquestions')
			->where('status_id','=',1)
			->where('test_id', $request->hdntestid)
			->orderBy('testquestions_id','DESC')
			->select('testquestions_id')
			->first();
			$l = $l->testquestions_id;
	        for ($i=$f; $i <= $l; $i++) {
	        	$questionname = "que".$i;
	        	$questions = array(
	                'testquestions_question'    => $request->$questionname,
	            );
	            $updated = DB::table('testquestions')
				->where('testquestions_id', $i)
				->update($questions);
	            DB::table('testquestions')->insert($questions);
	        }
			return redirect('/testlist')->with('message','Test Updated Successfully');
		}
	}
	//ddd
	public function showstudentresult($id){
		if(session()->get("email")){
			$getadminid = DB::table('users')
			->where('role_id','=',1)
			->where('status_id','=',1)
			->select('users_id')
			->get();
			$adminid = array();
			foreach ($getadminid as $getadminids) {
				$adminid[] = $getadminids->users_id;
			}
			$getadmintest = DB::table('test')
			->whereIn('created_by',$adminid)
			->where('status_id','=',1)
			->select('test_id')
			->get();
			$admintest = array();
			foreach ($getadmintest as $getadmintests) {
				$admintest[] = $getadmintests->test_id;
			}
			$getstudenttest = DB::table('testsubmited')
			->where('users_id','=',$id)
			->whereIn('test_id',$admintest)
			->where('status_id','=',1)
			->select('test_id')
			->get();
			$studenttest = array();
			if (isset($getstudenttest[0])) {
				$oo=8;
				$cc=14;
				$ee=20;
				$aa=14;
				$nn=2;
				$se=20;
				$iswrong=0;
				$questiontoken=1;
				foreach ($getstudenttest as $getstudenttests) {
				$testtitle = DB::table('test')
				->where('test_id','=',$getstudenttests->test_id)
				->where('status_id','=',1)
				->select('test_title')
				->first();
				$question = DB::table('testquestions')
				->where('test_id','=',$getstudenttests->test_id)
				->where('status_id','=',1)
				->select('testquestions_id','testquestions_token')
				->get();
				$totalquestion = DB::table('testquestions')
				->where('test_id','=',$getstudenttests->test_id)
				->select('testquestions_id')
				->count('testquestions_id');
				foreach ($question as $questions) {
					$studentanwer = DB::table('result')
					->where('testquestions_id','=',$questions->testquestions_id)
					->where('status_id','=',1)
					->select('testanswers_id')
					->get();
					foreach($studentanwer as $studentanwers) {
						$correctanwer = DB::table('testanswers')
						->where('testanswers_id','=',$studentanwers->testanswers_id)
						->where('status_id','=',1)
						->select('testanswers_iscorrect')
						->count('testanswers_iscorrect');
						if ($correctanwer == 0) {
							$iswrong++;
						}else{
							if ($questions->testquestions_token == 55 || $questions->testquestions_token == 11 || $questions->testquestions_token == 17 || $questions->testquestions_token == 23 || $questions->testquestions_token == 29 || $questions->testquestions_token == 35 || $questions->testquestions_token == 41 || $questions->testquestions_token == 47 || $questions->testquestions_token == 53 || $questions->testquestions_token == 59) {
								$oo++;
							}elseif ($questions->testquestions_token == 3 || $questions->testquestions_token == 9 || $questions->testquestions_token == 15 || $questions->testquestions_token == 21 || $questions->testquestions_token == 27 || $questions->testquestions_token == 33 || $questions->testquestions_token == 39 || $questions->testquestions_token == 45 || $questions->testquestions_token == 51 || $questions->testquestions_token == 57) {
								$cc++;
							}elseif ($questions->testquestions_token == 1 || $questions->testquestions_token == 7 || $questions->testquestions_token == 13 || $questions->testquestions_token == 19 || $questions->testquestions_token == 25 || $questions->testquestions_token == 31 || $questions->testquestions_token == 37 || $questions->testquestions_token == 43 || $questions->testquestions_token == 49) {
								$ee++;
							}elseif ($questions->testquestions_token == 2 || $questions->testquestions_token == 8 || $questions->testquestions_token == 14 || $questions->testquestions_token == 20 || $questions->testquestions_token == 26 || $questions->testquestions_token == 32 || $questions->testquestions_token == 38 || $questions->testquestions_token == 44 || $questions->testquestions_token == 50 || $questions->testquestions_token == 56) {
								$aa++;
							}elseif ($questions->testquestions_token == 4 || $questions->testquestions_token == 10 || $questions->testquestions_token == 16 || $questions->testquestions_token == 22 || $questions->testquestions_token == 28 || $questions->testquestions_token == 34 || $questions->testquestions_token == 40 || $questions->testquestions_token == 46 || $questions->testquestions_token == 52 || $questions->testquestions_token == 58) {
								$nn++;
							}elseif ($questions->testquestions_token == 6 || $questions->testquestions_token == 12 || $questions->testquestions_token == 18 || $questions->testquestions_token == 24 || $questions->testquestions_token == 30 || $questions->testquestions_token == 36 || $questions->testquestions_token == 42 || $questions->testquestions_token == 48 || $questions->testquestions_token == 54 || $questions->testquestions_token == 60) {
								$se++;		
							}
						}
					}
				}
			}
			return view('admin.oceanresultdetails',['oo' => $oo, 'cc' => $cc, 'ee' => $ee, 'aa' => $aa, 'nn' => $nn, 'se' => $se]);
		}else{
			return redirect('/userstatistics')->with('message','Not Yet Appear In Exam.');
		}
		}else{
			return redirect('/')->with('message','Session Expired! Please Login Again.');
		}
	}
}