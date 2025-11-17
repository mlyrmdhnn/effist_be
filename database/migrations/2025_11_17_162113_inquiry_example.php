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
        Schema::create('inquiry_example', function(Blueprint $table) {
            $table->id();
            $table->string('product_type');
            $table->string('building');
            $table->date('date');
            $table->string('customer');
            $table->string('status');
            $table->string('description');
            $table->date('last_update');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
