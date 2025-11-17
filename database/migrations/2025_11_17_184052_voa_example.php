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
        Schema::create('voa_example', function(Blueprint $table){
            $table->id();
            $table->integer('refer_number');
            $table->date('date_agreement');
            $table->string('customer');
            $table->string('service');
            $table->string('created_by');
            $table->string('status_voa');
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
