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
        // Eloquent untuk pembuatan sebuah table di laravel
        Schema::create('users_latihan',  function (Blueprint $table): void {
            $table->id();
            $table->string("first_name");
            $table->string("last_name");
            $table->string("username")->unique();
            $table->string("email")->unique();
            $table->string("email_verified_at")->nullable();
            $table->string("password");
            $table->enum("role", ["admin", "user", "staff"])->default("user");
            $table->enum("status", ["verify", "active", "banned"]);
            $table->rememberToken();
            $table->timestamps();
        });


        
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_latihan');
    }
};
