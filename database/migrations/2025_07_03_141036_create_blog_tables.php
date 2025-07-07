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
        Schema::create('blog_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name', 155)->unique();
            $table->string('slug', 155)->unique();
            $table->timestamps();
        });

        Schema::create('blog_posts', function (Blueprint $table) {
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

        Schema::create('blog_category_post', function (Blueprint $table) {
            $table->id();
            $table->foreignId("post_id")
                ->constrained('blog_posts')
                ->cascadeOnDelete();
            $table->foreignId("category_id")
                ->constrained('blog_categories')
                ->cascadeOnDelete();
            $table->timestamps();
        });

        Schema::create('blog_comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('post_id')
                ->constrained( 'blog_posts')
                ->cascadeOnDelete();
            $table->text('comment');
            $table->boolean('approved')->default(false);
            $table->dateTime('approved_at')->nullable();
            $table->timestamps();
        });

        Schema::create('blog_tags', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->unique();
            $table->string('slug', 155)->unique();
            $table->timestamps();
        });

        Schema::create('blog_post_blog_tag', function (Blueprint $table) {
            $table->id();
            $table->foreignId("post_id")
                ->constrained('blog_posts')
                ->cascadeOnDelete();
            $table->foreignId("tag_id")
                ->constrained('blog_tags')
                ->cascadeOnDelete();
            $table->timestamps();
        });

        Schema::create( 'blog_share_snippets', function (Blueprint $table) {
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
        Schema::dropIfExists('blog_categories');
        Schema::dropIfExists('blog_users');
        Schema::dropIfExists('blog_posts');
        Schema::dropIfExists('blog_category_blog_post');
        Schema::dropIfExists('blog_comments');
        Schema::dropIfExists('blog_tags');
        Schema::dropIfExists('blog_post_blog_tag');
        Schema::dropIfExists('blog_share_snippets');
    }
};
