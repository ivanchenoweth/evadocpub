<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSindicalizadoTable extends Migration
{
    public function up()
    {
        Schema::create('sindicalizado', function (Blueprint $table) {
            $table->id();
            $table->string('cve_sindicalizado',3)->unique()->default("317");
            $table->string('descripcion',40);
            $table->timestamps();
            $table->softDeletes();
        });
    }
    public function down()
    {
        Schema::dropIfExists('sindicalizado');
    }
}