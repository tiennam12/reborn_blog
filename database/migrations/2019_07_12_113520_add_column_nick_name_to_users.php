<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnNickNameToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasColumns('users', ['name', 'image']) && !Schema::hasColumn('users', 'nickname')) {
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn(['name', 'user_name']);
                $table->string('fullname');
                $table->string('nickname');
                $table->string('image')->nullable()->change();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumns('users', ['fullname', 'nickname']) && !Schema::hasColumn('users', ['name', 'image'])) {
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn(['nickname', 'fullname']);
                $table->string('name');
                $table->string('user_name');
                $table->string('image');
            });
        }
    }
}
