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
        Schema::create('ref.metric', function (Blueprint $table) {
            $table->uuid('metric_id')->primary();
            $table->string('metric_name', '100');
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
        Schema::dropIfExists('ref.metric');
    }
};
