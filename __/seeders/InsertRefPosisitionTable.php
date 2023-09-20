<?php

namespace Database\Seeders;

use App\Models\RefPosisition;
use Illuminate\Database\Seeder;

class InsertRefPosisitionTable extends Seeder
{
    public function run()
    {
        RefPosisition::truncate();
        RefPosisition::insert([
            [
                "posisition_id" => guid(),
                'posisition_name' => "Jabatan 1",
                "created_at" => now(),
                'id_created' => "313dbf38-3feb-452b-abd1-13084e90bb05",
            ],
            [
                "posisition_id" => guid(),
                'posisition_name' => "Jabatan 2",
                "created_at" => now(),
                'id_created' => "313dbf38-3feb-452b-abd1-13084e90bb05",
            ],
            [
                "posisition_id" => guid(),
                'posisition_name' => "Jabatan 3",
                "created_at" => now(),
                'id_created' => "313dbf38-3feb-452b-abd1-13084e90bb05",
            ],
            [
                "posisition_id" => guid(),
                'posisition_name' => "Jabatan 4",
                "created_at" => now(),
                'id_created' => "313dbf38-3feb-452b-abd1-13084e90bb05",
            ],
            [
                "posisition_id" => guid(),
                'posisition_name' => "Jabatan 5",
                "created_at" => now(),
                'id_created' => "313dbf38-3feb-452b-abd1-13084e90bb05",
            ]
        ]);
    }
}
