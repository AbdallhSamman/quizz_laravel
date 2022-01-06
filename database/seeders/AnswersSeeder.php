<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnswersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('options')->insert([
        
            [
              'option' => 'JavaScript is a lightweight and interpreted programming language.',
              'exam_id' => 3,
              'question_id' => 1,
            ],
            [
              'option' => 'JavaScript has object-oriented capabilities that allows you to build interactivity into otherwise static HTML pages.',
              'exam_id' => 3,
              'question_id' => 1,
            ],
            [
              'option' => 'The general-purpose core of the language has been embedded in Netscape, Internet Explorer, and other web browsers.',
              'exam_id' => 3,
              'question_id' => 1,
            ],
            [
              'option' => 'All of the above.',
              'exam_id' => 3,
              'question_id' => 1,
            ],
            [
              'option' => 'append()',
              'exam_id' => 3,
              'question_id' => 2,
            ],
            [
              'option' => 'append()',
              'exam_id' => 3,
              'question_id' => 2,
            ],
            [
              'option' => 'attach()',
              'exam_id' => 3,
              'question_id' => 2,
            ],
            [
              'option' => 'none of the above',
              'exam_id' => 3,
              'question_id' => 2,
            ],
            [
              'option' => 'none of the above',
              'exam_id' => 3,
              'question_id' => 3,
            ],
            [
              'option' => 'none of the above',
              'exam_id' => 3,
              'question_id' => 3,
            ],
            [
              'option' => 'none of the above',
              'exam_id' => 3,
              'question_id' => 3,
            ],
            [
              'option' => 'none of the above',
              'exam_id' => 3,
              'question_id' => 3,
            ],
            [
              'option' => 'toLowerCase()',
              'exam_id' => 3,
              'question_id' => 4,
            ],
            [
              'option' => 'toLower()',
              'exam_id' => 3,
              'question_id' => 4,
            ],
            [
              'option' => 'changeCase(case)',
              'exam_id' => 3,
              'question_id' => 4,
            ],
            [
              'option' => 'none of the above',
              'exam_id' => 3,
              'question_id' => 4,
            ],
            [
              'option' => 'IndexOf()',
              'exam_id' => 3,
              'question_id' => 5,
            ],
            [
              'option' => 'search()',
              'exam_id' => 3,
              'question_id' => 5,
            ],
            [
              'option' => 'none of the above',
              'exam_id' => 3,
              'question_id' => 5,
            ],
            [
              'option' => 'lastIndexOf()',
              'exam_id' => 3,
              'question_id' => 5,
            ],
            [
              'option' => 'sort()',
              'exam_id' => 3,
              'question_id' => 6,
            ],
            [
              'option' => 'toString()',
              'exam_id' => 3,
              'question_id' => 6,
            ],
            [
              'option' => 'unshift()',
              'exam_id' => 3,
              'question_id' => 6,
            ],
            [
              'option' => 'none of the above',
              'exam_id' => 3,
              'question_id' => 6,
            ],
            [
              'option' => 'none of the above',
              'exam_id' => 3,
              'question_id' => 7,
            ],
            [
              'option' => 'none of the above',
              'exam_id' => 3,
              'question_id' => 7,
            ],
            [
              'option' => 'none of the above',
              'exam_id' => 3,
              'question_id' => 7,
            ],
            [
              'option' => 'none of the above',
              'exam_id' => 3,
              'question_id' => 7,
            ],
            [
              'option' => 'pointer',
              'exam_id' => 2,
              'question_id' => 8,
            ],
            [
              'option' => 'deafult',
              'exam_id' => 2,
              'question_id' => 8,
            ],
            [
              'option' => 'move',
              'exam_id' => 2,
              'question_id' => 8,
            ],
            [
              'option' => 'crosshair',
              'exam_id' => 2,
              'question_id' => 8,
            ],
            [
              'option' => 'Selector',
              'exam_id' => 2,
              'question_id' => 9,
            ],
            [
              'option' => 'Value',
              'exam_id' => 2,
              'question_id' => 9,
            ],
            [
              'option' => 'unshift()',
              'exam_id' => 2,
              'question_id' => 9,
            ],
            [
              'option' => 'Property',
              'exam_id' => 2,
              'question_id' => 9,
            ],
            [
              'option' => 'mm',
              'exam_id' => 2,
              'question_id' => 10,
            ],
            [
              'option' => 'in',
              'exam_id' => 2,
              'question_id' => 10,
            ],
            [
              'option' => 'pc',
              'exam_id' => 2,
              'question_id' => 10,
            ],
            [
              'option' => 'pt',
              'exam_id' => 2,
              'question_id' => 10,
            ],
            [
              'option' => 'px',
              'exam_id' => 2,
              'question_id' => 11,
            ],
            [
              'option' => 'wh',
              'exam_id' => 2,
              'question_id' => 11,
            ],
            [
              'option' => 'vh',
              'exam_id' => 2,
              'question_id' => 11,
            ],
            [
              'option' => 'none',
              'exam_id' => 2,
              'question_id' => 11,
            ],
            [
              'option' => 'font-family',
              'exam_id' => 2,
              'question_id' => 12,
            ],
            [
              'option' => 'font-style',
              'exam_id' => 2,
              'question_id' => 12,
            ],
            [
              'option' => 'font-variant',
              'exam_id' => 2,
              'question_id' => 12,
            ],
            [
              'option' => 'font-weight',
              'exam_id' => 2,
              'question_id' => 12,
            ],
            [
              'option' => 'list-style-type',
              'exam_id' => 2,
              'question_id' => 13,
            ],
            [
              'option' => 'list-style-position',
              'exam_id' => 2,
              'question_id' => 13,
            ],
            [
              'option' => 'list-style-image',
              'exam_id' => 2,
              'question_id' => 13,
            ],
            [
              'option' => 'list-style',
              'exam_id' => 2,
              'question_id' => 13,
            ],
            [
              'option' => 'color',
              'exam_id' => 2,
              'question_id' => 14,
            ],
            [
              'option' => 'direction',
              'exam_id' => 2,
              'question_id' => 14,
            ],
            [
              'option' => 'word-spacing',
              'exam_id' => 2,
              'question_id' => 14,
            ],
            [
              'option' => 'letter-spacing',
              'exam_id' => 2,
              'question_id' => 14,
            ],
            [
              'option' => 'color',
              'exam_id' => 2,
              'question_id' => 15,
            ],
            [
              'option' => 'direction',
              'exam_id' => 2,
              'question_id' => 15,
            ],
            [
              'option' => 'word-spacing',
              'exam_id' => 2,
              'question_id' => 15,
            ],
            [
              'option' => 'letter-spacing',
              'exam_id' => 2,
              'question_id' => 15,
            ],
            [
              'option' => 'color',
              'exam_id' => 2,
              'question_id' => 16,
            ],
            [
              'option' => 'direction',
              'exam_id' => 2,
              'question_id' => 16,
            ],
            [
              'option' => 'word-spacing',
              'exam_id' => 2,
              'question_id' => 16,
            ],
            [
              'option' => 'letter-spacing',
              'exam_id' => 2,
              'question_id' => 16,
            ],
            [
              'option' => 'color',
              'exam_id' => 2,
              'question_id' => 17,
            ],
            [
              'option' => 'direction',
              'exam_id' => 2,
              'question_id' => 17,
            ],
            [
              'option' => 'word-spacing',
              'exam_id' => 2,
              'question_id' => 17,
            ],
            [
              'option' => 'letter-spacing',
              'exam_id' => 2,
              'question_id' => 17,
            ],
            [
              'option' => 'color',
              'exam_id' => 2,
              'question_id' => 18,
            ],
            [
              'option' => 'direction',
              'exam_id' => 2,
              'question_id' => 18,
            ],
            [
              'option' => 'word-spacing',
              'exam_id' => 2,
              'question_id' => 18,
            ],
            [
              'option' => 'letter-spacing',
              'exam_id' => 2,
              'question_id' => 18,
            ],
            [
              'option' => 'color',
              'exam_id' => 2,
              'question_id' => 19,
            ],
            [
              'option' => 'direction',
              'exam_id' => 2,
              'question_id' => 19,
            ],
            [
              'option' => 'word-spacing',
              'exam_id' => 2,
              'question_id' => 19,
            ],
            [
              'option' => 'letter-spacing',
              'exam_id' => 2,
              'question_id' => 19,
            ],
            [
              'option' => 'color',
              'exam_id' => 2,
              'question_id' => 20,
            ],
            [
              'option' => 'direction',
              'exam_id' => 2,
              'question_id' => 20,
            ],
            [
              'option' => 'word-spacing',
              'exam_id' => 2,
              'question_id' => 20,
            ],
            [
              'option' => 'letter-spacing',
              'exam_id' => 2,
              'question_id' => 20,
            ],

        ]);
    }
}