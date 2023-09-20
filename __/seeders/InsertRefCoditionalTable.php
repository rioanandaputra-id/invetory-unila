<?php

namespace Database\Seeders;

use App\Models\RefCoditional;
use Illuminate\Database\Seeder;

class InsertRefCoditionalTable extends Seeder
{
    public function run()
    {
        RefCoditional::truncate();
        RefCoditional::insert([
            [
                "conditional_id" => guid(),
                'conditional_name' => "Kondisi 1",
                "created_at" => now(),
                'id_created' => "313dbf38-3feb-452b-abd1-13084e90bb05",
            ],
            [
                "conditional_id" => guid(),
                'conditional_name' => "Kondisi 2",
                "created_at" => now(),
                'id_created' => "313dbf38-3feb-452b-abd1-13084e90bb05",
            ],
            [
                "conditional_id" => guid(),
                'conditional_name' => "Kondisi 3",
                "created_at" => now(),
                'id_created' => "313dbf38-3feb-452b-abd1-13084e90bb05",
            ],
            [
                "conditional_id" => guid(),
                'conditional_name' => "Kondisi 4",
                "created_at" => now(),
                'id_created' => "313dbf38-3feb-452b-abd1-13084e90bb05",
            ],
            [
                "conditional_id" => guid(),
                'conditional_name' => "Kondisi 5",
                "created_at" => now(),
                'id_created' => "313dbf38-3feb-452b-abd1-13084e90bb05",
            ]
        ]);
    }
}
