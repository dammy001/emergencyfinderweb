<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Hospital'
            ],
            [
                'name' => 'Mechanic'
            ],
            [
                'name' => 'Fire Station'
            ],
            [
                'name' => 'Petrol Station'
            ],
            [
                'name' => 'Towing'
            ],
            [
                'name' => 'Amblance'
            ]
        ];

        foreach($categories as $category){
            Category::create($category);
        }
    }
}
