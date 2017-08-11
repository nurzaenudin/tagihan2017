<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagihansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tagihans', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('bendahara_id')->unsigned();
			$table->integer('jenistagihan_id')->unsigned();
			$table->string('nospbyspp')->unique();
			$table->date('tanggalspbyspp');
			$table->date('tanggalkuitansi');
			$table->integer('rekanan_id')->unsigned();
			$table->double('nilai');
			$table->integer('penerimauang_id')->unsigned();
			$table->integer('penerimahasil_id')->unsigned();
			$table->integer('ppk_id')->unsigned();
			$table->integer('kodepembebanan_id')->unsigned();
			$table->date('akanspj');
			$table->text('uraian');
			
			
			
            $table->timestamps();
			
			
			$table->foreign('bendahara_id')->references('id')->on('bendaharas')->onUpdate('cascade')->onDelete('cascade');
			$table->foreign('rekanan_id')->references('id')->on('rekanans')->onUpdate('cascade')->onDelete('cascade');
			$table->foreign('penerimauang_id')->references('id')->on('penerimauangs')->onUpdate('cascade')->onDelete('cascade');
			$table->foreign('penerimahasil_id')->references('id')->on('penerimahasils')->onUpdate('cascade')->onDelete('cascade');
			$table->foreign('ppk_id')->references('id')->on('ppks')->onUpdate('cascade')->onDelete('cascade');
			$table->foreign('kodepembebanan_id')->references('id')->on('kodepembebanans')->onUpdate('cascade')->onDelete('cascade');
			$table->foreign('jenistagihan_id')->references('id')->on('jenistagihans')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tagihans');
    }
}
