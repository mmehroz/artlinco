<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use DB;
use DataTables;
use Carbon\Carbon;
use Image;

class studentController extends Controller
{
	public function studenttestlist(){
		if(session()->get("email")){
			 $getcreatorid = DB::table('users')
			->where('status_id','=',1)
			->where('users_id','=',session()->get('id'))
			->select('created_by')
			->get()->toArray();
			 $getadminid = DB::table('users')
			->where('status_id','=',1)
			->where('role_id','=',1)
			->select('users_id')
			->get()->toArray();
			$mergeid = array_merge($getcreatorid, $getadminid);
			$ids = array();
			foreach ($mergeid as $mergeids) {
				if (isset($mergeids->created_by)) {
					$ids[] = $mergeids->created_by;
				}else{
					$ids[] = $mergeids->users_id;
				}
			}
			$detail = DB::table('test')
			->where('status_id','=',1)
			->whereIn('created_by',$ids)
			->orderBy('test_id','DESC')
			->select('*')
			->get();
			if(isset($detail)){
    			return view('student.studenttestlist',['data' => $detail]);
		    }else{
		        $detail = array();
		        return view('student.studenttestlist',['data' => $detail]);
		    }
		}else{
			return redirect('/')->with('message','Session Expired! Please Login Again.');
		}
	}
	public function startstudenttest($testid){
		if(session()->get("email")){
			$question = DB::table('testquestions')
			->where('status_id','=',1)
			->where('test_id','=',$testid)
			->select('*')
			->get();
	    	return view('student.test',['question' => $question, 'result' => "New"]);
	   }else{
			return redirect('/')->with('message','Session Expired! Please Login Again.');
		}
	}
	public function submitstudenttest(Request $request){
		$length = $request->hdnlength+1;
		for ($art=1; $art < $length ; $art++) {
			$setdynamicrequest = "answers".$art;
			$getanswerandquestion = explode("~", $request->$setdynamicrequest);
			$test_id = DB::table('testquestions')
			->where('testquestions_id','=',$getanswerandquestion[1])
			->select('test_id')
			->first();
			$arrname = "insert".$art;
			 $arrname= array(
	            'testquestions_id' 	=> $getanswerandquestion[1],
	            'testanswers_id' 	=> $getanswerandquestion[0],
	            'status_id' 		=> 1,
	            'created_by' 		=> session()->get('id'),
	            'created_at' 		=> date('Y-m-d h:i;s'),
	        );
	        $created = DB::table('result')->insert($arrname);
		}
		$test = array(
            'test_id' 		=> $test_id->test_id,
            'users_id' 		=> session()->get('id'),
            'status_id' 	=> 1,
            'created_at' 	=> date('Y-m-d h:i;s'),
        );
        DB::table('testsubmited')->insert($test);
        $submit_id = DB::getPdo()->lastInsertId();
        $question = DB::table('testquestions')
		->where('test_id','=',$test_id->test_id)
		->where('status_id','=',1)
		->select('testquestions_id')
		->get();
		$totalquestion = DB::table('testquestions')
		->where('test_id','=',$test_id->test_id)
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
			$correctanwer = DB::table('testanswers')
			->where('testanswers_id','=',$studentanwer->testanswers_id)
			->where('status_id','=',1)
			->select('testanswers_iscorrect')
			->count('testanswers_iscorrect');
			if ($correctanwer == 0) {
				$iswrong++;
			}else{
				$iscorrect++;
			}
		}
		$overallpercentage = $iscorrect/$totalquestion*100;
		if ($overallpercentage < 60) {
			$redirect = "/finishtest/";
		}else{
			$getcreatorid = DB::table('test')
			->where('test_id','=',$test_id->test_id)
			->where('status_id','=',1)
			->select('created_by')
			->first();
			$checkocean = DB::table('users')
			->where('users_id','=',$getcreatorid->created_by)
			->where('status_id','=',1)
			->select('users_id')
			->count('users_id');
			if ($checkocean == 1) {
				$testtitle = DB::table('test')
				->where('test_id','=',$test_id->test_id)
				->where('status_id','=',1)
				->select('test_title')
				->first();
				$question = DB::table('testquestions')
				->where('test_id','=',$test_id->test_id)
				->where('status_id','=',1)
				->select('testquestions_id','testquestions_token')
				->get();
				$totalquestion = DB::table('testquestions')
				->where('test_id','=',$test_id->test_id)
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
				$redirect = "/showresultdetails/".$submit_id;
			}
		}
		return redirect($redirect);
	}
	public function finishtest(){
		if(session()->get("email")){
			return view('student.finishtest');
	   }else{
			return redirect('/')->with('message','Session Expired! Please Login Again.');
		}
	}
	public function lock(){
		if(session()->get("email")){
		 	$dataa = array(
	            'status_id'	=> 2,
	        );
	        $updated = DB::table('users')
			->where('users_id', session()->get('id'))
			->update($dataa);
	       	return redirect('/');
	    }else{
			return redirect('/')->with('message','Session Expired! Please Login Again.');
		}
	}
	public function studentquiz(){
		if(session()->get("email")){
			 $quiz_id = DB::table('quiz')
			->where('status_id','=',1)
			->orderBy('quiz_id','DESC')
			->select('*')
			->first();
			 $detail = DB::table('quizquestion')
			->where('status_id','=',1)
			->where('quiz_id','=',$quiz_id->quiz_id)
			->orderBy('quizquestion_id','DESC')
			->select('*')
			->get();
			return view('student.studentquiz',['detail' => $detail]);
		}else{
			return redirect('/')->with('message','Session Expired! Please Login Again.');
		}
	}
	public function testnote($testid){
		if(session()->get("email")){
			return view('student.testnote',['testid' => $testid]);
		}else{
			return redirect('/')->with('message','Session Expired! Please Login Again.');
		}
	}
	public function studenttestshare($test,$teacher){
		if(session()->get("email") && session()->get("role_id") == 3){
			$question = DB::table('testquestions')
			->where('status_id','=',1)
			->where('test_id','=',$test)
			->select('*')
			->get();
	    	return view('student.test',['question' => $question, 'result' => "New"]);
	   	}else{
	   		return view('login',['test' => $test,'teacher' => $teacher]);
		}
	}
	public function studenttestsharesignup($test,$teacher){
		return view('teacher.signup',['test' => "$test", 'teacher' => "$teacher"]);
	}
}