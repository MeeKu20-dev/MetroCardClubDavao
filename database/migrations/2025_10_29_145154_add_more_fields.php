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
        Schema::table('members', function (Blueprint $table) {
            $table->string('alternative_name');
            $table->string('present_address');
            $table->string('permanent_address');
            $table->string('civil_status');
            $table->date('birthday');
            $table->string('birth_place');
            $table->string('nationality');
            $table->string('email');
            $table->string('mobile_number', 15);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('members', function (Blueprint $table) {
            //
        });
    }
};
