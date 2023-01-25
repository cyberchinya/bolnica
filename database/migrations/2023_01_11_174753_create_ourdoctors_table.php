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
        Schema::create('ourdoctors', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('desk')->nullable();
            $table->longText('content');
            $table->text('image')->nullable();
            $table->text('document')->nullable();
            $table->boolean('is_published')->default(false);
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
        Schema::dropIfExists('ourdoctors');
    }
};
