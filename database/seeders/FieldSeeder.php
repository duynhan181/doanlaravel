<?php

namespace Database\Seeders;

use App\Models\Field;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $field = [
            [
                'name' => 'Toán',
                'status' => '1'
            ],
            [
                'name' => 'Văn',
                'status' => '1'
            ],
            [
                'name' => 'Địa Lý',
                'status' => '1'
            ],
        ];

        foreach($field as $key => $value){
            Field::create($value);
        }
    }
}
