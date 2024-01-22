<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    /**
     * Run the migrations.
     * 
     * ***** php artisan migrate *****
     * 
    */

    public function up(): void{
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('descripcion');
            $table->text('categoria');
            $table->timestamps(); //created_at updated_at
        });
    }

    /**
     * Reverse the migrations.
     * 
     * ***** php artisan migrate:rollback *****
     * 
     * Cada vez que ejecuto este comando se vuelve 'un paso atrás' con las migraciones.
     * Primero se va el lote 2, cuando lo vuelvo a ejecutar se va el lote 1, etc (el número de lote sale en la tabla migrations)
     * 
    */

    public function down(): void{
        Schema::dropIfExists('cursos');
    }
};


/**
 * Todo esto que hemos escrito de manera manual se puede automatizar si utilizamos para el nombre de la migración la
 * nomenclatura establecida:
 * 
 * php artisan make:migration create_**nombre de la tabla**_table
 * P.ej: php artisan make:migration create_cursos_table
*/


/**
 * Si modificamos una migración y queremos que esa columna se añada, tenemos que ejecutar el comando
 * php artisan migrate:fresh
 * 
 * ATENCION!: Este comando es destructivo, ya que ejecuta primero el método down() y después el método
 * up() de cada migración.
 * Si tenemos campos rellenos en las tablas se borrarán, por lo que no hay que utilizar este comando 
 * en producción.
*/


/**
 * La clase Schema es responsable de crear, alterar y eliminar tablas de bases de datos, así como de modificar columnas, 
 * índices y restricciones de tablas. Utilizas los métodos estáticos de esta clase, como create(), table() y dropIfExists(), 
 * para definir las operaciones que deseas realizar en tu base de datos.
 * 
 * La clase Blueprint se utiliza para definir los detalles de las modificaciones del esquema de la base de datos que deseas realizar. 
 * Cuando utilizas los métodos create() o table() de la clase Schema, devuelve un objeto Blueprint que puedes usar para 
 * especificar las columnas, índices y restricciones para la tabla que estás creando o modificando.
*/

// php artisan make:migration add_avatar_to_users_table

