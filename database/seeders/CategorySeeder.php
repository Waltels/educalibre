<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Portada'
        ]);
        Category::create([
            'name' => 'Destacado'
        ]);
        Category::create([
            'name' => 'Editorial'
        ]);
        Category::create([
            'name' => 'Opinion'
        ]);
        Category::create([
            'name' => 'Educacion'
        ]);
        Category::create([
            'name' => 'Cultura'
        ]);
        Category::create([
            'name' => 'Deporte'
        ]);

        Category::create([
            'name' => 'Politico-Sindical'
        ]);
        Category::create([
            'name' => 'Libre'
        ]);
    }
}
