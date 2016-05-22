<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profiles', function ($table) {

            $table->string('user_type');
            $table->string('website_url');
            $table->text('profile_description');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profiles', function ($table) {

            $table->dropColumn('user_type');
            $table->dropColumn('website_url');
            $table->dropColumn('profile_description');

        });
    }
}
