<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Question;
use App\Answer;

class HomeController extends Controller
{
    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $data['questions'] = Question::all();
        return view('home',$data);
    }

    public function question($number = null)
    {
        /*
        if ($ques == null) {
            return "FUCK!";
        } else {
            //$data['questions'] = Question::all();

            $data['questions'] = Question::whereRaw("number = {$ques}")->get();
            $data['answers'] = Answer::whereRaw("question_id = {$ques}")->get();
            return view('question',$data);
        }*/
        //$data = Question::all();
        //return response()->json($data);

        $data['question'] = Question::whereRaw("number = {$number}")->get();

        $data['answers'] = Answer::whereRaw("question_id = {$number}")->get();

        $yourFirstChart["chart"] = array("type" => "bar");
        $yourFirstChart["title"] = array("text" => $data['question'][0]->description);

        $yourFirstChart["xAxis"] = array("categories" => ' ');


        $array = array();
        $array2 = array();

        $yourFirstChart['series'] = [];
        for ($i=0; $i < count($data['answers']); $i++) {
            $yourFirstChart["series"][$i] = array("name" => $data['answers'][$i]->description, "data" => [(int)$data['answers'][$i]->percentage]);
        }

        return view('question', compact('yourFirstChart'));
    }
}
