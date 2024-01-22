<?php

namespace Database\Seeders;

use App\Models\Curso;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder{
    /**
     * Run the database seeds.
    */

    public function run(): void{

        //Esta línea se pondrá en DatabaseSeeder.php, asi no hará falta crear un Seeder
        //por cada Factory.
        //Curso::factory(50)->create();

        $curso = new Curso(); // instancia del modelo Curso
        $curso->name = "Laravel";
        $curso->descripcion = "El mejor framework de PHP";
        $curso->categoria = "Desarrollo Web";
        $curso->save();

        $curso2 = new Curso(); // instancia del modelo Curso
        $curso2->name = "Laravel";
        $curso2->descripcion = "El mejor framework de PHP";
        $curso2->categoria = "Desarrollo Web";
        $curso2->save();

        // $curso3 = new Curso(); // instancia del modelo Curso
        // $curso3->name = "Laravel";
        // $curso3->descripcion = "El mejor framework de PHP";
        // $curso3->categoria = "Desarrollo Web";
        // $curso3->save();
    }
}

// php artisan db:seed -> solo ejecuta DatabaseSeeder.php
// php artisan migrate:fresh --seed   --->   Ejecuta fresh + seed