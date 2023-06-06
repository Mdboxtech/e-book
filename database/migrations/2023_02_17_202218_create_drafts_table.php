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
        Schema::create('drafts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            // $table->string('user_id');
            $table->foreignId('file_id')->constrained('files')->onDelete('cascade')->onUpdate('cascade');
            $table->string('filename');
            $table->string('faculty');
            $table->string('course');
            $table->string('level');
            $table->string('poster');
            $table->string('file');
            $table->longText('description');
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
        Schema::dropIfExists('drafts');
    }
};
