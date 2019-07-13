<?php

use Illuminate\Database\Seeder;
use App\Quiz;

class QuizzesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quizzes')->truncate();

        Quiz::create(['category_id' => 3, 'question'=> "What’s 3 times 8?"]);
        Quiz::create(['category_id' => 2, 'question'=> "What is the difference between 20 and 8?"]);
        Quiz::create(['category_id' => 1, 'question'=> "What is the sum of 4 and 6?"]);
        Quiz::create(['category_id' => 4, 'question'=> "What is 20 divided by 4?"]);

        Quiz::create(['category_id' => 1, 'question'=> "What is sum of 10 and 5"]);
        Quiz::create(['category_id' => 4, 'question'=> "What is 30 divided by 5?"]);
        Quiz::create(['category_id' => 2, 'question'=> "What is difference between 10 and 2?"]);
        Quiz::create(['category_id' => 3, 'question'=>  "What’s 2 times 9?"]);

        Quiz::create(['category_id' => 2, 'question'=> "What’s difference between 40 and 25"]);
        Quiz::create(['category_id' => 1, 'question'=> "What’s sum of 12 and 7?"]);
        Quiz::create(['category_id' => 3, 'question'=> "What’s 7 times 8?"]);
        Quiz::create(['category_id' => 4, 'question'=> "What’s 25 divided by 5?"]);

        Quiz::create(['category_id' => 3, 'question'=> "What is 10 times 6?"]);
        Quiz::create(['category_id' => 2, 'question'=> "What’s difference between 35 and 23?"]);
        Quiz::create(['category_id' => 1, 'question'=> "What’s sum of 9 and 12?"]);
        Quiz::create(['category_id' => 4, 'question'=> "What’s 28 divided by 7?"]);

        Quiz::create(['category_id' => 3, 'question'=> "What’s 15 times 3?"]);
        Quiz::create(['category_id' => 2, 'question'=> "What’s difference between 34 and 18?"]);
        Quiz::create(['category_id' => 1, 'question'=> "What is sum of 6, 2 and 8?"]);
        Quiz::create(['category_id' => 4, 'question'=> "What’s result of 40 divided by 4?"]);

        Quiz::create(['category_id' => 3, 'question'=> "How many 6 are in 48?"]);
        Quiz::create(['category_id' => 2, 'question'=> "What’s difference between 56 and 39?"]);
        Quiz::create(['category_id' => 1, 'question'=> "What is sum of 12, 3, 7 and 5?"]);
        Quiz::create(['category_id' => 4, 'question'=> "What is result of 45 divided by 9?"]);

        Quiz::create(['category_id' => 3, 'question'=> "What’s 9 times 4?"]);
        Quiz::create(['category_id' => 2, 'question'=> "What is difference between 9 and 4?"]);
        Quiz::create(['category_id' => 1, 'question'=> "What is sum of 23 and 6 ?"]);
        Quiz::create(['category_id' => 4, 'question'=> "What’s 51 divided by 17?"]);

        Quiz::create(['category_id' => 3, 'question'=> "What’s 12 times 5?"]);
        Quiz::create(['category_id' => 2, 'question'=> "What’s difference of 32 and 17?"]);
        Quiz::create(['category_id' => 1, 'question'=> "What is sum of 3, 8 and 9?"]);
        Quiz::create(['category_id' => 4, 'question'=> "What’s result of 9 divided by 3?"]);

        Quiz::create(['category_id' => 3, 'question'=> "What’s 13 times 5?"]);
        Quiz::create(['category_id' => 2, 'question'=> "What’s result of subtraction between 12 and 3?"]);
        Quiz::create(['category_id' => 1, 'question'=> "What’s sum of 5, 7 and 6?"]);
        Quiz::create(['category_id' => 4, 'question'=> "What’s result of 56 divided by 7?"]);

        Quiz::create(['category_id' => 3, 'question'=> "What’s 9 times 6?"]);
        Quiz::create(['category_id' => 2, 'question'=> "What is difference between 19 and 4?"]);
        Quiz::create(['category_id' => 1, 'question'=> "What is sum of 8 and 3?"]);
        Quiz::create(['category_id' => 4, 'question'=> "What’s result of 45 divided by 3?"]);
    }
}
