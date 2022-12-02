<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id', 20);
            $table->string('slug', 190)->index('slug');
            $table->string('title', 200);
            $table->string('description', 200);
            $table->string('keywords', 200);
            $table->longText('content');
            $table->string('status', 20)->default('draft');
            $table->string('type', 20);
            $table->char('created_by', 36)->index('created_by');
            $table->timestamps();
            $table->index(['type','status','id'], 'type_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
