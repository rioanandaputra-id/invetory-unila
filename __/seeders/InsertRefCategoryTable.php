<?php

namespace Database\Seeders;

use App\Models\RefCategory;
use Illuminate\Database\Seeder;

class InsertRefCategoryTable extends Seeder
{
    public function run()
    {
        RefCategory::truncate();
        RefCategory::insert([
            [
                "category_id" => guid(),
                'category_name' => "Kategori 1",
                "created_at" => now(),
                'id_created' => "313dbf38-3feb-452b-abd1-13084e90bb05",
            ],
            [
                "category_id" => guid(),
                'category_name' => "Kategori 2",
                "created_at" => now(),
                'id_created' => "313dbf38-3feb-452b-abd1-13084e90bb05",
            ],
            [
                "category_id" => guid(),
                'category_name' => "Kategori 3",
                "created_at" => now(),
                'id_created' => "313dbf38-3feb-452b-abd1-13084e90bb05",
            ],
            [
                "category_id" => guid(),
                'category_name' => "Kategori 4",
                "created_at" => now(),
                'id_created' => "313dbf38-3feb-452b-abd1-13084e90bb05",
            ],
            [
                "category_id" => guid(),
                'category_name' => "Kategori 5",
                "created_at" => now(),
                'id_created' => "313dbf38-3feb-452b-abd1-13084e90bb05",
            ]
        ]);
    }
}
