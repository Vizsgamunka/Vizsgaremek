<?php

use App\Models\Tervezo;
use Faker\Provider\Lorem;
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
        Schema::create('tervezos', function (Blueprint $table) {
            $table->id('t_azon');
            $table->string('nev', 40);
            $table->text('kep');
            $table->text('leiras');
            $table->timestamps();
        });

        Tervezo::create(['nev' => 'Christian Dior', 'kep' => 'tervezoKepek/Christian_Dior.jpg', 'leiras' => 'Szenvedélyes tervező vagyok, aki szeretne ruháival nőket boldogabbá tenni. Célom, hogy olyan ruhákat tervezek, amelyek nemcsak stílusosak, de kényelmesek is, és kiemelik a nők szépségét.']);
        Tervezo::create(['nev' => 'Ralph Lauren', 'kep' => 'tervezoKepek/Ralph_Lauren.jpg', 'leiras' => 'A divat mindig is az életem része volt, és ez a szenvedélyem azóta sem hagyott alább. A tervezői munka számomra a kreativitás és az önkifejezés egy formája, amellyel a nőket szeretném inspirálni.']);
        Tervezo::create(['nev' => 'Rick Owens', 'kep' => 'tervezoKepek/Rick_Owens.jpg', 'leiras' => 'Célom, hogy olyan ruhákat tervezzek, amelyek stílusosak, mégis praktikusak és kényelmesek. Szeretem a minimalista megközelítést, de szeretnék néhány egyedi részletet belecsempészni a tervezéseimbe.']);
        Tervezo::create(['nev' => 'Virgil Abloh', 'kep' => 'tervezoKepek/Virgil_Abloh.jpg', 'leiras' => 'A nőiesség és a stílus mindig is fontos szerepet játszottak az életemben. Szeretem a letisztult, elegáns vonalvezetést, de szeretnék olyan ruhákat tervezni, amelyek az egyéniségünket is kiemelik.']);
        Tervezo::create(['nev' => 'Yves Saint Laurent', 'kep' => 'tervezoKepek/Yves_Saint_Laurent.jpg', 'leiras' => 'Az inspirációmat a természetből merítem, és szeretném ezt az érzést belecsempészni a tervezéseimbe. Célom, hogy olyan ruhákat tervezzek, amelyek stílusosak és egyediek, de mindig kényelmesek és könnyen viselhetőek.']);
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tervezos');
    }
};
