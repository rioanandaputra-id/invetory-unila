<?php

namespace Database\Seeders;

use App\Models\RefDepartment;
use Illuminate\Database\Seeder;

class InsertRefDepartmentTable extends Seeder
{
    public function run()
    {
        RefDepartment::truncate();
        RefDepartment::insert([
            [
                "department_id" => guid(),
                'department_name' => "Dapartment 1",
                "created_at" => now(),
                'id_created' => "313dbf38-3feb-452b-abd1-13084e90bb05",
            ],
            [
                "department_id" => guid(),
                'department_name' => "Dapartment 2",
                "created_at" => now(),
                'id_created' => "313dbf38-3feb-452b-abd1-13084e90bb05",
            ],
            [
                "department_id" => guid(),
                'department_name' => "Dapartment 3",
                "created_at" => now(),
                'id_created' => "313dbf38-3feb-452b-abd1-13084e90bb05",
            ],
            [
                "department_id" => guid(),
                'department_name' => "Dapartment 4",
                "created_at" => now(),
                'id_created' => "313dbf38-3feb-452b-abd1-13084e90bb05",
            ],
            [
                "department_id" => guid(),
                'department_name' => "Dapartment 5",
                "created_at" => now(),
                'id_created' => "313dbf38-3feb-452b-abd1-13084e90bb05",
            ]
        ]);
    }
}
