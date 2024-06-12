<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


/* 
    Ogni treno dovrà avere:

    Azienda
    Stazione di partenza
    Stazione di arrivo
    Orario di partenza
    Orario di arrivo
    Codice Treno
    Numero Carrozze
    In orario
    Cancellato
*/

return new class extends Migration
{
    /**
     * Run the migrations.
     *  Create TABLE 'train' (
     *  'id' Unsigned BIGINT NOT NULL AUTO_INCREMENT,
     *  'company' VARCHAR(255) NOT NULL,
     *  'departure_station' VARCHAR(255) NOT NULL,
     *  'arrival_station' VARCHAR(255) NOT NULL,
     *  'departure_time' TIME NOT NULL,
     *  'arrival_time' TIME NOT NULL,
     *  'train_code' Unsigned SMALLINT NOT NULL,
     *  'train_cars' Unsigned SMALLINT,
     *  'is_on_time' Unsigned TINYINT NOT NULL DEFAULT(1),
     *  'is_deleted' Unsigned TINYINT NOT NULL DEFAULT(0),
     * 
     *  'created_at' TIMESTAMP NULL,
     *  'updated_at' TIMESTAMP NULL,
     *   PRIMARY KEY('id')
     * );
     * 
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('departure_station');
            $table->string('arrival_station');
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->unsignedSmallInteger('train_code');
            $table->unsignedSmallInteger('train_cars');
            $table->unsignedTinyInteger('is_on_time')->default(true);
            $table->unsignedTinyInteger('is_deleted')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
