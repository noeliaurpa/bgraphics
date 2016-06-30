<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'name' => 'Boober',
            'description' => 'Una aplicación para contratar prostitutas con servicio a domicilio. Orientada principalmente a personas que quieren algo completamente discreto.',
            'multiplataform' => 'Si',
            'interactivity' => 3.6,
            'usability' => 4.5,
            'popularity' => 2.1,
            'chat' => 'No',
            'geolocation' => 'Si',
            'orientation' => 'Adultos',
        ]);
        DB::table('companies')->insert([
            'name' => 'Lovoo',
            'description' => 'Se trata de una plataforma que ofrece contactos sin compromisos, es decir, encuentros sexuales esporádicos. A diferencia de otros, es orientada a jóvenes.',
            'multiplataform' => 'Si',
            'interactivity' => 4.2,
            'usability' => 4.1,
            'popularity' => 4.1,
            'chat' => 'Si',
            'geolocation' => 'Si',
            'orientation' => 'Jóvenes',
        ]);
        DB::table('companies')->insert([
            'name' => 'Badoo',
            'description' => 'Con más de 316 millones de usuarios, Badoo es el mejor lugar para chatear, hacer nuevos contactos, compartir intereses, tener una cita y pasar un buen rato.',
            'multiplataform' => 'Si',
            'interactivity' => 4.5,
            'usability' => 4.0,
            'popularity' => 4.9,
            'chat' => 'Si',
            'geolocation' => 'Si',
            'orientation' => 'Jóvenes',
        ]);
    }
}
