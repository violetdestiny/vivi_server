<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatsTable extends Migration
{
    public function up()
    {
        Schema::create('cats', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->integer('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('breed')->nullable();
            $table->decimal('fee', 8, 2)->default(0);
            $table->string('image')->nullable(); // if you want to store images
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cats');
    }
}
 
