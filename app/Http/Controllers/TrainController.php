<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function index(){
        $trains = Train::all()->where('departure_date', '2024-02-15');
        return view('home', compact('trains'));
    }
}
