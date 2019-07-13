<?php

namespace App\Http\Controllers;

use \App\Engine\QuizEngine;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Session;

class QuizController extends Controller
{
    private $quizEngine;
    const TOTALQUESTIONS =  11;
    private $userResponse = [];

    public  function __construct(QuizEngine $quizEngine)
    {
        $this->quizEngine = $quizEngine;
        $this->userResponse= [];
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return void
     */
    public function index()
    {
        $this->quizEngine->init();
        return view('quiz.index');
    }

    /**
     *  Generate Nest question
     * @param Request $request
     * @return false|string
     */
    public function fetchNextQuestion(Request $request)
    {
        $nextQuestion = [];
        $next_question_id =  $request->input('next_question_id') ?? 0;
        $nextQuestion['btnfinish'] = false;
        $nextQuestion['redirect'] = 0;
        If($next_question_id >= (self::TOTALQUESTIONS)){
            $nextQuestion['btnfinish'] = true;
        }

       If($next_question_id <= (self::TOTALQUESTIONS)){
            if ($request->session()->has('quiz')) {
                $quiz = $request->session()->get('quiz');
                $nextQuestion['question_id'] = $quiz[$next_question_id]['question']->id;
                $nextQuestion['question'] = $quiz[$next_question_id]['question']->question;
                foreach ($quiz[$next_question_id]['answer'] as $key =>$answer) {
                    $nextQuestion[$key]['option_id'] = $answer->id;
                    $nextQuestion[$key]['question_id'] = $answer->question_id;
                    $nextQuestion[$key]['option'] = $answer->option;
                }
                $next_question_id++;
            }
        }else {
            $nextQuestion['redirect'] = 1;
        }
        $nextQuestion['nextQuestionId'] = $next_question_id;
        return json_encode($nextQuestion);
    }

    /** *
     * Save user response
     */
    public function saveUserResponse(Request $request)
    {
        $question_id = $request->input('question_id');
        $answer = $request->input('answer');
        $this->userResponse['quiz']['id'] = $question_id;
        $this->userResponse['quiz']['answer_id'] = $answer;
        Session::push('scores', $this->userResponse);
        return json_encode(array('success'=>true, 'status'=>200));
    }

    /**
     *  Generate Results: In Progress
     * @param Request $request
     * @return array|mixed
     */

    public function showResult(Request $request)
    {
        $user_id = $request->user()->id;
        $quiz = $request->session()->get('quiz');
        $scores = [];
        if ($request->session()->has('scores')) {
            $scores = $request->session()->get('scores');
            $this->quizEngine->calculateResult($scores, $quiz);
        }
        echo "Work in Progress";
        exit;
        return $scores;
    }

    /**
     *  View top results
     * @param Request $request
     */
    public function topResults(Request $request)
    {
        echo "Work in Progress";
        exit;
    }
}
