<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            // $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->text('product_name');
            $table->text('product_address');
            $table->text('client_name');
            $table->text('client_phone_number');
            $table->text('price_org');
            $table->text('price_selled');
            $table->text('file_url')->nullable();
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
