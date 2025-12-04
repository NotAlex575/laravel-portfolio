<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
         $projects = [
            [
                'nome' => 'Sito Portfolio Personale',
                'cliente' => 'Mario Rossi',
                'periodo_inizio' => '2024-01-10 09:00:00',
                'riassunto' => 'Creazione di un sito portfolio responsive per mostrare i lavori del cliente.',
            ],
            [
                'nome' => 'E-commerce Artigianato',
                'cliente' => 'Artigiani SRL',
                'periodo_inizio' => '2023-11-05 10:30:00',
                'riassunto' => 'Sviluppo di un e-commerce per la vendita di prodotti artigianali.',
            ],
            [
                'nome' => 'Gestionale Interno',
                'cliente' => 'TechCorp',
                'periodo_inizio' => '2024-02-20 14:00:00',
                'riassunto' => 'Realizzazione di un sistema gestionale per la gestione dei dipendenti.',
            ],
            [
                'nome' => 'Landing Page Evento',
                'cliente' => 'EventiPlus',
                'periodo_inizio' => '2024-03-15 16:00:00',
                'riassunto' => 'Sviluppo di una landing page promozionale per un evento annuale.',
            ],
        ];

        foreach($projects as $project){
            $newProject = new Project();
            $newProject->nome = $project['nome'];
            $newProject->cliente = $project['cliente'];
            $newProject->periodo_inizio = $project['periodo_inizio'];
            $newProject->riassunto = $project['riassunto'];
            $newProject->save();
        }

    }
}
