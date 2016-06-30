<?php

use Illuminate\Database\Seeder;

class AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answers')->insert([
            'description' => '18-25',
            'percentage' => 47,
            'question_id' => 1,
        ]);
        DB::table('answers')->insert([
            'description' => '26-35',
            'percentage' => 31,
            'question_id' => 1,
        ]);
        DB::table('answers')->insert([
            'description' => 'Efectivo',
            'percentage' => 16,
            'question_id' => 1,
        ]);
        DB::table('answers')->insert([
            'description' => '46-60',
            'percentage' => 6,
            'question_id' => 1,
        ]);
        DB::table('answers')->insert([
            'description' => 'Ninguna vez',
            'percentage' => 50,
            'question_id' => 2,
        ]);
        DB::table('answers')->insert([
            'description' => 'Una vez',
            'percentage' => 22,
            'question_id' => 2,
        ]);
        DB::table('answers')->insert([
            'description' => 'Entre dos y cinco veces',
            'percentage' => 19,
            'question_id' => 2,
        ]);
        DB::table('answers')->insert([
            'description' => 'Más de cinco veces',
            'percentage' => 9,
            'question_id' => 2,
        ]);
        DB::table('answers')->insert([
            'description' => 'Si',
            'percentage' => 50,
            'question_id' => 3,
        ]);
        DB::table('answers')->insert([
            'description' => 'No',
            'percentage' => 50,
            'question_id' => 3,
        ]);
        DB::table('answers')->insert([
            'description' => 'Bares',
            'percentage' => 31,
            'question_id' => 4,
        ]);
        DB::table('answers')->insert([
            'description' => 'Internet',
            'percentage' => 25,
            'question_id' => 4,
        ]);
        DB::table('answers')->insert([
            'description' => 'Calles',
            'percentage' => 28,
            'question_id' => 4,
        ]);
        DB::table('answers')->insert([
            'description' => 'Otro',
            'percentage' => 16,
            'question_id' => 4,
        ]);
        DB::table('answers')->insert([
            'description' => 'Aplicación móvil',
            'percentage' => 38,
            'question_id' => 5,
        ]);
        DB::table('answers')->insert([
            'description' => 'Sitio web',
            'percentage' => 41,
            'question_id' => 5,
        ]);
        DB::table('answers')->insert([
            'description' => 'Personal',
            'percentage' => 0,
            'question_id' => 5,
        ]);
        DB::table('answers')->insert([
            'description' => 'Teléfono',
            'percentage' => 9,
            'question_id' => 5,
        ]);
        DB::table('answers')->insert([
            'description' => 'Otro',
            'percentage' => 12,
            'question_id' => 5,
        ]);
        DB::table('answers')->insert([
            'description' => 'Si',
            'percentage' => 84,
            'question_id' => 6,
        ]);
        DB::table('answers')->insert([
            'description' => 'No',
            'percentage' => 16,
            'question_id' => 6,
        ]);
        DB::table('answers')->insert([
            'description' => '1',
            'percentage' => 16,
            'question_id' => 7,
        ]);
        DB::table('answers')->insert([
            'description' => '2',
            'percentage' => 3,
            'question_id' => 7,
        ]);
        DB::table('answers')->insert([
            'description' => '3',
            'percentage' => 16,
            'question_id' => 7,
        ]);
        DB::table('answers')->insert([
            'description' => '4',
            'percentage' => 66,
            'question_id' => 7,
        ]);
        DB::table('answers')->insert([
            'description' => 'Si',
            'percentage' => 72,
            'question_id' => 8,
        ]);
        DB::table('answers')->insert([
            'description' => 'No',
            'percentage' => 22,
            'question_id' => 8,
        ]);
        DB::table('answers')->insert([
            'description' => 'PayPal',
            'percentage' => 13,
            'question_id' => 9,
        ]);
        DB::table('answers')->insert([
            'description' => 'Pago electrónico',
            'percentage' => 13,
            'question_id' => 9,
        ]);
        DB::table('answers')->insert([
            'description' => 'Tarjeta de crédito o débito',
            'percentage' => 16,
            'question_id' => 9,
        ]);
        DB::table('answers')->insert([
            'description' => 'Efectivo',
            'percentage' => 59,
            'question_id' => 9,
        ]);
        DB::table('answers')->insert([
            'description' => 'Si',
            'percentage' => 69,
            'question_id' => 10,
        ]);
        DB::table('answers')->insert([
            'description' => 'No',
            'percentage' => 31,
            'question_id' => 10,
        ]);
    }
}
