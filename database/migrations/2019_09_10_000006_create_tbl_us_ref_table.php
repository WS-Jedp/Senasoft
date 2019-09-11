<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblUsRefTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'tbl_us_ref';

    /**
     * Run the migrations.
     * @table tbl_us_ref
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->increments('usuarios_id');
            $table->integer('refrigerios_id');
            $table->integer('estado')->nullable();

            $table->index(["usuarios_id"], 'fk_usuarios_has_refrigerios_usuarios_idx');

            $table->index(["refrigerios_id"], 'fk_usuarios_has_refrigerios_refrigerios1_idx');


            $table->foreign('usuarios_id', 'fk_usuarios_has_refrigerios_usuarios_idx')
                ->references('id')->on('tbl_usuario')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('refrigerios_id', 'fk_usuarios_has_refrigerios_refrigerios1_idx')
                ->references('id')->on('tbl_refrigerio')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
