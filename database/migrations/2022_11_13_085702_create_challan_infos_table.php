<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChallanInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('challan_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('challan_no');
            $table->integer('biller_id')->nullable();
            $table->integer('vendor_customer_id')->nullable();
            $table->integer('delivery_person_id')->nullable();
            $table->integer('sales_person_id')->nullable();
            $table->string('sales_person')->nullable();
            $table->string('delivery_person')->nullable();
            $table->string('delivery_place')->nullable();
            $table->date('shipping_date')->nullable();
            $table->date('admin_approval_date')->nullable();
            $table->date('bill_approval_date')->nullable();
            $table->integer('bill_approval_status')->default(1)->comment('Pending-1 | Approved-2');
            $table->integer('admin_approval_status')->default(1)->comment('Pending-1 | Approved-2');
            $table->string('shipping_item')->nullable();
            $table->integer('addedby_id')->nullable();
            $table->integer('approval_id')->nullable();
            $table->integer('status')->default(1)->comment("Active-1 | Inavtive-2");
            $table->integer('soft_deleted')->default(1)->comment("Active-1 | Deleted-0");
            $table->text('remarks')->nullable();
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
        Schema::dropIfExists('challan_infos');
    }
}
