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
        Schema::create('person', function (Blueprint $table) {
            $table->uuid('person_id')->primary();
            $table->uuid('ref_department_id');
            $table->uuid('ref_posisition_id')->nullable();
            $table->string('person_name', '100');
            $table->string('person_nip', '16')->nullable();
            $table->string('person_phone', '15')->nullable();
            $table->string('person_email', '30')->nullable();
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
        Schema::dropIfExists('person');
    }
};
