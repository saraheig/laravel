<?php

namespace App\Http\Controllers\Api\V1;

use App\Feature;
use App\Http\Requests\FeatureStoreRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Transformers\ConferenceTransformer;
use App\Models\Conference;
use Dingo\Api\Contract\Http\Request;
use Dingo\Api\Http\Response;
use Dingo\Api\Routing\Helpers;
use Illuminate\Routing\Controller;

class FeatureController extends Controller
{

    public function index() {
        $features = DB::table('features')->get();
        return $features;
    }

    public function store(FeatureStoreRequest $request) {
        $feature = new Feature();
        $feature->name = $request->name;
        $feature->description = $request->description;
        $feature->coordLat = $request->latitude;
        $feature->coordLng = $request->longitude;
        $feature->save(); 
    }
}