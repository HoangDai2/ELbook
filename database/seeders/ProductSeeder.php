<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'product_code' => 'P001',
                'name' => 'Laravel for Beginners',
                'price' => 29.99,
                'category_id' => 2, // Assuming category_id 2 exists
                'description' => 'A comprehensive guide to Laravel for beginners.',
                'quantity' => 100,
                'author' => 'John Doe',
                'publisher' => 'Tech Books Publishing',
                'specified_age' => '12+',
                'language' => 'English',
                'year_of_publication' => 2023,
                'page_number' => 350,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_code' => 'P002',
                'name' => 'Advanced PHP Programming',
                'price' => 39.99,
                'category_id' => 2, // Assuming category_id 2 exists
                'description' => 'An advanced guide to PHP programming.',
                'quantity' => 50,
                'author' => 'Jane Smith',
                'publisher' => 'Code Masters Publishing',
                'specified_age' => '15+',
                'language' => 'English',
                'year_of_publication' => 2022,
                'page_number' => 400,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_code' => 'P003',
                'name' => 'Kids Story Book',
                'price' => 15.99,
                'category_id' => 3, // Assuming category_id 3 exists
                'description' => 'A fun and engaging storybook for kids.',
                'quantity' => 200,
                'author' => 'Emily Brown',
                'publisher' => 'Kids Books Publishing',
                'specified_age' => '6+',
                'language' => 'English',
                'year_of_publication' => 2021,
                'page_number' => 120,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
