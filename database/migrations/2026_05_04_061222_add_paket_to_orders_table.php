<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->string('paket')->after('no_hp');
            $table->boolean('drone')->default(0);
            $table->boolean('fast_edit')->default(0);
            $table->integer('total_harga')->default(0);
        });
    }


    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn(['paket', 'drone', 'fast_edit', 'total_harga']);
        });
    }
};
