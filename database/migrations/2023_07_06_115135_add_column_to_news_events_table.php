<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToNewsEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('news_events', function (Blueprint $table) {
            $table->string('gallery_image')->after('image')->nullable();
            $table->date('date')->after('gallery_image')->nullable();
            $table->string('referral_link')->after('date')->nullable();
            $table->string('video_link')->after('referral_link')->nullable();
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('news_events', function (Blueprint $table) {
            //
        });
    }
}
