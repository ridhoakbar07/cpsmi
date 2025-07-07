<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name', 155)->unique();
            $table->string('slug', 155)->unique();
            $table->timestamps();
        });

        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('sub_title')->nullable();
            $table->longText('body');
            $table->enum('status', ['published', 'scheduled', 'pending'])->default('pending');
            $table->dateTime('published_at')->nullable();
            $table->dateTime('scheduled_for')->nullable();
            $table->string('cover_photo_path');
            $table->string('photo_alt_text');
            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->timestamps();
        });

        Schema::create('category_post', function (Blueprint $table) {
            $table->id();
            $table->foreignId('post_id')
                ->constrained('posts')
                ->cascadeOnDelete();
            $table->foreignId('category_id')
                ->constrained('categories')
                ->cascadeOnDelete();
            $table->timestamps();
        });

        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('post_id')
                ->constrained( 'posts')
                ->cascadeOnDelete();
            $table->text('comment');
            $table->boolean('approved')->default(false);
            $table->dateTime('approved_at')->nullable();
            $table->timestamps();
        });

        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->unique();
            $table->string('slug', 155)->unique();
            $table->timestamps();
        });

        Schema::create('post_tag', function (Blueprint $table) {
            $table->id();
            $table->foreignId('post_id')
                ->constrained('posts')
                ->cascadeOnDelete();
            $table->foreignId('tag_id')
                ->constrained('tags')
                ->cascadeOnDelete();
            $table->timestamps();
        });

        Schema::create( 'share_snippets', function (Blueprint $table) {
            $table->id();
            $table->longText('script_code');
            $table->text('html_code');
            $table->boolean('active')->default(true);
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
        Schema::dropIfExists('post_tag');
        Schema::dropIfExists('category_post');
        Schema::dropIfExists('comments');
        Schema::dropIfExists('posts');
        Schema::dropIfExists('tags');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('share_snippets');
    }
};
