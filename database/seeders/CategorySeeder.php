<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['category_name' => 'Multimedia Projectors'],
            ['category_name' => 'Projector Screens'],
            ['category_name' => 'Laser Pointers'],
            ['category_name' => 'Laptops'],
            ['category_name' => 'Desktops'],
            ['category_name' => 'Tablets'],
            ['category_name' => 'Video Conference Unit'],
            ['category_name' => 'Printers'],
            ['category_name' => 'Scanners'],
            ['category_name' => 'Photocopiers'],
            ['category_name' => 'Fax Machines'],
            ['category_name' => 'Telephones'],
            ['category_name' => 'PABX Systems'],
            ['category_name' => 'Networking Equipment'],
            ['category_name' => 'Servers'],
            ['category_name' => 'UPS Systems'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
