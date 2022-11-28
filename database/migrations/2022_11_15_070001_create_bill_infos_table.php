<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('invoice_no')->nullable();
            $table->integer('challan_id')->nullable();
            $table->integer('vendor_id')->nullable();
            $table->string('challan_no')->nullable();
            $table->date('billing_date')->nullable();
            $table->decimal('vat',4,0)->default(0);
            $table->decimal('vat_tk',4,2)->default(0);
            $table->decimal('ait',4,0)->default(0);
            $table->decimal('ait_tk',4,2)->default(0);
            $table->decimal('duty',4,0)->default(0);
            $table->decimal('duty_tk',4,2)->default(0);
            $table->decimal('charge',4,0)->default(0);
            $table->decimal('charge_tk',4,2)->default(0);
            $table->decimal('payable_amount',12,2)->default(0);
            $table->decimal('paid_amount',12,2)->default(0);
            $table->decimal('due_amount',12,2)->default(0);
            $table->integer('billing_status')->default(1)->comment("Unpaid-1 | Pertially-2 | Paid-3");
            $table->integer('soft_deleted')->default(1)->comment("Active-1 | Deleted-0");
            $table->text('remarks')->nullable();
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
        Schema::dropIfExists('bill_infos');
    }
}
