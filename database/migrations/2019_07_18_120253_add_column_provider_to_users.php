<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnProviderToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumns('users', ['provider', 'provider_id'])) {
            Schema::table('users', function (Blueprint $table) {
                $table->string('provider')->nullable();
                $table->string('provider_id')->nullable();
                $table->string('password')->nullable()->change();
                $table->string('nickname')->nullable()->change();
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
        if (Schema::hasColumns('users', ['provider', 'provider_id'])) {    
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn(['provider', 'provider_id']);
                $table->string('password');
                $table->string('nickname');
            });
        }
    }
}
