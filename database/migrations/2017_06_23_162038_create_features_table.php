<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('features', function (Blueprint $table) {
            // Columns of the features table
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->float('coordLat', 7, 5);
            $table->float('coordLng', 6, 5);
        });
        
        // Add features in the table
        $feature1 = ['name' => 'Plage', 'description' => 'Très joli endroit estival',
            'coordLat' => '46.78485', 'coordLng' => '6.65240'];
        DB::table('features')->insert($feature1);
        $feature2 = ['name' => 'Ecole', 'description' => 'Un endroit très studieux',
            'coordLat' => '46.77895', 'coordLng' => '6.65867'];
        DB::table('features')->insert($feature2);
        $feature3 = ['name' => 'Château', 'description' => 'A voir absolument !',
            'coordLat' => '46.77845', 'coordLng' => '6.64157'];
        DB::table('features')->insert($feature3);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('features');
    }
}
