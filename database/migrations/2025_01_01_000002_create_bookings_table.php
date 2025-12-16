<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
{
    Schema::create('bookings', function (Blueprint $table) {
        $table->id();
        $table->string('vehicle');
        $table->string('full_name');
        $table->string('phone_number');
        $table->string('queue_number')->unique();
        $table->date('booking_date');
        $table->enum('status', ['pending', 'process', 'done', 'cancel'])
              ->default('pending');
        $table->timestamps();
    });
}

    public function down(){
        Schema::dropIfExists('bookings');
    }
};