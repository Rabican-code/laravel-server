<?php

use Illuminate\Support\Facades\Schema;

use Illuminate\Database\Schema\Blueprint;

use Illuminate\Database\Migrations\Migration;



class CreateTableProducts extends Migration

{

   /**

    * Run the migrations.

    *

    * @return void

    */

   public function up()

   {

         Schema::create('products', function (Blueprint $table) {

           $table->increments('pid');

           $table->string('name');

           $table->decimal('price');

           $table->text('description');

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

       //

   }

}
