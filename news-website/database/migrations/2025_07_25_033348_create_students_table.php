<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('admission_no',10)->unique();
            $table->string('student_name',50);
            $table->string('father_name',50);
            $table->string('gender',10);
            $table->string('telephone_no',20);
            $table->string('nic_no',15);
            $table->date('date_of_birth');
            $table->string('address',50);
            $table->date('join_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
