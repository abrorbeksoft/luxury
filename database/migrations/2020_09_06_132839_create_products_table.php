<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("alias");
            $table->text("content");
            $table->unsignedFloat("price");
            $table->unsignedFloat("old_price");
            $table->enum("status",[0,1]);
            $table->string("keywords");
            $table->string("description");
            $table->string("img");
            $table->enum("hit",[0,1]);
            $table->unsignedBigInteger("category_id");
            $table->unsignedBigInteger("brand_id");
            $table->foreign("category_id")->references("id")->on("categories");
            $table->foreign("brand_id")->references("id")->on("brands");
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
        Schema::dropIfExists('products');
    }
}
