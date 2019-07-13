<?php

use Illuminate\Database\Seeder;
use App\Answer;

class AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answers')->truncate();
        Answer::create(['question_id' => 1, 'option' => 24, 'is_correct_option' => 'yes']);
        Answer::create(['question_id' => 1, 'option' => 20, 'is_correct_option' => 'no']);
        Answer::create(['question_id' => 1, 'option' => 12, 'is_correct_option' => 'no']);

        Answer::create(['question_id' => 2, 'option' => 10, 'is_correct_option' => 'no']);
        Answer::create(['question_id' => 2, 'option' => 11, 'is_correct_option' => 'no']);
        Answer::create(['question_id' => 2, 'option' => 12, 'is_correct_option' => 'yes']);

        Answer::create(['question_id' =>3, 'option' => 9, 'is_correct_option' => 'no']);
        Answer::create(['question_id' =>3, 'option' => 10, 'is_correct_option' => 'yes']);
        Answer::create(['question_id' =>3, 'option' => 8, 'is_correct_option' => 'no']);

        Answer::create(['question_id' =>4, 'option' => 6, 'is_correct_option' => 'no']);
        Answer::create(['question_id' =>4, 'option' => 5, 'is_correct_option' => 'yes']);
        Answer::create(['question_id' =>4, 'option' => 3, 'is_correct_option' => 'no']);

        Answer::create(['question_id' =>5, 'option' => 12, 'is_correct_option' => 'no']);
        Answer::create(['question_id' =>5, 'option' => 13, 'is_correct_option' => 'no']);
        Answer::create(['question_id' =>5, 'option' => 15, 'is_correct_option' => 'yes']);

        Answer::create(['question_id' => 6, 'option' => 5, 'is_correct_option' => 'no']);
        Answer::create(['question_id' => 6, 'option' => 6, 'is_correct_option' => 'yes']);
        Answer::create(['question_id' => 6, 'option' => 7, 'is_correct_option' => 'no']);

        Answer::create(['question_id' => 7, 'option' => 8, 'is_correct_option' => 'yes']);
        Answer::create(['question_id' => 7, 'option' => 5, 'is_correct_option' => 'no']);
        Answer::create(['question_id' => 7, 'option' => 6, 'is_correct_option' => 'no']);

        Answer::create(['question_id' => 8, 'option' => 13, 'is_correct_option' => 'no']);
        Answer::create(['question_id' => 8, 'option' => 12, 'is_correct_option' => 'no']);
        Answer::create(['question_id' => 8, 'option' => 18, 'is_correct_option' => 'yes']);

        Answer::create(['question_id' => 9, 'option' => 10, 'is_correct_option' => 'no']);
        Answer::create(['question_id' => 9, 'option' => 15, 'is_correct_option' => 'yes']);
        Answer::create(['question_id' => 9, 'option' => 17, 'is_correct_option' => 'no']);

        Answer::create(['question_id' => 10, 'option' => 14, 'is_correct_option' => 'no']);
        Answer::create(['question_id' => 10, 'option' => 23, 'is_correct_option' => 'no']);
        Answer::create(['question_id' => 10, 'option' => 19, 'is_correct_option' => 'yes']);

        Answer::create(['question_id' => 11, 'option' => 56, 'is_correct_option' => 'yes']);
        Answer::create(['question_id' => 11, 'option' => 59, 'is_correct_option' => 'no']);
        Answer::create(['question_id' => 11, 'option' => 60, 'is_correct_option' => 'no']);

        Answer::create(['question_id' => 12, 'option' => 4, 'is_correct_option' => 'no']);
        Answer::create(['question_id' => 12, 'option' => 3, 'is_correct_option' => 'no']);
        Answer::create(['question_id' => 12, 'option' => 5, 'is_correct_option' => 'yes']);

        Answer::create(['question_id' => 13, 'option' => 70, 'is_correct_option' => 'no']);
        Answer::create(['question_id' => 13, 'option' => 64, 'is_correct_option' => 'no']);
        Answer::create(['question_id' => 13, 'option' => 60, 'is_correct_option' => 'yes']);

        Answer::create(['question_id' => 14, 'option' => 11, 'is_correct_option' => 'no']);
        Answer::create(['question_id' => 14, 'option' => 12, 'is_correct_option' => 'yes']);
        Answer::create(['question_id' => 14, 'option' => 13, 'is_correct_option' => 'no']);

        Answer::create(['question_id' => 15, 'option' => 21, 'is_correct_option' => 'yes']);
        Answer::create(['question_id' => 15, 'option' => 23, 'is_correct_option' => 'no']);
        Answer::create(['question_id' => 15, 'option' => 31, 'is_correct_option' => 'no']);

        Answer::create(['question_id' => 16, 'option' => 6, 'is_correct_option' => 'no']);
        Answer::create(['question_id' => 16, 'option' => 4, 'is_correct_option' => 'yes']);
        Answer::create(['question_id' => 16, 'option' => 3, 'is_correct_option' => 'no']);

        Answer::create(['question_id' => 17, 'option' => 45, 'is_correct_option' => 'yes']);
        Answer::create(['question_id' => 17, 'option' => 35, 'is_correct_option' => 'no']);
        Answer::create(['question_id' => 17, 'option' => 65, 'is_correct_option' => 'no']);

        Answer::create(['question_id' => 18, 'option' => 12, 'is_correct_option' => 'no']);
        Answer::create(['question_id' => 18, 'option' => 16, 'is_correct_option' => 'yes']);
        Answer::create(['question_id' => 18, 'option' => 18, 'is_correct_option' => 'no']);

        Answer::create(['question_id' => 19, 'option' => 14, 'is_correct_option' => 'no']);
        Answer::create(['question_id' => 19, 'option' => 16, 'is_correct_option' => 'yes']);
        Answer::create(['question_id' => 19, 'option' => 13, 'is_correct_option' => 'no']);

        Answer::create(['question_id' => 20, 'option' => 10, 'is_correct_option' => 'yes']);
        Answer::create(['question_id' => 20, 'option' => 12, 'is_correct_option' => 'no']);
        Answer::create(['question_id' => 20, 'option' => 9, 'is_correct_option' => 'no']);

        Answer::create(['question_id' => 21, 'option' => 7, 'is_correct_option' => 'no']);
        Answer::create(['question_id' => 21, 'option' => 6, 'is_correct_option' => 'no']);
        Answer::create(['question_id' => 21, 'option' => 8, 'is_correct_option' => 'yes']);

        Answer::create(['question_id' => 22, 'option' => 23, 'is_correct_option' => 'no']);
        Answer::create(['question_id' => 22, 'option' => 13, 'is_correct_option' => 'no']);
        Answer::create(['question_id' => 22, 'option' => 17, 'is_correct_option' => 'yes']);

        Answer::create(['question_id' => 23, 'option' => 30, 'is_correct_option' => 'no']);
        Answer::create(['question_id' => 23, 'option' => 28, 'is_correct_option' => 'no']);
        Answer::create(['question_id' => 23, 'option' => 27, 'is_correct_option' => 'yes']);

        Answer::create(['question_id' => 24, 'option' => 5, 'is_correct_option' => 'yes']);
        Answer::create(['question_id' => 24, 'option' => 6, 'is_correct_option' => 'no']);
        Answer::create(['question_id' => 24, 'option' => 7, 'is_correct_option' => 'no']);

        Answer::create(['question_id' => 25, 'option' => 32, 'is_correct_option' => 'no']);
        Answer::create(['question_id' => 25, 'option' => 36, 'is_correct_option' => 'yes']);
        Answer::create(['question_id' => 25, 'option' => 28, 'is_correct_option' => 'no']);

        Answer::create(['question_id' => 26, 'option' => 4, 'is_correct_option' => 'no']);
        Answer::create(['question_id' => 26, 'option' => 3, 'is_correct_option' => 'no']);
        Answer::create(['question_id' => 26, 'option' => 5, 'is_correct_option' => 'yes']);

        Answer::create(['question_id' => 27, 'option' => 31, 'is_correct_option' => 'no']);
        Answer::create(['question_id' => 27, 'option' => 28, 'is_correct_option' => 'no']);
        Answer::create(['question_id' => 27, 'option' => 29, 'is_correct_option' => 'yes']);

        Answer::create(['question_id' => 28, 'option' => 3, 'is_correct_option' => 'yes']);
        Answer::create(['question_id' => 28, 'option' => 5, 'is_correct_option' => 'no']);
        Answer::create(['question_id' => 28, 'option' => 7, 'is_correct_option' => 'no']);

        Answer::create(['question_id' => 29, 'option' => 62, 'is_correct_option' => 'no']);
        Answer::create(['question_id' => 29, 'option' => 60, 'is_correct_option' => 'yes']);
        Answer::create(['question_id' => 29, 'option' => 65, 'is_correct_option' => 'no']);

        Answer::create(['question_id' => 30, 'option' => 13, 'is_correct_option' => 'no']);
        Answer::create(['question_id' => 30, 'option' => 15, 'is_correct_option' => 'yes']);
        Answer::create(['question_id' => 30, 'option' => 16, 'is_correct_option' => 'no']);

        Answer::create(['question_id' => 31, 'option' => 21, 'is_correct_option' => 'no']);
        Answer::create(['question_id' => 31, 'option' => 20, 'is_correct_option' => 'yes']);
        Answer::create(['question_id' => 31, 'option' => 19, 'is_correct_option' => 'no']);

        Answer::create(['question_id' => 32, 'option' => 2, 'is_correct_option' => 'no']);
        Answer::create(['question_id' => 32, 'option' => 5, 'is_correct_option' => 'no']);
        Answer::create(['question_id' => 32, 'option' => 3, 'is_correct_option' => 'yes']);

        Answer::create(['question_id' => 33, 'option' => 70, 'is_correct_option' => 'no']);
        Answer::create(['question_id' => 33, 'option' => 60, 'is_correct_option' => 'no']);
        Answer::create(['question_id' => 33, 'option' => 65, 'is_correct_option' => 'yes']);

        Answer::create(['question_id' => 34, 'option' => 7, 'is_correct_option' => 'no']);
        Answer::create(['question_id' => 34, 'option' => 9, 'is_correct_option' => 'yes']);
        Answer::create(['question_id' => 34, 'option' => 8, 'is_correct_option' => 'no']);

        Answer::create(['question_id' => 35, 'option' => 18, 'is_correct_option' => 'yes']);
        Answer::create(['question_id' => 35, 'option' => 16, 'is_correct_option' => 'no']);
        Answer::create(['question_id' => 35, 'option' => 19, 'is_correct_option' => 'no']);

        Answer::create(['question_id' => 36, 'option' => 8, 'is_correct_option' => 'yes']);
        Answer::create(['question_id' => 36, 'option' => 9, 'is_correct_option' => 'no']);
        Answer::create(['question_id' => 36, 'option' => 7, 'is_correct_option' => 'no']);

        Answer::create(['question_id' => 37, 'option' => 54, 'is_correct_option' => 'yes']);
        Answer::create(['question_id' => 37, 'option' => 42, 'is_correct_option' => 'no']);
        Answer::create(['question_id' => 37, 'option' => 56, 'is_correct_option' => 'no']);

        Answer::create(['question_id' => 38, 'option' => 15, 'is_correct_option' => 'yes']);
        Answer::create(['question_id' => 38, 'option' => 13, 'is_correct_option' => 'no']);
        Answer::create(['question_id' => 38, 'option' => 14, 'is_correct_option' => 'no']);

        Answer::create(['question_id' => 39, 'option' => 12, 'is_correct_option' => 'no']);
        Answer::create(['question_id' => 39, 'option' => 11, 'is_correct_option' => 'yes']);
        Answer::create(['question_id' => 39, 'option' => 13, 'is_correct_option' => 'no']);

        Answer::create(['question_id' => 40, 'option' => 13, 'is_correct_option' => 'no']);
        Answer::create(['question_id' => 40, 'option' => 15, 'is_correct_option' => 'yes']);
        Answer::create(['question_id' => 40, 'option' => 12, 'is_correct_option' => 'no']);
    }
}
