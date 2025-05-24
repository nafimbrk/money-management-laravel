<?php

namespace Database\Seeders;

use App\Models\Category;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Gaji',
                'type' => 'income'
            ],
            [
                'name' => 'Jajan',
                'type' => 'expense'
            ]
            ];

            foreach ($data as $dt) {
                Category::create($dt);
            }
    }
}
