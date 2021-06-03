<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendanceTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendance_tables', function (Blueprint $table) {
            $table->id();
            $table->String("idno", 30)->unique();
            $table->String('fname', 16);
            $table->String('lname', 16);
            $table->String('gender', 16);
            $table->String('status', 16);
            $table->String('village', 16);
            $table->String('cell', 16);
            $table->String('sector', 16);
            $table->String('district', 16);

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
        Schema::dropIfExists('attendance_tables');
    }
}
