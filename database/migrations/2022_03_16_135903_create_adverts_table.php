<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adverts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignIdFor(User::class)->nullable();
            $table->string('nickname')->nullable();
            $table->string('min-limit')->nullable();
            $table->string('max-limit')->nullable();
            $table->string('limits')->nullable();
            $table->string('rate')->nullable();
            $table->string('base')->nullable();
            $table->string('quote')->nullable();
            $table->jsonb('payment_methods')->nullable();
            $table->string('completion_rate')->nullable();
            $table->string('type')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('adverts');
    }
}
