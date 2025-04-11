<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('parents', function (Blueprint $table) {
            $table->id();

            // Explicitly define the foreign key column
            $table->unsignedBigInteger('franchise_id')->index();

            $table->string('name');
            $table->timestamps();

            // Now define the constraint
            $table->foreign('franchise_id', 'fk_parents_franchise')
                  ->references('id')
                  ->on('franchises')
                  ->onDelete('cascade');
        });
    }

    public function down(): void {
        Schema::dropIfExists('parents');
    }
};
