<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnHistory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('table_history', function (Blueprint $table) {
            $table->string('Name');
            $table->string('Action_Name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('table_history', function (Blueprint $table) {
        //     $table->dropColumn('Name');
        //     $table->dropColumn('Action_Name');
        // });
    }
}
