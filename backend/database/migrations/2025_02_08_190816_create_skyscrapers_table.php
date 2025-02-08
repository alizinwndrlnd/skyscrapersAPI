<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Ramsey\Uuid\v1;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('skyscrapers', function (Blueprint $table) {
            $table->id();
            $table->string("name", 50);
            $table->integer("city_id");
            $table->float("height");
            $table->integer("stories");
            $table->integer("finished");
            
          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skyscrapers');
    }
};
