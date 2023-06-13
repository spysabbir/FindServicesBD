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
        Schema::create('social_login_settings', function (Blueprint $table) {
            $table->id();
            $table->enum('google_login_status', ['Active', 'Inactive']);
            $table->text('google_client_id');
            $table->text('google_client_secret');
            $table->enum('facebook_login_status', ['Active', 'Inactive']);
            $table->text('facebook_client_id');
            $table->text('facebook_client_secret');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('social_login_settings');
    }
};
