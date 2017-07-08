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
        $feature1 = ['name' => 'Beach', 'description' => 'Nice place in summer',
            'coordLat' => '46.78485', 'coordLng' => '6.65240'];
        DB::table('features')->insert($feature1);
        $feature2 = ['name' => 'School', 'description' => 'A serious place',
            'coordLat' => '46.77895', 'coordLng' => '6.65867'];
        DB::table('features')->insert($feature2);
        $feature3 = ['name' => 'Castle', 'description' => 'A lot of things to see',
            'coordLat' => '46.77845', 'coordLng' => '6.64157'];
        DB::table('features')->insert($feature3);
        $feature4 = ['name' => 'Sport', 'description' => 'Time to move!',
            'coordLat' => '46.78016', 'coordLng' => '6.6545'];
        DB::table('features')->insert($feature4);
        $feature5 = ['name' => 'Station', 'description' => 'Let\'s travel!',
            'coordLat' => '46.78163', 'coordLng' => '6.64094'];
        DB::table('features')->insert($feature5);
        $feature6 = ['name' => 'St-Roch', 'description' => 'St-Roch center',
            'coordLat' => '46.78137', 'coordLng' => '6.64742'];
        DB::table('features')->insert($feature6);
        $feature7 = ['name' => 'Swimming pool', 'description' => 'A little swim?',
            'coordLat' => '46.78525', 'coordLng' => '6.64623'];
        DB::table('features')->insert($feature7);
        $feature8 = ['name' => 'Skating rink', 'description' => 'One activity for winter',
            'coordLat' => '46.78413', 'coordLng' => '6.64518'];
        DB::table('features')->insert($feature8);
        $feature9 = ['name' => 'Tennis club', 'description' => 'Time to move!',
            'coordLat' => '46.78433', 'coordLng' => '6.64691'];
        DB::table('features')->insert($feature9);
        $feature10 = ['name' => '"Les Bains"', 'description' => 'Let\'s relax!',
            'coordLat' => '46.77164', 'coordLng' => '6.64809'];
        DB::table('features')->insert($feature10);
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
