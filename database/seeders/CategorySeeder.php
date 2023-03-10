<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $categories=[
        ['name'=>'cook'],
        ['name'=>'cook'],
        ['name'=>'cook'],
    ]; //
    public function run()
    {
        foreach($this->categories as $categorie)
            Category::create($categorie);

    }

}
