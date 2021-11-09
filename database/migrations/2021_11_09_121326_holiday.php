<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Holiday extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('holiday', function (Blueprint $table) {
            $table->id();
            $table->dateTime('duration');
            $table->longText('description')->nullable();
            $table->date('date');
            $table->enum('type', ['Sick_holiday', 'annual_holiday','Official_holiday','Marriage_holiday','condolence_holiday','for_an_hour']);
            $table->enum('status', ['pending', 'approve','rejected']);
            $table->unsignedBigInteger('employee_id');
            $table->foreign('employee_id')->references('id')->on('employee')->onDelete('cascade');
            $table->rememberToken();
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
        Schema::dropIfExists('holiday');

    }
}
