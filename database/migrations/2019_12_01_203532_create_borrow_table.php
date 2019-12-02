<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBorrowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrow', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('book_id');
            $table->bigInteger('student_id');
            $table->date('loan_date');
            $table->date('return_date');
            $table->float('fine_price', 8, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('borrow');
    }
}
