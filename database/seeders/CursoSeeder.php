<?php

namespace Database\Seeders;
use App\Models\Curso;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curso = new Curso();
        $curso->name= "Laravel";
        $curso->descripcion="El mejor framework de php";
        $curso->categoria = "Desarrolo web";

        $curso->save();

        $curso2 = new Curso();
        $curso2->name= "Laravel";
        $curso2->descripcion="El mejor framework de php";
        $curso2->categoria = "Desarrolo web";

        $curso2->save();

        $curso3 = new Curso();
        $curso3->name= "Laravel";
        $curso3->descripcion="El mejor framework de php";
        $curso3->categoria = "Desarrolo web";

        $curso3->save();
    }
}
