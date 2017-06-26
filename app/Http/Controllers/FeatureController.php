<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feature;
use App\Http\Requests\FeatureStoreRequest;
use Illuminate\Support\Facades\DB;

class FeatureController extends Controller
{
    // Index method of this controller 
    public function index() {
        // Get all features in the features table (see database)
        $features = DB::table('features')->get();
        return $features; // Json format
    }
    
    // Method to add a new feature through a form
    public function create() {
        // View with a form
        return view('create');
    }
    
    // Method to store the new feature
    public function store(FeatureStoreRequest $request) {
        $feature = new Feature(); // With the Feature keyword, we call Feature.php model
        $feature->name = $request->name;
        $feature->description = $request->description;
        $feature->coordLat = $request->latitude;
        $feature->coordLng = $request->longitude;
        $feature->save(); 
        
        // Redirection
        return(redirect('/features'));
    }
}