<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(){
        Schema::create('bookings', function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('service_id');
            $table->date('date');
            $table->time('start_time');
            $table->enum('status',['pending','confirmed','in_progress','completed','cancelled'])->default('pending');
            $table->string('vehicle_plate');
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('bookings');
    }
};