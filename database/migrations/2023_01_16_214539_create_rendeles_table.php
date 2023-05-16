<?php

use App\Models\Rendeles;
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
        Schema::create('rendeles', function (Blueprint $table) {
            $table->id('rendeles_id');
            $table->date('kelt');
            $table->foreignId('megrendelo')->references('f_azon')->on('users');
            $table->char('statusz', 3);
            $table->timestamps();
        });
        Rendeles::create(['kelt' => '2020-11-03', 'megrendelo' => '1', 'statusz' => 'FDA']);
        Rendeles::create(['kelt' => '2020-11-04', 'megrendelo' => '2', 'statusz' => 'JVH']);
        Rendeles::create(['kelt' => '2020-11-05', 'megrendelo' => '3', 'statusz' => 'FDA']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rendeles');
    }
};
