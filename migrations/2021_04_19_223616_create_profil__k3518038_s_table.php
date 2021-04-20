<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilK3518038STable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_diri__k3518038_s', function (Blueprint $table) {
            $table->id();
            $table->string('nim',20);
            $table->string('nama',225);
            $table->string('alamat',225);
            $table->string('bidang_peminatan', 225);
            $table->string('email',255);
            $table->string('telp',20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profil__k3518038_s');
    }
}
