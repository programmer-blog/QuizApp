<?php

namespace App\Engine;

use Illuminate\Http\Request;
use \App\Answer;
use \Illuminate\Support\Facades\DB;

class QuizEngine
{
    private $quiz;
    private $questions;
    private $answers;

    public  function __construct()
    {
        $this->quiz = [];
        $this->questions = [];
        $this->answers = [];
    }

    /**
     * Initialize the quiz.
     *
     * @return void
     */
    public function init()
    {
        $this->getQuestions();
        $this->getAnswers();
        $this->generateQuiz();
        session(['quiz' => $this->quiz]);
        return;
    }

    /**
     * Generate a quiz by combination of questions and answers.
     *
     * @return void
     */
    private function generateQuiz()
    {
        foreach ($this->questions as $question)
        {
            $temp = [];
            $temp['question'] = $question;
            foreach ($this->answers as $answer) {
                if($question->id == $answer->question_id){
                    $temp['answer'][]  = $answer;
                }
            }
            array_push($this->quiz, $temp);
        }
    }

    /**
     * Get a listing of the 3 questions from each category.
     *
     * @return void
     */
    private function getQuestions()
    {
        $this->questions =  DB::select("SELECT t1.* FROM quizzes t1 WHERE (SELECT COUNT(*) FROM quizzes t2 WHERE t1.category_id = t2.category_id AND t1.id < t2.id) <= 2 ORDER BY t1.category_id asc, RAND()");
    }

    /**
     * Randomize a list of questions from database.
     *
     * @return void
     */

    private function randomizeQuestions() {
        $this->questions = shuffle($this->questions);
    }

    /**
     * Get answers of the each question from each category.
     *
     * @return void
     */
    private function getAnswers()
    {
        $questionIds = array_column($this->questions , 'id');
        $this->answers = Answer::whereIn('question_id',$questionIds)->get();
    }

    /**
     * @param $scores
     * @param $quiz
     */
    public function calculateResult($scores, $quiz){
        $score = 0;
        foreach($quiz as $key => $question){
           for($i=0; $i<count($scores); $i++){
               if($scores[$i]['quiz']['id'] == $question['question']->id ){ //check correct answer
                    // in progress
               }
            }
        }
        return;
    }
}
