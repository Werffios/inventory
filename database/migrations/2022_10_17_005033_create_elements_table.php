<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Element;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elements', function (Blueprint $table) {
            $table->id();
            $table->string('placa')->unique();
            $table->string('name');
            $table->string('serial');
            $table->string('model');
            $table->string('features');
            $table->boolean('movable') ->default(Element::STATUS_UNMOVABLE);   // "si, no" también pueden funcionar
            $table->unsignedBigInteger('trademark_id')->nullable();
            $table->unsignedBigInteger('type_id')->nullable();
            $table->unsignedBigInteger('dependency_id')->nullable();
            $table->unsignedBigInteger('ubication_id')->nullable();
            $table->timestamps();
            //Foreign key
            $table->foreign('trademark_id')->references('id')->on('trademarks')->onDelete('set null');
            $table->foreign('type_id')->references('id')->on('types')->onDelete('set null');
            $table->foreign('dependency_id')->references('id')->on('dependencies')->onDelete('set null');
            $table->foreign('ubication_id')->references('id')->on('ubications')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('elements');
    }
};
