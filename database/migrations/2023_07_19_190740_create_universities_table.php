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
        Schema::create('universities', function (Blueprint $table) {
            $table->id();
            $table->string('fullname')->nullable();
            $table->integer('idno')->nullable()->unique();
            $table->string('email')->nullable();
            $table->string('passport')->default('no');
            $table->string('passport_no')->nullable();
            $table->string('image')->nullable();
            $table->string('gender')->nullable();
            $table->string('passport_date')->nullable();
            $table->string('pwd')->default('no');
            $table->string('subcounty')->nullable();
            $table->string('ward')->nullable();
            $table->string('school')->nullable();
            $table->string('grade')->nullable();
            $table->string('kcse_date')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('mobile')->nullable();
            $table->string('course1')->nullable();
            $table->string('course2')->nullable();
            $table->string('course3')->nullable();
            $table->string('cont_person')->nullable();
            $table->string('cont_number')->nullable();
            $table->string('result_slip')->nullable();
            $table->string('cert_copy')->nullable();
            $table->string('pass_copy')->nullable();
            $table->string('id_copy')->nullable();
            $table->string('status')->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('universities');
    }
};