<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblproduk', function (Blueprint $table) {
            $table->id();
            $table->string("nama");
            $table->foreignId("kelompok_id")->constrained("tblkelompok");
            $table->string("satuan",3);
            $table->decimal("harga");
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
        Schema::dropIfExists('tblproduk');
    }
}
