<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeTargetToTargetableForRelatedContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('related_contents', function (Blueprint $table) {
            $table->dropMorphs('target');
            $table->morphs('targetable');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('related_contents', function (Blueprint $table) {
            $table->morphs('target');
            $table->dropMorphs('targetable');
        });
    }
}
