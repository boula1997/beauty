<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itemRequests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('store_id');
            $table->unsignedBigInteger('reviewer_id')->nullable();
            $table->string('type')->nullable()->comment('create, edit');
            $table->longText('data')->nullable();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->string('status')->nullable()->comment('pending, accepted', 'rejected');
            $table->string('rejected_reason')->nullable();
            $table->string('affected_fields')->nullable();
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('reviewer_id')->references('id')->on('admins')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itemRequests');
    }
}
