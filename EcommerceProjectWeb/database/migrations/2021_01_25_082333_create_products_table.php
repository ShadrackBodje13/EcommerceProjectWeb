<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');//nom produit
            $table->text('image_name');//Chemin de l'image
            $table->text('description');//la description du produit
            $table->integer('quantity');//La quantité du produit dans notre base de donnée
            $table->integer('price');//Le price en € du produit
            $table->integer('discount');//Pour unr remise une remise produit
            $table->text('tag');//La marque du produit
            $table->integer('category_id')->unsigned();//La foreign key, pour la jonction entre les tables prdiot et categories produit
            $table->foreign('category_id')
                ->references('id')->on('categories')//Modele Categories
                ->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
}
