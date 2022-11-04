<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->id()->comment('編號');
            $table->string('brand',100)->nullable(false)->comment('汽車品牌');
            $table->string('nationality',191)->nullable(false)->comment('國家');
            $table->date('time')->default('1916-01-01')->nullable()->comment('創立時間');;
            $table->string('places',191)->nullable(false)->comment('總部');
            $table->string('ceo',100)->nullable(false)->comment('創辦人');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brands');
    }
}
