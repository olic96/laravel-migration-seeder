<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class TrainController extends Controller
{
    public function index() 
    {
        $trains = Train::where('date_departure', date('Y-m-d'))->get();

        dd($trains);
    }
}
