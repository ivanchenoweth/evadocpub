<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('num_emp')->unique();
            $table->string('perfil',1)->default("U");
            $table->string('name',80);
            $table->string('email',80)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password',80);
            $table->rememberToken();
            $table->timestamps();  
            $table->softDeletes(); 
            $table->foreign('perfil')->references('cve_perfil_usuario')->
            on('perfil_user')->onDelete('cascade');
            });
    }
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
