<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbstractTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abstract', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('article_id')->references('id')->on('articles');
            $table->string('title')->nullable();
            $table->mediumText('abstract')->nullable();
            $table->string('img')->nullable();
            $table->boolean('is_delete')->default(0);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abstract');
    }
}
