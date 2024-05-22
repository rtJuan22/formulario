<?php

namespace Database\Seeders;
use App\Models\Curso;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    

    
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',

           
        ]);
    }

    public function ran(){

    $curso = new Curso();

    $curso->name = "Laravel";
    $curso->descripcion = "El mejor framework de php";
    $curso->categoria = "Desarrollo web";

     $curso->save();

    }

    
}
