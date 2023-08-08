<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('asset', function (Blueprint $table) {
            $table->uuid('asset_tik_id')->primary();
            $table->uuid('asset_smb_id')->nullable();
            $table->char('asset_year_received', '4');
            $table->uuid('ref_category_id');
            $table->uuid('ref_brand_id')->nullable();
            $table->string('asset_name', '100');
            $table->string('asset_capacity', '100')->nullable();
            $table->string('asset_code_factory', '50')->nullable();
            $table->uuid('ref_metric_id');
            $table->double('asset_amount');
            $table->double('asset_value')->nullable();
            $table->uuid('ref_department_id');
            $table->uuid('person_id');
            $table->date('created_at');
            $table->date('deleted_at')->nullable();
            $table->date('updated_at')->nullable();
            $table->uuid('id_created')->nullable();
            $table->uuid('id_updated')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asset');
    }
};
