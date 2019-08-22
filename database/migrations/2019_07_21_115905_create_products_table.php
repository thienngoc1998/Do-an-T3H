<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->string('origin');// xuất xứ
            $table->tinyInteger('guarantee')->default(1);//bảo hành
            $table->integer('unit_pr');
            $table->tinyInteger('promotion_pr')->default(0);
            $table->string('status');
            $table->string('avatar');
            $table->integer('number')->default(0);
            $table->string('size');
            $table->string('producer');// tên hãngx
            $table->tinyInteger('active')->default(1);
            $table->tinyInteger('hot')->default(1);
            $table->string('description');
            $table->longText('content');
            $table->bigInteger('cate_id')->unsigned();
            $table->foreign('cate_id')->references('id')->on('categories')->onDelete('cascade');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
