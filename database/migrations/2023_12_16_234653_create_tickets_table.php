<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
 {
        Schema::create('tickets', function (Blueprint $table) {
        $table->increments('id');
        $table->string("name", 255)->nullable();
        $table->string("photo", 255)->nullable();
        $table->decimal("price", 6, 2);
        $table->text("type")->nullable();
        $table->timestamps();
 });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
