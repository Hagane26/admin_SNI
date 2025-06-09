<?php

namespace Database\Seeders;

use App\Models\roles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class role extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       roles::create([
            "name"=> "owner",
            "priority" => 1,
        ]);
        roles::create([
            "name"=> "npc",
            "priority" => 9,
        ]);
    }
}
