<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAdressToBranchOffices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('branch_offices', function (Blueprint $table) {
            //
            $table->string('street');
            $table->string('colony');
            $table->string('city');
            $table->string('state');
            $table->string('cp');
            $table->point('location');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('branch_offices', function (Blueprint $table) {
            //
            $table->dropColumn('street');
            $table->dropColumn('colony');
            $table->dropColumn('city');
            $table->dropColumn('state');
            $table->dropColumn('cp');
            $table->dropColumn('point');
        });
    }
}
