<?php

use App\Models\Copie;
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
         Schema::create('copie', function(Blueprint $table){
             $table->id('copy_id');
             $table->foreignId('user_id')->references('id')->on('users');
             $table->id('book_id')->references('book_id')->on('books');
             $table->timestamps();
 
         });
         Copie::create(['book_id' => '2',
         'user_id' => '3'
         
     ]);        Copie::create(['book_id' => '1',
     'user_id' => '3'
     
 ]);        Copie::create(['book_id' => '3',
 'user_id' => '3'
 
 ]);
     }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('copies');
    }
};
