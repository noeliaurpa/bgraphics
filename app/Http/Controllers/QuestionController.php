<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;

use App\Http\Requests;

use App\Question;
use App\Answer;

class QuestionController extends Controller
{

    public function index()
    {
        $data['questions'] = Question::all();
        return view('survey',$data);
    }

    public function question($number = null)
    {
        //pregunta que estoy visualizando
        $data['question'] = Question::whereRaw("number = {$number}")->get();
        //respuestas de la pregunta que estoy visualizando
        $data['answers'] = Answer::whereRaw("question_id = {$number}")->get();

        $yourFirstChart["chart"] = array("type" => "bar");
        $yourFirstChart["title"] = array("text" => $data['question'][0]->description);

        $yourFirstChart["xAxis"] = array("categories" => ' ');
        $yourFirstChart["yAxis"] = array("title" => array("text" => "Valores"));

        $yourFirstChart['series'] = [];
        for ($i=0; $i < count($data['answers']); $i++) {
            $yourFirstChart["series"][$i] = array("name" => $data['answers'][$i]->description, "data" => [(int)$data['answers'][$i]->percentage]);
        }

        return view('question', compact('yourFirstChart'), $data);
    }

    public function recalc($number = null)
    {
        //respuestas, menos el toquen
        $data['newAnswers'] = Request::except('_token');
        //pregunta que estoy recalculando
        $data['question'] = Question::whereRaw("number = {$number}")->get();
        //respuestas por pregunta
        $data['answers'] = Answer::whereRaw("question_id = {$number}")->get();

        $yourFirstChart["chart"] = array("type" => "bar");
        $yourFirstChart["title"] = array("text" => $data['question'][0]->description);

        $yourFirstChart["xAxis"] = array("categories" => ' ');
        $yourFirstChart["yAxis"] = array("title" => array("text" => "Valores"));

        $yourFirstChart['series'] = [];
        for ($i=0; $i < count($data['answers']); $i++) {
            $yourFirstChart["series"][$i] = array("name" => $data['answers'][$i]->description, "data" => [(int)$data['newAnswers'][$i]]);
            //ME CAGO EN LA MIERDA CON ESTA LINEA QUE SIGUE
            $data['newAnswers'][$i] = array("description" => $data['answers'][$i]->description, "percentage" => (int)$data['newAnswers'][$i]);
        }
        return view('question', compact('yourFirstChart'), $data);
    }

}
