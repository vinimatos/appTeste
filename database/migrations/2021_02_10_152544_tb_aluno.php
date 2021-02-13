<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<< HEAD:database/migrations/2021_02_09_234707_alunos_table.php
class AlunosTable extends Migration
=======
class TbAluno extends Migration
>>>>>>> 7c7c480e4f6a5dbe051ccfb57e1a9312c1e6584d:database/migrations/2021_02_10_152544_tb_aluno.php
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD:database/migrations/2021_02_09_234707_alunos_table.php
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('cpf')->unique();
            $table->string('endereco');
            $table->string('cidade');
=======
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
>>>>>>> 7c7c480e4f6a5dbe051ccfb57e1a9312c1e6584d:database/migrations/2021_02_10_152544_tb_aluno.php
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
<<<<<<< HEAD:database/migrations/2021_02_09_234707_alunos_table.php
        Schema::dropIfExists('alunos');
=======
        //
>>>>>>> 7c7c480e4f6a5dbe051ccfb57e1a9312c1e6584d:database/migrations/2021_02_10_152544_tb_aluno.php
    }
}
