<?php

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
        Schema::create('bps', function (Blueprint $table) {
            $table->id();
            // post information
            $table->string("Denomination");
            $table->enum("Classe",["RP","HC","R1","R2","R3","R4"]);
            $table->integer("Ccp")->default(0)->unique();
            $table->integer("Code Comptable")->default(0)->unique();
            $table->integer("Code Postal")->default(0);
            $table->integer("Telephone")->default(0);
            $table->string("Id Terminal")->nullable();
            $table->string("Id Marchant")->nullable();
            // network information
            $table->ipAddress("Lan")->default("")->unique();
            $table->ipAddress("Wan")->default("")->unique();
            $table->ipAddress("Loopback0")->default("")->unique();
            $table->ipAddress("Loopback1")->default("")->unique();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bps');
    }
};
