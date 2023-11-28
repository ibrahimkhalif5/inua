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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('fullname')->nullable();
            $table->integer('idno')->nullable()->unique();
            $table->string('gender')->nullable();
            $table->string('passport')->default('no');
            $table->string('passport_no')->nullable();
            $table->string('pwd')->default('no');
            $table->string('subcounty')->nullable();
            $table->string('ward')->nullable();
            $table->string('mobile')->nullable();
            $table->string('education')->nullable();
            $table->string('qualification')->nullable();
            $table->string('employer')->nullable();
            $table->string('exp_year')->nullable();
            $table->string('position')->nullable();
            $table->longText('work')->nullable();
            $table->string('image')->nullable();
            $table->string('id_copy')->nullable();
            $table->string('grade')->nullable();
            $table->string('email')->nullable();
            $table->string('parent_name')->nullable();
            $table->string('parent_no')->nullable();
            $table->string('passport_date')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('group_type')->default('employment');
            $table->string('status')->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};