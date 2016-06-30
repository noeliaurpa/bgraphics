<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            'description' => 'En cual de los siguientes rangos está su edad?',
            'number' => 1,
        ]);
        DB::table('questions')->insert([
            'description' => 'Ha contratado usted en algún momento los servicios de una prostituta?',
            'number' => 2,
        ]);
        DB::table('questions')->insert([
            'description' => 'Ha pensado en requerir el servicio de una prostituta, pero no sabe donde contactarla?',
            'number' => 3,
        ]);
        DB::table('questions')->insert([
            'description' => 'En que lugar o sitio ha pensado buscar los servicios de una prostituta?',
            'number' => 4,
        ]);
        DB::table('questions')->insert([
            'description' => 'Le gustaría poder contratar los servicios de una prostituta por medio de:',
            'number' => 5,
        ]);
        DB::table('questions')->insert([
            'description' => 'Le gustaría conocer por medio de un perfil a la prostituta, antes de requerir sus servicios?',
            'number' => 6,
        ]);
        DB::table('questions')->insert([
            'description' => 'Califique el valor de poder contratar el servicio de una prostituta, manteniendo la privacidad del usuario que la contrata. Asumiendo que 4 es la mejor calificación.',
            'number' => 7,
        ]);
        DB::table('questions')->insert([
            'description' => 'Le gustaría saber los diferentes precios por cada uno de los servicios que brindan las prostitutas, antes de requerir sus servicios?',
            'number' => 8,
        ]);
        DB::table('questions')->insert([
            'description' => 'Cuál método de pago preferiría para los servicios?',
            'number' => 9,
        ]);
        DB::table('questions')->insert([
            'description' => 'Le gustaría poder contratar una prostituta desde la comodidad de su celular?',
            'number' => 10,
        ]);
    }
}
