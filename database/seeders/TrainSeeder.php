<?php

use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainSeeder extends Seeder
{
    public function run()
    {
        Train::create([
            'azienda' => 'ACME Trains',
            'stazione_partenza' => 'Milano Centrale',
            'stazione_arrivo' => 'Roma Termini',
            'orario_partenza' => '08:00:00',
            'orario_arrivo' => '12:00:00',
            'codice_treno' => 'T123',
            'numero_carrozze' => 5,
            'in_orario' => true,
            'cancellato' => false,
        ]);

        Train::create([
            'azienda' => 'RailCo',
            'stazione_partenza' => 'Roma Termini',
            'stazione_arrivo' => 'Firenze Santa Maria Novella',
            'orario_partenza' => '13:30:00',
            'orario_arrivo' => '15:45:00',
            'codice_treno' => 'T456',
            'numero_carrozze' => 3,
            'in_orario' => false,
            'cancellato' => true,
        ]);

        
    }
}
