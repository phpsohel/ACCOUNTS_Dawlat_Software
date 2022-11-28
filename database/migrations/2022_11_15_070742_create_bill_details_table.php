<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('invoice_no')->nullable();
            $table->integer('bill_id')->nullable();
            $table->integer('vendor_id')->nullable();
            $table->integer('challan_id')->nullable();
            $table->integer('details_challan_id')->nullable();
            $table->decimal('qty',12,2)->default(0);
            $table->decimal('per_qty_cost',12,2)->default(0);
            $table->decimal('amount',12,2)->default(0);
            $table->integer('addedby_id')->nullable();
            $table->integer('approval_id')->nullable();
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
        Schema::dropIfExists('bill_details');
    }
}
