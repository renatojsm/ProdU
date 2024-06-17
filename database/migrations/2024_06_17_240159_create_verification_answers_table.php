<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVerificationAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verification_answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('verification_question_id')->constrained('verification_questions')->onDelete('cascade');
            $table->enum('tipo', ['Preliminar', 'Final']);
            $table->enum('valor', ['Sim', 'Nao', 'N\A']);
            $table->text('observacao')->nullable();
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
        Schema::dropIfExists('verification_answers');
    }
}
