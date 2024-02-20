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
        Schema::table('employees', function (Blueprint $table) {
            $table->string('nationality')->nullable()->after('phone');
            $table->string('employeeid')->nullable()->after('nationality');
            $table->string('activedate')->nullable()->after('employeeid');
            $table->string('identitycard')->nullable()->after('activedate');
            $table->string('description')->nullable()->after('identitycard');
            $table->string('status')->nullable()->after('description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->dropColumn([
                'nationality',
                'employeeid',
                'activedate',
                'identitycard',
                'description',
                'status',
            ]);
        });
    }
};
