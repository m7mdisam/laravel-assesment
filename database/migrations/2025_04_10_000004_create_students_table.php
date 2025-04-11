<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('students', function (Blueprint $table) {
            $table->id();

            // Explicitly define the column
            $table->unsignedBigInteger('parent_id')->index();

            $table->string('name');
            $table->timestamps();

            // Name the constraint manually to avoid conflict
            $table->foreign('parent_id', 'fk_students_parent')
                  ->references('id')
                  ->on('parents')
                  ->onDelete('cascade');
        });
    }

    public function down(): void {
        Schema::dropIfExists('students');
    }
};
