<?php

use App\Models\Books;
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
        Schema::create('books', function (Blueprint $table) {
            $table->id('book_id');
            $table->string('author',32)->default('unknown');
            $table->string('name','150');
            $table->integer('pieces')->default(50);
            $table->timestamps();  
        });
        Books::create(['author' => 'papa',
        'name' => 'papa123@gmail.com',
        'author' => 'me'
        
    ]);        Books::create(['author' => 'tata',
    'name' => 'papa123@gmail.com',
    'author' => 'me'
    
]);        Books::create(['author' => 'mama',
'name' => 'papa123@gmail.com',
'author' => 'me'

]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
