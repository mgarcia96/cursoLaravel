<?php

namespace Database\Seeders;

use App\Models\Curso;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder{
    /**
     * Seed the application's database.
    */
    public function run(): void{

        Curso::factory(50)->create();


        // $this->call(CursoSeeder::class);
        //Para que al ejecutar php artisan db:seed se ejecute CursoSeeder.php
    }
}
