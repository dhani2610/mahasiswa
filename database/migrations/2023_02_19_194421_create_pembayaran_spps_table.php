<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaranSppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran_spps', function (Blueprint $table) {
            $table->id();
            $table->integer('mahasiswa_id');
            $table->integer('semester1_1');
            $table->integer('semester1_2');
            $table->integer('semester1_3');
            $table->integer('semester1_4');
            $table->integer('semester1_5');
            $table->integer('semester1_6');

            $table->integer('semester2_1');
            $table->integer('semester2_2');
            $table->integer('semester2_3');
            $table->integer('semester2_4');
            $table->integer('semester2_5');
            $table->integer('semester2_6');

            $table->integer('semester3_1');
            $table->integer('semester3_2');
            $table->integer('semester3_3');
            $table->integer('semester3_4');
            $table->integer('semester3_5');
            $table->integer('semester3_6');

            $table->integer('semester4_1');
            $table->integer('semester4_2');
            $table->integer('semester4_3');
            $table->integer('semester4_4');
            $table->integer('semester4_5');
            $table->integer('semester4_6');

            $table->integer('semester5_1');
            $table->integer('semester5_2');
            $table->integer('semester5_3');
            $table->integer('semester5_4');
            $table->integer('semester5_5');
            $table->integer('semester5_6');

            $table->integer('semester6_1');
            $table->integer('semester6_2');
            $table->integer('semester6_3');
            $table->integer('semester6_4');
            $table->integer('semester6_5');
            $table->integer('semester6_6');

            $table->integer('semester7_1');
            $table->integer('semester7_2');
            $table->integer('semester7_3');
            $table->integer('semester7_4');
            $table->integer('semester7_5');
            $table->integer('semester7_6');

            $table->integer('semester8_1');
            $table->integer('semester8_2');
            $table->integer('semester8_3');
            $table->integer('semester8_4');
            $table->integer('semester8_5');
            $table->integer('semester8_6');
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
        Schema::dropIfExists('pembayaran_spps');
    }
}
