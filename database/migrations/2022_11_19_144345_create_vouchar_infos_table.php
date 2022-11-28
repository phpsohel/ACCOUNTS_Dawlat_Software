<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoucharInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vouchar_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('voucher_no')->nullable();
            $table->integer('bill_id')->nullable();
            $table->integer('vendor_id')->nullable();
            $table->integer('payment_type')->nullable()->comment('Cash-1 | Bank/Cheque-2');
            $table->string('bank_name')->nullable();
            $table->string('branch_name')->nullable();
            $table->string('cheque_number')->nullable();
            $table->date('payment_date')->nullable();
            $table->decimal('paid_amount',15,2)->default(0);
            $table->integer('addedby_id')->nullable();
            $table->integer('editedby_id')->nullable();
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
        Schema::dropIfExists('vouchar_infos');
    }
}
