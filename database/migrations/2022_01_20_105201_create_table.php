<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('models', function (Blueprint $table) {
            $table->integer("Id")->autoIncrement()->unsigned();
            $table->string("Name",50);
            $table->string("Surname",50);
            $table->date("DateOfBirth");
            $table->double("Bust",8,2);
            $table->double("Waist",8,2);
            $table->double("Hips",8,2);
            $table->double("Height",8,2);
            $table->string("HairColor",50);
            $table->string("EyeColor",50);
            $table->string("Country",100);
            $table->string("City",100);
            $table->string("Phone",100);
            $table->string("Email",100);
            $table->string("InstagramNickname",100);
            $table->string("PhotoOne",100);
            $table->string("PhotoTwo",100);
            $table->string("PhotoThree",100);
            $table->string("PhotoFour",100);
            $table->longText("Description")->nullable();
            $table->timestamps();
        });
        Schema::create('portfolios', function(Blueprint $table){
            $table->integer("Id")->unsigned()->autoIncrement();
            $table->string("ImagePath", 100);
            $table->integer("ModelId")->unsigned();
            $table->foreign("ModelId")->references("Id")->on("models")->cascadeOnDelete();
            $table->timestamps();
        });
        Schema::create('auditions', function(Blueprint $table){
            $table->integer("Id")->autoIncrement()->unsigned();
            $table->string("Name",50);
            $table->string("Surname",50);
            $table->date("DateOfBirth");
            $table->double("Bust",8,2);
            $table->double("Waist",8,2);
            $table->double("Hips",8,2);
            $table->double("Height",8,2);
            $table->string("HairColor",50);
            $table->string("EyeColor",50);
            $table->string("Country",100);
            $table->string("City",100);
            $table->string("Phone",100);
            $table->string("Email",100);
            $table->string("InstagramNickname",100);
            $table->string("PhotoOne",100);
            $table->string("PhotoTwo",100);
            $table->string("PhotoThree",100);
            $table->string("PhotoFour",100);
            $table->timestamps();
        });
        Schema::create('roles', function(Blueprint $table){
            $table->integer("Id")->autoIncrement()->unsigned();
            $table->string("Name", 50);
            $table->timestamps();
        });
        Schema::create('users', function (Blueprint $table){
            $table->integer("Id")->autoIncrement()->unsigned();
            $table->string("Login", 30)->unique();
            $table->string("Password", 30);
            $table->string("Email",50)->nullable();
            $table->integer("RoleId")->unsigned();
            $table->foreign("RoleId")->references("Id")->on("roles")->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('models');
        Schema::dropIfExists('portfolios');
        Schema::dropIfExists('auditions');
        Schema::dropIfExists('roles');
        Schema::dropIfExists('users');
    }
}
