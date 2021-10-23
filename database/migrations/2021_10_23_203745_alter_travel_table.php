<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTravelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       /* Schema::table('travel',function(Blueprint $table) {
            $table->string('title',50)->change();
            $table->index('title');
;
        });
        */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       /* Schema::table('travel',function(Blueprint $table) {
            $table->string('title',100)->change();
            $table->dropIndex('travel_title_index');
        });
        */
    }
}
