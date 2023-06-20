<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class QuestionInputTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('question_input_types')->delete();
        $data = [
            [
                'id' => 1,
                'input_type' => 'Short Answer',
            ],
            [
                'id' => 2,
                'input_type' => 'Paragraph',
            ],
            [
                'id' => 3,
                'input_type' => 'Multiple Choice',
            ],
            /* [
                'id' => 4,
                'input_type' => 'Checkboxes',
            ],
            [
                'id' => 5,
                'input_type' => 'Drop-Down',
            ],
            [
                'id' => 6,
                'input_type' => 'File Upload',
            ],
            [
                'id' => 7,
                'input_type' => 'Linear Scale',
            ],
            [
                'id' => 8,
                'input_type' => 'Multiple-Choice Grid',
            ],
            [
                'id' => 9,
                'input_type' => 'Tick-Box Grid',
            ],
            [
                'id' => 10,
                'input_type' => 'Date',
            ],
            [
                'id' => 11,
                'input_type' => 'Time',
            ], */
        ];

        DB::table('question_input_types')->insert($data);
    }
}
