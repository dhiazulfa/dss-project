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
        Schema::create('developers_kpi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('developer_id');
            $table->foreignId('kpi_id');
            $table->date('tgl_penilaian');
            $table->decimal('realisasi',10,2);
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
        Schema::dropIfExists('developers_kpi');
    }
};
