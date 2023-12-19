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
        Schema::create('eventContacts', function (Blueprint $table) {
            $table->id('id_rep_cont'); 
            $table->unsignedInteger('id_event')->index(); 
            $table->unsignedInteger('id_contact')->index();  
            $table->timestamps(); 

            // Define foreign key constraints  
            $table->foreign('id_event')->references('id_event')->on('events')->onDelete('cascade');  
            $table->foreign('id_contact')->references('id_contact')->on('contacts')->onDelete('cascade');  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventContacts');
    }
};
