<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChallanDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('challan_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('challan_no')->nullable();
            $table->string('po_number')->nullable();
            $table->integer('challan_id')->nullable();
            $table->text('item_details')->nullable();
            $table->double('qty',10.0)->default(0);
            $table->integer('status')->default(1)->comment("Active-1 | Inavtive-2");
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
        Schema::dropIfExists('challan_details');
    }
}
