
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellsTable extends Migration
{
    public function up()
    {
        Schema::create('sells', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity')->default(0);
            $table->date('date_sale');
            $table->float('price_sale')->default(0);
            $table->timestamps();

        });

        Schema::table('products', function(Blueprint $table){
            $table->foreignIdFor(\App\Models\sell::class)->nullable()->constrained()->cascadeOnDelete();
        });

        
    }

    public function down()
    {
        Schema::dropIfExists('sells');
    }
}
