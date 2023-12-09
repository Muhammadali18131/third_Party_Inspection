<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->string("field1");
            $table->string("field2");
            $table->string("field3");
            $table->string("field4");
            $table->string("field5");
            $table->string("field6");
            $table->string("field7");
            $table->string("field8");
            $table->string("field9");
            $table->string("field10");
            $table->string("field11");
            $table->string("field12");
            $table->string("field13");
            $table->string("field14");
            $table->string("field15");
            $table->string("profile_img");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidates');
    }
};
