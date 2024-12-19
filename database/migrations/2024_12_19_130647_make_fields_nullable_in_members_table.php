<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('members', function (Blueprint $table) {
            $table->foreignId('family_id')->nullable()->change();
            $table->string('first_name')->nullable()->change();
            $table->string('last_name')->nullable()->change();
            $table->text('address')->nullable()->change();
            $table->string('phone')->nullable()->change();
            $table->string('email')->nullable()->change();
            $table->text('notes')->nullable()->change();
            $table->text('prayer_requests')->nullable()->change();
            $table->date('last_visited_date')->nullable()->change();
            $table->string('clothing_size')->nullable()->change();
            $table->string('picture')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('members', function (Blueprint $table) {
            $table->foreignId('family_id')->nullable(false)->change();
            $table->string('first_name')->nullable(false)->change();
            $table->string('last_name')->nullable(false)->change();
            $table->text('address')->nullable(false)->change();
            $table->string('phone')->nullable(false)->change();
            $table->string('email')->nullable(false)->change();
            $table->text('notes')->nullable(false)->change();
            $table->text('prayer_requests')->nullable(false)->change();
            $table->date('last_visited_date')->nullable(false)->change();
            $table->string('clothing_size')->nullable(false)->change();
            $table->string('picture')->nullable(false)->change();
        });
    }
};
