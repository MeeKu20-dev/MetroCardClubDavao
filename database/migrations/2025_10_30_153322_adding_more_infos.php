<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PhpParser\Node\Expr\Cast\Void_;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('members', function (Blueprint $table) {
            $table->string('source_of_income')->nullable();
            $table->string('business_name')->nullable();
            $table->string('business_nature')->nullable();
            $table->string('employer_name')->nullable();
            $table->string('work_nature')->nullable();
            $table->string('political_exposed')->nullable();
            $table->string('emergency_name');
            $table->string('emergency_relationship');
            $table->string('emergency_contact');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
