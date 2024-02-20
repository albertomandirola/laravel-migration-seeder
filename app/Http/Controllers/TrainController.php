<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function index(){
        $data = strtotime("now");
        $data = date('Y/m/d', $data);
        $filtered_trains = Train::where('departure_date', '=', $data)->get();
        
        return view('home', compact('filtered_trains'));
    }
}
