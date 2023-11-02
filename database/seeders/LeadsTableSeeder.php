<?php


namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Add this line

class LeadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('leads')->insert([
            'anfrage' => 'Badsanierung in Berlin',
            'gewerk' => 'Badsanierung',
            'unterstuetzen' => 'Badsanierung',
            'ausstattung' => 'Gehoben',
            'raumgroesse' => 'Standard Bad (unter 10m²)',
            'eigentuemer' => 'Ich bin Mieter/in',
            'auftragsbeginn' => 'innerhalb von einem Monat',
            'versicherungsfall' => 'Nein',
            'anrede' => 'Privatperson',
            'ansprechpartner' => 'Herr Dieter Geß',
            'plz' => '10781',
            'email' => 'bluberg@web.de',
            'telefon' => '0176-42790173',
        ]);
    }
}
