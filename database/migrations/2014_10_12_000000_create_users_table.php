<?php

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('f_azon');
            $table->string('name', 50);
            $table->string('email')->unique();
            $table->string('password');
            $table->string('telefonszam');
            $table->string('varos');
            $table->string('cim');
            $table->boolean('hirlevel')->default(0);
            //  0:felhasználó    1:admin    2:rendszer_admin
            $table->tinyInteger('jogosultsag')->default(0);
            //$table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        User::create(['name' => 'Polgár Attila', 'email' => 'polgar.attila@gmail.com', 'password' => Hash::make('Aa12345'), 'telefonszam' => '06701234567', 'varos' => 'Pécel', 'cim' => 'Petőfi Sándor utca 13', 'hirlevel' => false, 'jogosultsag' => 1]);
        User::create(['name' => 'Somoskői Gábor', 'email' => 'admin@admin.com', 'password' => Hash::make('Aa123456'), 'telefonszam' => '06701234561', 'varos' => 'Budapest', 'cim' => 'Kolompér utca 13', 'hirlevel' => true, 'jogosultsag' => 2]);
        User::create(['name' => 'Kiss András', 'email' => 'kiss.andras@gmail.com', 'password' => Hash::make('Aa1234'), 'telefonszam' => '06701234568', 'varos' => 'Debrecen', 'cim' => 'Erzsébet utca 13', 'hirlevel' => false, 'jogosultsag' => 0]);
        User::create(['name' => 'Kiss Maki', 'email' => 'kiss.asda@gmail.com', 'password' => Hash::make('Aa1234'), 'telefonszam' => '06701234568', 'varos' => 'Debrecen', 'cim' => 'Erzsébet utca 13', 'hirlevel' => false, 'jogosultsag' => 0]);
        User::create(['name' => 'Kiss Nyunyi', 'email' => 'kiss.desfsdf@gmail.com', 'password' => Hash::make('Aa1234'), 'telefonszam' => '06701234568', 'varos' => 'Debrecen', 'cim' => 'Erzsébet utca 13', 'hirlevel' => false, 'jogosultsag' => 0]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
