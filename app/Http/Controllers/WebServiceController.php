<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class WebServiceController extends Controller
{
    // Index method of this controller 
    public function index() {
        // Get all features in the features table (see database)
        $features = DB::table('features')->get();
        return $features;
    }
}
