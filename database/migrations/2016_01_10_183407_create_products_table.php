<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('products', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->string('title')->unique();
            $table->string('abstract', 255);
            $table->text('content');
            $table->dateTime('publish_date');
            $table->enum('status', ['published', 'unpublished'])->default('published');
            $table->decimal('price', 10, 2);
            $table->integer('media_id')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
      Schema::drop('products');
    }
}
