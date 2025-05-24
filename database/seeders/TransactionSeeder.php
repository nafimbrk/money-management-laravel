<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'user_id' => 1,
                'category_id' => 1,
                'amount' => 1000000,
                'date' => now(),
                'description' => 'anjayyyy'
            ],
            [
                'user_id' => 1,
                'category_id' => 1,
                'amount' => 500000,
                'date' => now(),
                'description' => 'lagii'
            ],
            [
                'user_id' => 1,
                'category_id' => 2,
                'amount' => 300000,
                'date' => now(),
                'description' => 'testttt'
            ]
            ];

            foreach ($data as $dt) {
                Transaction::create($dt);
            }
    }
}
