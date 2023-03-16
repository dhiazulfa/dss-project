<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kpis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('developer_id');
            $table->date('tgl_penilain');
            $table->string('kpi_name');
            $table->decimal('bobot',10,2);
            $table->decimal('target_min',10,2);
            $table->decimal('realisasi',10,2);
            $table->decimal('skor',10,2);
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
        Schema::dropIfExists('kpis');
    }
};
