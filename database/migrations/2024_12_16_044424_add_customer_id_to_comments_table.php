<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   
     public function up()
     {
         Schema::table('comments', function (Blueprint $table) {
             // Tambahkan kolom customer_id jika belum ada
             if (!Schema::hasColumn('comments', 'customer_id')) {
                 $table->unsignedBigInteger('customer_id');
                 $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
             }
         });
     }
     
     public function down()
     {
         Schema::table('comments', function (Blueprint $table) {
             $table->dropForeign(['customer_id']);
             $table->dropColumn('customer_id');
         });
     }
     
};
