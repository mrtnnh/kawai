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
    if(!Schema::hasTable('sesforms')){
        Schema::create('sesforms', function (Blueprint $table) {
        $table->id();
        $table->string('company');
        $table->string('name');
        $table->string('email');
        $table->string('tell');
        $table->text('message')->nullable(true);
        $table->timestamps();
    });
}
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sesforms');
    }
};
