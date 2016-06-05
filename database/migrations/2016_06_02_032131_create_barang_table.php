<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        //membuat tabel dalam database
        Schema::create('barang',function(Blueprint $table)
        {
          $table->increments("id");
          $table->string('namabarang');
          $table->integer('banyakbarang');
          $table->string('source');
          $table->date('tanggalbarang');
          $table->string('status');
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
        //hapus table jika sudah ada di database
        Schema::drop('barang');
    }
}
