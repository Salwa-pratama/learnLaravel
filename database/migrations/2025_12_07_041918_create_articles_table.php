<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('title');
            $table->foreignId("author_id")->constrained(
                table: "users",
                indexName: "artciles_authot_id"
            );
            $table->foreignId("category_id")->constrained(
                table: "categories",
                indexName: "articles To categories"
            );
            $table->text('isi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }

    // Opsi pertama untuk relationship sebuah table
    // $table->unsignedBigInteger('author_id');
    // $table->foreign('author_id')->references("id")->on("users");
};
