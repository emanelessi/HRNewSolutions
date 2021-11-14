<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHolidaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('holidays', function (Blueprint $table) {
            $table->id();
            $table->dateTime('duration');
            $table->longText('description')->nullable();
            $table->date('date');
            $table->enum('type', ['Sick holiday','annual holiday','Official holiday','Marriage holiday','condolence holiday','for an hour','New Years Eve','Israa and meraaj','Prophets Birthday','Labor Day','Eid al-Fitr','Eid al-Adha','Islamic New Year','Independence Day','Christmas']);
            $table->enum('status', ['pending', 'approve','rejected']);
            $table->unsignedBigInteger('employee_id');
            $table->foreign('employee_id')->references('id')->on('users')->cascadeOnDelete();
            $table->softDeletes();
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
        Schema::dropIfExists('holidays');
    }
}
