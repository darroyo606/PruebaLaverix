<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('url')->unique();
            $table->timestamps();
        });

        Schema::table('users', function (Blueprint $table){
            $table->unsignedBigInteger('roles_id')->nullable()->after('id');


            $table->foreign('roles_id')->references('id')->on('roles')
            ->onUpdate('cascade')
            ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('users', function (Blueprint $table){
            $table->dropForeign('users_roles_id_foreign');
            $table->dropColumn('roles_id');
        });


        Schema::dropIfExists('roles');
    }
}
