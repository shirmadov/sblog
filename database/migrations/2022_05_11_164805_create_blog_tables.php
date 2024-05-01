<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heading', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('parent_id')->nullable();
            $table->timestamps();
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('heading_id');
            $table->integer('blog_id');
            $table->foreign('heading_id')->references('id')->on('heading')->onDelete('cascade');;
            $table->timestamps();
        });

        Schema::create('blog', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug_name');
            $table->longText('text');
            $table->string('document_name')->nullable();
            $table->string('document_path')->nullable();
            $table->integer('likes')->default(0);
            $table->unsignedBigInteger('user_id');
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
        Schema::dropIfExists('blog_tables');
    }
}
