<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductVariationTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productVariation_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('productVariation_id');
            $table->string('locale')->index();
            $table->unique(['productVariation_id', 'locale']);
            $table->foreign('productVariation_id')->references('id')->on('productVariations')->onDelete('cascade');
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
        Schema::dropIfExists('productVariation_translations');
    }
}
