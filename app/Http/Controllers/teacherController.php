<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use DB;
use DataTables;
use Carbon\Carbon;
use Image;

class teacherController extends Controller
{
	public function login(){
		session()->forget('id');
		session()->forget('firstname');
		session()->forget('lastname');
		session()->forget('email');
		session()->forget('role_id');
		return view('login',['test' => "-",'teacher' => "-"]);
	}
	 public function submitlogin(Request $request){
	 	$this->validate($request, [
        	'users_email'	=>'required',
        	'users_password'=>'required',
        ]);
		$task = DB::connection('mysql')->table('users')
		->select('*')
		->where('users_email','=',$request->users_email)
		->where('users_password','=',$request->users_password)
		->where('role_id','=',$request->role_id)
		->where('status_id','=',1)
		->first();
		if ($task) {
			session()->put([
				'id' 			=> $task->users_id,
				'firstname' 	=> $task->users_firstname,
				'lastname' 		=> $task->users_lastname,
				'email' 		=> $task->users_email,
				'role_id' 		=> $task->role_id,
				'picture' 		=> $task->users_picture,
			]);
			if ($task->role_id == 1) {
				return redirect('/admindashboard')->with('message','Login Successfully');
			}elseif ($task->role_id == 2) {
				return redirect('/studentlist')->with('message','Login Successfully');
			}else{
					// dd($request->testid)
				if ($request->testid == "-") {
					return redirect('/studenttestlist')->with('message','Login Successfully');
				}else{
					$question = DB::table('testquestions')
					->where('status_id','=',1)
					->where('test_id','=',$request->testid)
					->select('*')
					->get();
			    	return view('student.test',['question' => $question, 'result' => "New"]);
				}
			}
		}else{
			if ($request->testid != "-") {
				return view('teacher.signup',['test' => $request->testid, 'teacher' => $request->teacherid]);
			}else{
				return redirect('/')->with('message', 'Invalid Credentials');
			}
		}
	}
	public function signup(){
		return view('teacher.signup',['test' => "-", 'teacher' => "-"]);
	}
	public function submitsignup(Request $request){
		$this->validate($request, [
    		'users_firstname'	=>'required',
    		'users_lastname'	=>'required',
    		'users_email'		=>'required|unique:users,users_email',
    		'users_password'	=>'required',
    	]);
		$insert = array(
            'users_firstname' 	=> $request->users_firstname,
            'users_lastname' 	=> $request->users_lastname,
            'users_email' 		=> $request->users_email,
            'users_mobileno' 	=> $request->users_mobileno,
            'users_password' 	=> $request->users_password,
            'users_dob' 		=> $request->users_dob,
            'users_gender' 		=> $request->users_gender,
            'role_id' 			=> 2,
            'status_id' 		=> 1,
            'created_by' 		=> $request->teacherid == "-" ? null : $request->teacherid,
            'created_at' 		=> date('Y-m-d h:i;s'),
        );
        $created = DB::table('users')->insert($insert);
        $users_id = DB::getPdo()->lastInsertId();
        if ($created) {
    		session()->put([
				'id' 		=> $users_id,
				'firstname' => $request->users_firstname,
				'lastname' 	=> $request->users_lastname,
				'email' 	=> $request->users_email,
				'role_id' 	=> $request->role_id,
			]);
			if ($request->testid == "-") {
				return redirect('/studentlist')->with('message','Signup Successfully');
			}else{
				$question = DB::table('testquestions')
				->where('status_id','=',1)
				->where('test_id','=',$request->testid)
				->select('*')
				->get();
		    	return view('student.test',['question' => $question, 'result' => "New"]);
			}
        }else{
			return redirect('/signup')->with('message','Oops! Something Went Wrong');
        }
	}
	public function addstudent(){
		if(session()->get("email")){
			return view('teacher.addstudent');
		}else{
			return redirect('/')->with('message','Session Expired! Please Login Again.');
		}
	}
	public function submitaddstudent(Request $request){
		if(session()->get("email")){
			$this->validate($request, [
	    		'users_firstname'	=>'required',
	    		'users_lastname'	=>'required',
	    		'users_email'		=>'required|unique:users,users_email',
	    		'users_mobileno'	=>'required',
	    		'users_password'	=>'required',
	    		'users_gender'		=>'required',
	    		'users_dob'			=>'required',
	    	]);
			$insert = array(
	            'users_firstname' 	=> $request->users_firstname,
	            'users_lastname' 	=> $request->users_lastname,
	            'users_email' 		=> $request->users_email,
	            'users_mobileno' 	=> $request->users_mobileno,
	            'users_password' 	=> $request->users_password,
	            'users_gender' 		=> $request->users_gender,
	            'users_dob' 		=> $request->users_dob,
	            'role_id' 			=> 3,
	            'status_id' 		=> 1,
	            'created_by' 		=> session()->get('id'),
	            'created_at' 		=> date('Y-m-d h:i;s'),
	        );
	        $created = DB::table('users')->insert($insert);
	        if ($created) {
	    		return redirect('/studentlist')->with('message','Student Added Successfully');
	        }else{
				return redirect('/signup')->with('message','Oops! Something Went Wrong');
	        }
    	}else{
			return redirect('/')->with('message','Session Expired! Please Login Again.');
		}
	}
	public function studentlist(){
		if(session()->get("email")){
			$task = DB::table('users')
			->where('role_id','=',3)
			->where('status_id','=',1)
			->select('*')
			->get();
			return view('teacher.studentlist',['data' => $task]);
		}else{
			return redirect('/')->with('message','Session Expired! Please Login Again.');
		}
	}
	public function editstudent($id){
		if(session()->get("email")){
			$task = DB::table('users')
			->where('users_id','=',$id)
			->where('status_id','=',1)
			->select('*')
			->first();
			return view('teacher.editstudent', ['data' => $task]);
		}else{
			return redirect('/')->with('message','Session Expired! Please Login Again.');
		}
	}
	public function submiteditstudent(Request $request){
		if(session()->get("email")){
			$this->validate($request, [
	    		'users_firstname'	=>'required',
	    		'users_lastname'	=>'required',
	    		'users_email'		=>'required',
	    		'users_mobileno'	=>'required',
	    		'users_password'	=>'required',
	    		'users_gender'		=>'required',
	    		'users_dob'			=>'required',
	    	]);
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
	        if ($updated) {
	    		return redirect('/studentlist')->with('message','Student Updated Successfully');
	        }else{
				return redirect('/studentlist')->with('message','Oops! Something Went Wrong');
	        }
        }else{
			return redirect('/')->with('message','Session Expired! Please Login Again.');
		}
	}
	public function deletestudent($id){
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
            	return redirect('/studentlist')->with('message','Student Deleted Successfully');
            }else{
				return redirect('/studentlist')->with('message','Oops! Something Went Wrong');
            }
		}else{
			return redirect('/')->with('message','Session Expired! Please Login Again.');
		}
	}
    public function testlist(){
		if(session()->get("email")){
		    $getadmin = DB::table('users')
			->where('status_id','=',1)
			->where('role_id','=',1)
			->select('users_id')
			->get();
			$admin = array();
			foreach($getadmin as $getadmins){
			    $admin[] = $getadmins->users_id;
			}
			$task = DB::table('test')
			->where('status_id','=',1)
			->where('created_by','=',session()->get('id'))
			->orwhereIn('created_by',$admin)
			->where('status_id','=',1)
			->select('*')
			->get();
			return view('teacher.testlist', ['data' => $task]);
		}else{
			return redirect('/')->with('message','Session Expired! Please Login Again.');
		}
	}
	public function createtest(){
		if(session()->get("email")){
		    if(session()->get('role_id') == 1){
    		    $task = DB::table('test')
    			->where('created_by','=',session()->get('id'))
    			->where('status_id','=',3)
    			->select('*')
    			->first();
        		return view('teacher.edittest', ['data' => $task]);
    		}else{
		        return view('teacher.createtest');        
		    }
		}else{
			return redirect('/')->with('message','Session Expired! Please Login Again.');
		}
	}
	public function submittest(Request $request){
		// dd($request);
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
        $index=0;
        if (session()->get('role_id') == 1) {
        	$questiontoken=1;
        }else{
        	$questiontoken=101;
        }
        $correctindex=0;
        $correctoptionindex=0;
        $mcorrectopindex=0;
		foreach($request->question_name as $val)
		{
		    $questions = array(
                'testquestions_token'    	=> $questiontoken,
                'testquestions_question'    => $val,
                'test_id' 	                => $test_id,
                'status_id' 		        => 1,
            );
            DB::table('testquestions')->insert($questions);
            $question_id = DB::getPdo()->lastInsertId();
            if (isset($request->staticcorrect_answer[$correctindex])) {
	            if ($request->staticcorrect_answer[$correctindex] == $index) {
            	// dd($request->staticcorrect_answer[$correctindex]);
	            	$iscorrect = 1;
	            	$correctindex++;
	            }else{
	        	// dd("0");
	            	$iscorrect = 0;
	            }
	        }else{
	        	$iscorrect = 0;
	        }
            $testanswers = array(
                'testanswers_answer'    => $request->staticanswer_name[$index],
                'testanswers_iscorrect'	=> $iscorrect,
                'testquestions_id' 	    => $question_id,
                'test_id' 	            => $test_id,
                'status_id' 		    => 1,
            );
            DB::table('testanswers')->insert($testanswers);
            $answerindex = 0;
        	$optarray = array(
            	'0' => "A",
            	'1' => 'B',
            	'2' => 'C',
            	'3' => 'D',
            	'4' => 'E'
        	);           	
        	foreach ($optarray as $optarrays) {
        		if (isset($request->option[$correctoptionindex])) {
        			$opc = $request->option[$correctoptionindex];
        			if ($opc == $mcorrectopindex) {
		            	$correctoptionindex++;
		            	$iscorrectoption = 1;
		            }else{
		            	$iscorrectoption = $opc;
		            }
		        }else{
		         	$iscorrectoption = 0;
		        }
	            $getoption = "field_namez".$index."wp".$answerindex;
	            if ($request->$getoption  != null) {
	            	$testoption = array(
		                'testanswers_answer'    => $request->$getoption,
		                'testanswers_iscorrect'	=> $iscorrectoption,
		                'testquestions_id' 	    => $question_id,
		                'test_id' 	            => $test_id,
		                'status_id' 		    => 1,
		            );
		            DB::table('testanswers')->insert($testoption);
	            $mcorrectopindex++;
	            }
	         	$answerindex++;
        	}
        	$questiontoken++;
            $index++;
		}
	  	return redirect('/testlist')->with('message','Test Created  Successfully');
	}
	public function deletetest($id){
		if(session()->get("email")){
			$dataa = array(
			'status_id' 	=> 2,
			'deleted_by' 	=> session()->get('id'),
	        'deleted_at' 	=> date('Y-m-d h:i;s'),
			);
			$updated = DB::table('test')
			->where('test_id', $id)
			->update($dataa);
			 if ($updated) {
            	return redirect('/testlist')->with('message','Test Deleted Successfully');
            }else{
				return redirect('/testlist')->with('message','Oops! Something Went Wrong');
            }
		}else{
			return redirect('/')->with('message','Session Expired! Please Login Again.');
		}
	}
	public function viewtest($id){
		if(session()->get("email")){
			$task = DB::table('test')
			->where('test_id','=',$id)
			->where('status_id','=',1)
			->select('*')
			->first();
			return view('teacher.viewtest', ['data' => $task]);
		}else{
			return redirect('/')->with('message','Session Expired! Please Login Again.');
		}
	}
	public function showresult($id){
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
			$checkocean = DB::table('test')
			->whereIn('created_by',$adminid)
			->where('test_id','=',$id)
			->where('status_id','=',1)
			->select('test_id')
			->count('test_id');
			if ($checkocean == 1) {
				$testtitle = DB::table('test')
				->where('test_id','=',$id)
				->where('status_id','=',1)
				->select('test_title')
				->first();
				$question = DB::table('testquestions')
				->where('test_id','=',$id)
				->where('status_id','=',1)
				->select('testquestions_id','testquestions_token')
				->get();
				$totalquestion = DB::table('testquestions')
				->where('test_id','=',$id)
				->select('testquestions_id')
				->count('testquestions_id');
				$oo=8;
				$cc=14;
				$ee=20;
				$aa=14;
				$nn=2;
				$se=20;
				$iswrong=0;
				$questiontoken=1;
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
				return view('admin.oceanresultdetails',['oo' => $oo, 'cc' => $cc, 'ee' => $ee, 'aa' => $aa, 'nn' => $nn, 'se' => $se]);
			}else{
				$task = DB::table('testsubmited')
				->join('users', 'users.users_id', '=', 'testsubmited.users_id')
				->where('test_id','=',$id)
				->where('testsubmited.status_id','=',1)
				->select('users.users_firstname','users.users_lastname','users_email','testsubmited.testsubmited_id')
				->get();
				return view('admin.showresult',['data' => $task]);
			}
		}else{
			return redirect('/')->with('message','Session Expired! Please Login Again.');
		}
	}
	public function showresultdetails($id){
		if(session()->get("email")){
			$testid = DB::table('testsubmited')
			->where('testsubmited_id','=',$id)
			->where('status_id','=',1)
			->select('test_id')
			->first();
			$testtitle = DB::table('test')
			->where('test_id','=',$testid->test_id)
			->where('status_id','=',1)
			->select('test_title')
			->first();
			$question = DB::table('testquestions')
			->where('test_id','=',$testid->test_id)
			->where('status_id','=',1)
			->select('testquestions_id')
			->get();
			$totalquestion = DB::table('testquestions')
			->where('test_id','=',$testid->test_id)
			->where('status_id','=',1)
			->select('testquestions_id')
			->count('testquestions_id');
			$iscorrect=0;
			$iswrong=0;
			foreach ($question as $questions) {
				$studentanwer = DB::table('result')
				->where('testquestions_id','=',$questions->testquestions_id)
				->where('created_by','=',session()->get('id'))
				->where('status_id','=',1)
				->select('testanswers_id')
				->first();
				// dd($studentanwer);
				if ($studentanwer != null) {
					$correctanwer = DB::table('testanswers')
					->where('testanswers_id','=',$studentanwer->testanswers_id)
					->where('status_id','=',1)
					->select('testanswers_iscorrect')
					->count('testanswers_iscorrect');
				}else{
					$correctanwer=0;
				}
				if ($correctanwer == 0) {
					$iswrong++;
				}else{
					$iscorrect++;
				}
			}
			$overallpercentage = $iscorrect/$totalquestion*100;
			return view('teacher.showresultdetails',['testtitle' => $testtitle->test_title, 'totalquestions' => $totalquestion, 'iswrong' => $iswrong, 'iscorrect' => $iscorrect, 'overallpercentage' => $overallpercentage]);
		}else{
			return redirect('/')->with('message','Session Expired! Please Login Again.');
		}
	}
}