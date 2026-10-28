<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        foreach (DB::table('users')->select('name')->cursor() as $user) {
            if (mb_strlen($user->name) > 100) {
                throw new RuntimeException('A user name exceeds the 100-character POS full_name limit.');
            }
        }

        Schema::table('users', function (Blueprint $table) {
            $table->string('username', 50)->nullable()->unique();
            $table->string('full_name', 100)->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('role', 20)->default('Staff');
            $table->string('account_status', 10)->default('Active');
            $table->timestamp('last_login')->nullable();
            $table->string('avatar')->nullable();
        });

        DB::table('users')->select(['id', 'name'])->orderBy('id')->chunkById(100, function ($users): void {
            foreach ($users as $user) {
                DB::table('users')->where('id', $user->id)->update([
                    'username' => 'user'.$user->id,
                    'full_name' => $user->name,
                ]);
            }
        });

        Schema::table('users', function (Blueprint $table) {
            $table->string('username', 50)->change();
            $table->string('full_name', 100)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropUnique(['username']);
            $table->dropColumn([
                'username',
                'full_name',
                'phone',
                'role',
                'account_status',
                'last_login',
                'avatar',
            ]);
        });
    }
};
