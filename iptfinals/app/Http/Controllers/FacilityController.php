<?php

namespace App\Http\Controllers;

use App\Models\facility;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    public function index() {
        return response(facility::all());
    }
}
