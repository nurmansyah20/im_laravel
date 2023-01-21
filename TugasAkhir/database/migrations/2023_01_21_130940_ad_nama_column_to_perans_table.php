<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdNamaColumnToPeransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('perans', function (Blueprint $table) {
            $table->string('nama', 45)->required()->after('cast_id');        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('perans', function (Blueprint $table) {
            $table->dropColumn('nama');
        });
    }
}
