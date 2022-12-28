<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class farmacoscontroller extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::creat ('maxxtest', function (Blueprint $table) {
            $table ->id();
            $table ->string('name',55);
            $table ->string('category',55);
            $table ->year('year_production');
            $table ->double('price',8,2);
            $table ->timestamp();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
