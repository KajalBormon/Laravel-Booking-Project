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
        Schema::create('visits', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->string('dept_name');
            $table->string('file_name');
            $table->integer('status')->default(0);
            $table->string('barcode')->default(0);
            $table->foreignId('dept_id')
                    ->references('id')
                    ->on('departments')
                    ->cascadeOnDelete();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visits');
    }
};
