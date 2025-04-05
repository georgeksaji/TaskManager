<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tbl_task', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('person_id');
            $table->foreign('person_id')->references('id')->on('tbl_person')->onDelete('cascade');
            $table->string('task');
            $table->string('description');
            $table->string('date');
            $table->string('time');
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        schema::dropIfExists('tbl_task');
    }
};
