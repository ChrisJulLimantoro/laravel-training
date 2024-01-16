<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class personSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $people = [
            [
                'fname' => 'John',
                'lname' => 'Doe',
            ],
            [
                'fname' => 'Jane',
                'lname' => 'Doe',
            ],
            [
                'fname' => 'John',
                'lname' => 'Smith',
            ],
            [
                'fname' => 'Jane',
                'lname' => 'Smith',
            ],
        ];
        foreach ($people as $person) {
            \App\Models\Person::create($person);
        }
    }
}
