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
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->string('title');
            $table->string('company', 100);
            $table->string('phone', 100);
            $table->string('email')->nullable();
      
            
            $table->string('lead_source')->nullable();
            $table->string('lead_status')->nullable();

            $table->string('street',100)->nullable();
            $table->string('city',100)->nullable();
            $table->string('state',200)->nullable();;
            $table->string('zip_code',15)->nullable();;
            $table->string('country',150)->nullable();;
            
            $table->string('discription')->nullable();;
            
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
        Schema::dropIfExists('leads');
    }
};
