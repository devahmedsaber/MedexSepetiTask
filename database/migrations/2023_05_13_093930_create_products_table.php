<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->nullable()->constrained('categories', 'id')->nullOnDelete();
            $table->string('title');
            $table->longText('description')->nullable();
            $table->double('price')->default(0);
            $table->text('image')->nullable();
            $table->enum('tag', ['normal', 'best_selling', 'most_viewed', 'just_arrived']);
            $table->bigInteger('added_by')->nullable();
            $table->integer('total_views')->default(0);
            $table->enum('is_promoted', ['yes', 'no'])->default('no');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
