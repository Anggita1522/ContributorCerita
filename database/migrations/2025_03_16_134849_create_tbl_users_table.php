<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        // Cek jika tabel belum ada sebelum membuatnya
        if (!Schema::hasTable('tbl_users')) {
            Schema::create('tbl_users', function (Blueprint $table) {
                $table->id('user_id'); // Primary Key
                $table->string('username', 50);
                $table->string('email', 100)->unique();
                $table->string('password');
                $table->enum('role', ['user', 'admin'])->default('user');
                $table->timestamp('created_at')->useCurrent();
                $table->enum('status', ['aktif', 'nonaktif'])->default('aktif');
            });
        }

        // Cek jika tabel password_reset_tokens belum ada sebelum membuatnya
        if (!Schema::hasTable('password_reset_tokens')) {
            Schema::create('password_reset_tokens', function (Blueprint $table) {
                $table->string('email')->primary();
                $table->string('token');
                $table->timestamp('created_at')->nullable();
            });
        }

        // Cek jika tabel sessions belum ada sebelum membuatnya
        if (!Schema::hasTable('sessions')) {
            Schema::create('sessions', function (Blueprint $table) {
                $table->string('id')->primary();
                $table->foreignId('user_id')->nullable()->index();
                $table->string('ip_address', 45)->nullable();
                $table->text('user_agent')->nullable();
                $table->longText('payload');
                $table->integer('last_activity')->index();
            });
        }
    }

    public function down() {
        Schema::dropIfExists('tbl_users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
